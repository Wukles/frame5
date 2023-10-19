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
        $user = User::getById($article->getAuthorId());
       
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
        $article->setAuthor($_POST['author']);
        $article->save();
    }
}