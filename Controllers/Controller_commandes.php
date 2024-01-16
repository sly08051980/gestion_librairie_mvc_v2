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
}