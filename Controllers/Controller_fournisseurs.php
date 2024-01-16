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

    
}