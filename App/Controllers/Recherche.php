<?php
namespace App\Controllers;
use System\Coeur\Controllers\Controller;
class Recherche extends Controller
{
public function accueil()
{
var_dump($this->model()->search_all());
$url_search = explode('/www/', $_SERVER['HTTP_REFERER']);
$this->view("accueil","recherche","Rechercher sur le site",compact('recherche'));
}
}
