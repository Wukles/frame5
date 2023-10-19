<?php
    namespace src\Models\Article;
    use src\Models\User\User;
    use src\ActiveRecordEntity;

    class Article extends ActiveRecordEntity{

        protected $title;
        protected $text;
        protected $authorId;

        public function getAuthorId()
        {
            return $this->authorId;
        }
        public function getTitle():string
        {
            return $this->title;
        }
        public function getText():string
        {
            return $this->text;
        }

        public function setTitle(string $title){
            $this->title = $title;
        }

        public function setText(string $text){
            $this->text = $text;
        }

        public function setAuthor(string $author){
            $this->author = $author;
        }

        public static function getTableName():string
        {
            return 'articles';
        }
    }
?>