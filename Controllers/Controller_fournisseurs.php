<?php

class Controller_fournisseurs extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_fournisseurs()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_all_fournisseurs()];
        $this->render("all_fournisseurs",$data);

    }

    public function action_all_fournisseurs_raison_social()
    {
        $m=Model::get_model();
        $data=['raisonsocial'=>$m->get_all_fournisseurs_raison_social()];
        $this->render("all_fournisseurs_raison_social",$data);

    }
    public function action_all_fournisseurs_find_raison_social()
    {
        $m=Model::get_model();
        $data=['findraisonsocial'=>$m->get_all_fournisseurs_find_raison_social()];
        $this->render("all_fournisseurs_find_raison_social",$data);

    }

    public function action_all_fournisseurs_localite()
    {
        $m=Model::get_model();
        $data=['localite'=>$m->get_all_fournisseurs_localite()];
        $this->render("all_fournisseurs_localite",$data);

    }
    public function action_all_fournisseurs_find_localite()
    {
        $m=Model::get_model();
        $data=['localite'=>$m->get_all_fournisseurs_find_localite()];
        $this->render("all_fournisseurs_find_localite",$data);

    }



    public function action_all_fournisseurs_pays()
    {
        $m=Model::get_model();
        $data=['pays'=>$m->get_all_fournisseurs_pays()];
        $this->render("all_fournisseurs_pays",$data);

    }
    public function action_all_fournisseurs_find_pays()
    {
        $m=Model::get_model();
        $data=['findpays'=>$m->get_all_fournisseurs_find_pays()];
        $this->render("all_fournisseurs_find_pays",$data);

    }
    public function action_modifier(){
        
        $m=Model::get_model();
        $idfournisseur = $_GET['id'];
        $data = ['modifierFournisseur' => $m->get_modifier_fournisseurs($idfournisseur)];
        $this->render("modifier_fournisseurs", $data);
    }

    public function action_update_fournisseur(){
        $m=Model::get_model();
        $Id_fournisseur = $_POST['Id_fournisseur'];
        $Code_fournisseur = $_POST['Code_fournisseur'];
        $Raison_sociale = $_POST['Raison_sociale'];
        $Rue_fournisseur = $_POST['Rue_fournisseur'];
        $Code_postal = $_POST['Code_postal'];
        $Localite = $_POST['Localite'];
        $Pays = $_POST['Pays'];
        $Tel_fournisseur = $_POST['Tel_fournisseur'];
        $Url_fournisseur = $_POST['Url_fournisseur'];
        $Email_fournisseur = $_POST['Email_fournisseur'];
        $Fax_fournisseur = $_POST['Fax_fournisseur'];

        $data = ['modifierFournisseur' => $m->get_update_fournisseurs($Id_fournisseur, $Code_fournisseur, $Raison_sociale, $Rue_fournisseur, $Code_postal, $Localite, $Pays, $Tel_fournisseur, $Url_fournisseur, $Email_fournisseur, $Fax_fournisseur)];
       

        if($data){
            $data=['fournisseurs'=>$m->get_all_fournisseurs()];
        $this->render("all_fournisseurs",$data);
        }
       
    }

    public function action_supprimer(){
        
        $m=Model::get_model();
        $idfournisseur= $_GET['id'];
        $data = ['supprimerFournisseur' => $m->get_supprimer_fournisseurs($idfournisseur)];
        if($data){
            $data=['fournisseurs'=>$m->get_all_fournisseurs()];
            $this->render("all_fournisseurs",$data);
        }else{
            $this->render("error",$data);
        }
    }
    public function action_ajouter_fournisseurs(){
        
        $this->render("ajouter_fournisseurs");
    }
    public function action_ajouter_fournisseurs_enregistrement(){
        $m = Model::get_model();
    
        $Code_fournisseur = $_POST['Code_fournisseur'];
        $Raison_sociale = $_POST['Raison_sociale'];
        $Rue_fournisseur = $_POST['Rue_fournisseur'];
        $Code_postal = $_POST['Code_postal'];
        $Localite = $_POST['Localite'];
        $Pays = $_POST['Pays'];
        $Tel_fournisseur = $_POST['Tel_fournisseur'];
        $Url_fournisseur = $_POST['Url_fournisseur'];
        $Email_fournisseur = $_POST['Email_fournisseur'];
    
        $data = [
            'modifierFournisseur' => $m->get_ajouter_fournisseur_enregistrement(
                $Code_fournisseur, $Raison_sociale, $Rue_fournisseur, $Code_postal, $Localite,
                $Pays, $Tel_fournisseur, $Url_fournisseur, $Email_fournisseur
            )
        ];
    
        if($data){
            $this->render("ajouter_fournisseurs");
        } else {
            $this->render("error", $data);
        }
    }

}