<?php
    namespace src\Models\Article;
    use src\Models\User\User;

    class Article{
        private $id;
        private $title;
        private $text;
        private $authorId;

        public function __set($name, $value){
            $propertyName = $this->underscoreToCamelcase($name);
            $this->$propertyName = $value;
        }

        public function underscoreToCamelcase(string $name):string
        {
            return lcfirst(str_replace('_', '', ucwords($name, '_')));
        }

        public function getAuthorId(): User
        {
            return $this->authorId;
        }
        public function getId()
        {
            return $this->id;
        }
        public function getTitle():string
        {
            return $this->title;
        }
        public function getText():string
        {
            return $this->text;
        }
    }
?>