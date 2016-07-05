<?php

class App
{

//    ------------------Valeurs par défaut du controller / méthode / parametres------------------

    protected $controller = 'home';

    protected $method = 'index';

    protected $params = [];
    
    public  function __construct()
    {
        $url = $this->parseUrl();



//        -----------Changement de la variable controller (=premier parametre $url)--------------
        if (file_exists('../app/controllers/'.$url[0].'.php'))
        {
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' .$this->controller. '.php';

        $this->controller = new $this->controller;


//        ----------------------------------Si la méthode existe----------------------------------
//        ---------------------------Changement de la variable methode----------------------------
        if (isset($url[1]))
        {
            if(method_exists($this->controller, $url[1]))
            {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

//        -----(Unset sur $url pour que les valeurs restantes soient forcément les parametres)-----

//        ---------------------Permet de reset le tableau à partir de l'index 0--------------------
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method],$this->params);
    }


//    ----------------------Réécriture de l'url sous forme de tableau------------------------------
    public function parseUrl()
    {
        if(isset($_GET['url']))
        {
            return $url = explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }
}