<?php

namespace src\Controllers;
use src\View\View;
//use Services\Db;
use src\Models\Article\Article;
use src\Models\User\User;
use src\ActiveRecordEntity;


class ArticleController{
    private $view;
    //private $db;

    public function __construct(){
        $this->view = new View(__DIR__.'/../../templates/');
        //$this->db = new Db;
    }

    public function index(){
        $articles = Article::findAll();
        $this->view->renderHtml('main/main.php', ['articles'=>$articles]);
    }

    public function show($id){
        $article = Article::getById($id);
        $user = $article->getAuthorId();
       
        if (!$article){
            $this->view->renderHtml('main/error.php',[], 404);
            return;
        }
        $this->view->renderHtml('articles/show.php', ['article'=>$article, 'user'=>$user]);
    }

    public function create(){
        $users = User::findAll();
        $this->view->renderHtml('articles/create.php', ['users'=>$users]);
    }

    public function store(){
        $article = new Article;
        $article->setTitle($_POST['title']);
        $article->setText($_POST['text']);
        $article->setAuthorId($_POST['author']);
        $article->save();
        //return $this->view->renderHtml('');
        $this->index();
    }

    public function edit($id){
        $article = Article::getById($id);
        $users = User::findAll();
        //$user = User::getById($article->getAuthorId());
        $this->view->renderHtml('articles/edit.php', ['article'=>$article, 'users'=>$users]);
    }

    public function update(int $id){
        $article = Article::getById($id);
        $article->setTitle($_POST['title']);
        $article->setText($_POST['text']);
        $article->setAuthorId($_POST['author']);
        $article->save();
        $this->show($id);
    }

    public function delete(int $id){
        $article = Article::getById($id);
        $article->delete();
        $this->index();
    }
}