<?php

namespace App\Table;

use \App\App;

class Article
{
    public $id;
    public $titre;
    public $contenu;
    public $date;
    //degriser en cas de non fonctionnement
    // public $categorie;


    public static function getLast()
    {
        return App::getDb()->query("
        SELECT articles.id, articles.titre, articles.contenu, categories.titre as categorie 
        FROM articles 
        LEFT JOIN categories 
            ON category_id = categories.id", __CLASS__);
    }

    //get Methode magique
    public function __get($key)
    {
        $method = 'get' . $key;
        return $this->$method();
    }

    public function getURL()
    {
        return 'index.php?p=article&id=' . $this->id;
    }

    public function getExtrait()
    {
        $html =  '<p>' . substr($this->contenu, 0, 100) . '...</p>';
        $html .=  '<p><a href="' . $this->getURL() . '">Voir la suite</a></p>';
        return $html;
    }
}
