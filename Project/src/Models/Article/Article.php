<?php
    namespace src\Models\Article;
    use src\Models\User\User;

    class Article{
        private $id;
        private $title;
        private $text;
        private $authorId;
        
        // public function __construct(string $title, string $text, User $authorId){
        //     $this->title = $title;
        //     $this->text = $text;
        //     $this->author = $author;
        // }

        public function __set($name, $value){
            echo 'я пытаюсь создать свойство '.$name. 'со значением: '.$value;
        }

        public function getAuthor():User
        {
            return $this->author;
        }
    }
?>
