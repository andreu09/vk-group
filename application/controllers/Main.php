<?php

class Main extends CI_Controller
{
    function index()
    {
        echo $this->twig->render('twig/pages/Main.twig');
    }
}