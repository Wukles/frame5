<?php

namespace src;
use Services\Db;
use src\ActiveRecordEntity;


abstract class ActiveRecordEntity{
    protected $id;

    public function __set($name, $value){
        $propertyName = $this->underscoreToCamelcase($name);
        $this->$propertyName = $value;
    }

    public function underscoreToCamelcase(string $name):string
    {
        return lcfirst(str_replace('_', '', ucwords($name, '_')));
    }

    public function getId()
        {
            return $this->id;
        }

    public static function findAll():array{
        $db = new Db;
        $sql = 'SELECT * FROM `'.static::getTableName().'`';
        $articles = $db->query($sql, [], static::class);
        return $articles;
    }

    public static function getById(int $id):static{
        $db = new Db;
        $sql = 'SELECT * FROM `'.static::getTableName().'` WHERE `id`=:id;';
        $article = $db->query($sql, [':id'=>$id], static::class);
        return $article[0];
    }

    abstract static function getTableName():string;


}