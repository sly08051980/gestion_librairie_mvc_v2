<?php

class Controller_commandes extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_commandes()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_all_commandes()];
        $this->render("all_commandes",$data);

    }

    public function action_all_commandes_editeurs()
    {
        $m=Model::get_model();
        $data=['editeur'=>$m->get_all_commandes_editeurs()];
        $this->render("all_commandes_editeurs",$data);

    }
    public function action_all_commandes_find_editeurs()
    {
        $m=Model::get_model();
        $data=['commandes'=>$m->get_all_commandes_find_editeurs()];
        $this->render("all_commandes_find_editeurs",$data);

    }

    public function action_all_commandes_fournisseurs()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_all_commandes_fournisseurs()];
        $this->render("all_commandes_fournisseurs",$data);

    }
    public function action_all_commandes_find_fournisseurs()
    {
        $m=Model::get_model();
        $data=['fournisseurs'=>$m->get_all_commandes_find_fournisseurs()];
        $this->render("all_commandes_find_fournisseurs",$data);

    }
    public function action_all_commandes_dates()
    {
        $m=Model::get_model();
        $data=['dates'=>$m->get_all_commandes_dates()];
        $this->render("all_commandes_dates",$data);

    }
    public function action_all_commandes_find_dates()
    {
        $m=Model::get_model();
        $data=['dates'=>$m->get_all_commandes_find_dates()];
        $this->render("all_commandes_find_dates",$data);

    }
    public function action_modifier()
    {
        $m=Model::get_model();
        $this->render("modifier");

    }
    public function action_supprimer()
    {
        $m=Model::get_model();
        $this->render("supprimer");

    }
    public function action_ajouter_commandes(){
        $m=Model::get_model();
        $data = [
            'allLivres' => $m->get_all_livres(),
            'allFournisseurs' => $m->get_all_fournisseurs()
        ];
        $this->render("ajouter_commandes",$data);
    }
    public function action_ajouter_commandes_commandes(){
        $m = Model::get_model();
    
    $Id_Livre = $_POST['Id_Livre'];
    $Id_fournisseur = $_POST['Id_fournisseur'];
    $Date_achat = $_POST['Date_achat'];
    $Prix_achat = $_POST['Prix_achat'];
    $Nbr_exemplaires = $_POST['Nbr_exemplaires'];
    
    $data = [
        'ajouterCommande' => $m->get_ajouter_commande_commandes(
            $Id_Livre, $Id_fournisseur, $Date_achat, $Prix_achat, $Nbr_exemplaires
        )
    ];
    
    if($data){
        $this->render("ajouter_commandes");
    } else {
        $this->render("error", $data);
    }
    }
}