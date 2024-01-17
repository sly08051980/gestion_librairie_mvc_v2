<?php

class Controller_livres extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {
        $this->render('home');
    }

    public function action_all_livres()
    {
        $m=Model::get_model();
        $data=['livre'=>$m->get_all_livres()];
        $this->render("all_livres",$data);

    }

    public function action_all_titres()
    {
        $m=Model::get_model();
        $data=['titres'=>$m->get_all_titres()];
        $this->render("all_titres",$data);

    }

    public function action_all_find_titres()
    {
      
        $m=Model::get_model();
        $data=['findtitres'=>$m->get_all_find_titres()];
        $this->render("all_find_titres",$data);

    }
    public function action_all_auteur()
    {
      
        $m=Model::get_model();
        $data=['auteur'=>$m->get_all_auteur()];
        $this->render("all_auteur",$data);

    }

    public function action_all_find_auteur()
    {
      
        $m=Model::get_model();
        $data=['findauteur'=>$m->get_all_find_auteur()];
        $this->render("all_find_auteur",$data);

    }
    public function action_all_editeur()
    {
      
        $m=Model::get_model();
        $data=['editeur'=>$m->get_all_editeur()];
        $this->render("all_editeur",$data);

    }

    public function action_all_find_editeur()
    {
      
        $m=Model::get_model();
        $data=['findediteur'=>$m->get_all_find_editeur()];
        $this->render("all_find_editeur",$data);

    }
    public function action_modifier(){
        
        $m=Model::get_model();
        $idlivre = $_GET['id'];
        $data = ['modifierLivres' => $m->get_modifier_livres($idlivre)];
        $this->render("livre_modifier", $data);
    }

    public function action_update_livre(){
        $m=Model::get_model();
        $id_livre = $_POST['Id_Livre'];
        $isbn = $_POST['ISBN'];
        $titre = $_POST['Titre'];
        $theme = $_POST['Theme'];
        $nbr_pages = $_POST['Nbr_pages_livre'];
        $format = $_POST['Format_livre'];
        $nom_auteur = $_POST['Nom_auteur'];
        $prenom_auteur = $_POST['Prenom_auteur'];
        $editeur = $_POST['Editeur'];
        $annee_edition = $_POST['Annee_edition'];
        $prix_vente = $_POST['Prix_vente'];
        $langue = $_POST['Langue_livre'];
        $data = ['modifierLivres' => $m->get_update_livre($id_livre, $isbn, $titre, $theme, $nbr_pages, $format, $nom_auteur, $prenom_auteur, $editeur, $annee_edition, $prix_vente, $langue)];
       

        if($data){
            $data=['livre'=>$m->get_all_livres()];
            $this->render("all_livres",$data);
        }else{
            $this->render("error",$data);
        }
       
    }
    public function action_supprimer(){
        
        $m=Model::get_model();
        $idlivre = $_GET['id'];
        $data = ['supprimerLivres' => $m->get_supprimer_livres($idlivre)];
        if($data){
            $data=['livre'=>$m->get_all_livres()];
            $this->render("all_livres",$data);
        }else{
            $this->render("error",$data);
        }
    }
    public function action_ajouter_livres(){
        
        $this->render("ajouter_livres");
    }

    public function action_ajouter_livres_enregistrement(){
        $m=Model::get_model();

        $ISBN = $_POST['ISBN'];
        $Titre = $_POST['Titre'];
        $Theme = $_POST['Theme'];
        $Nbr_pages_livre = $_POST['Nbr_pages_livre'];
        $Format_livre = $_POST['Format_livre'];
        $Nom_auteur = $_POST['Nom_auteur'];
        $Prenom_auteur = $_POST['Prenom_auteur'];
        $Editeur = $_POST['Editeur'];
        $Annee_edition = $_POST['Annee_edition'];
        $Prix_vente = $_POST['Prix_vente'];
        $Langue_livre = $_POST['Langue_livre'];

        $data = ['modifierLivres' => $m->get_ajouter_livres_enregistrement($ISBN, $Titre, $Theme, $Nbr_pages_livre, $Format_livre, $Nom_auteur,
         $Prenom_auteur, $Editeur, $Annee_edition, $Prix_vente, $Langue_livre)];

         if($data){
            $this->render("ajouter_livres");
         }else{
            $this->render("error",$data); 
         }
       
    }
}