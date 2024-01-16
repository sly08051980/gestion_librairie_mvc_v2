<?php

class Controller_home extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_home_connexion()
    {
        $this->render("connexion");
    }
    public function action_home_authentification()
    {
 
        $m=Model::get_model();
        $data=['auth'=>$m->get_home_authentification($_POST['utilisateur'],$_POST['mdp'])];
        $this->render("valide_connexion",$data);
    }
    public function action_home_deconnexion()
    {
        $_SESSION=array();
        session_unset();

        session_destroy();

        echo "<script>
        document.location='?controller=home&action=home' </script>";
    }
    public function action_inscription(){
        $m = Model::get_model();

        $data =['inscription'=> $m->get_inscription_valider($_POST)];
        $this->render('home', $data);
    
           
        
    }
    public function action_utilisateurs()
    {
        $this->render("utilisateurs");
    }
}