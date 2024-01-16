<?php

class Controller_session extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_utilisateur()
    {
        $this->render('header');
    }
    public function action_session_inscription(){
        $this->render('inscription');
    }
    


}