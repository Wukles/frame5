<?php
    namespace src\Controllers;
    use src\View\View;
    use Services\Db;

    class MainController{
        private $view;
        private $db;


        public function __construct(){
            $this->view = new View(__DIR__.'/../../templates/');
            $this->db = new Db;
        }

        
        public function main(){
            $sql = 'SELECT * FROM `articles`';
            $articles = $this->db->query($sql);
            $this->view->renderHtml('main/main.php', ['articles'=>$articles]);
        }

        public function sayHello(string $name){
            echo "Hello, $name";
        }
    }
?>