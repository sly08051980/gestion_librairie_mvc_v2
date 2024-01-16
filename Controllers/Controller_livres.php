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
        $data=['modifierLivres'=>$m->get_modifier_livres()];
        $this->render("livre_modifier",$data);
    }
}