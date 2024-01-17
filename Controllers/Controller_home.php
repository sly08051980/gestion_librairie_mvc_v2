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
        $m = Model::get_model();

        $data =['utilisateur'=> $m->get_utilisateur()];
        $this->render("utilisateurs",$data);
    }
    public function action_supprimer_utilisateur()
    {
    

       
        $this->render("supprimer_utilisateur");
    }

    public function action_modifier_utilisateur(){
        $m = Model::get_model();
        $idutilisateur = $_GET['id'];
        $data = ['modifierutilisateur' => $m->get_modifier_utilisateur($idutilisateur)];
        $this->render("modifier_utilisateur", $data);
    }
    public function action_valid_modifier_utilisateur(){
        $m = Model::get_model();
        $idutilisateur = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $age = $_POST['age'];
        $date = $_POST['date'];
        $mdp = $_POST['mdp'];
        $statut = $_POST['statut'];
        $email = $_POST['email'];
        $data = ['validmodifierutilisateur' => $m->get_valid_modifier_utilisateur($idutilisateur, $nom,$prenom,$age,$date,$mdp,$statut,$email)];
if ($data){
    $data =['utilisateur'=> $m->get_utilisateur()];
    $this->render("utilisateurs",$data);
}
      
    }

}