<?php

class Home extends Controller
{

//    -----------------------exemple d'une vue contenant le modèle User-----------------------
//    -----------------------Le paramètre name étant contenu dans l'url-----------------------
    public function index($name ='')
    {
        $user = $this->model('User');
        $user->name = $name;
        
        $this->view('home/index', ['name' => $user->name]);
    }

}