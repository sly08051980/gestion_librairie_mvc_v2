<?php

class Model
{
    private $bd;

    private static $instance=null;

    private function __construct()
    {
        try {
            $this->bd = new PDO('mysql:host=localhost;dbname=gestion_librairie_mvc', 'root', '');
            $this->bd->query("SET NAMES 'utf8'");
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch (PDOException $e) 
        {
            die('<p>Echec connexion. Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    public static function get_model()
    {

        if(is_null(self::$instance))
        {
            self::$instance=new Model();
        }
        return self::$instance;
    }

// ----------------------------------PARTIE HOME--------------------------------------------//

    

// ----------------------------------PARTIE LIVRE--------------------------------------------//
    public function get_all_livres()
    {
        try {
            $requete = $this->bd->prepare('SELECT * FROM livres');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function get_all_titres()
    {
        try {
            $requete = $this->bd->prepare('SELECT DISTINCT Titre_livre FROM livres');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function get_all_find_titres()
    
    {
        try {
            $title=$_POST["livres"];
            $requete = $this->bd->prepare('SELECT * FROM livres WHERE Titre_livre= :t');
            $requete->execute(array(':t'=>$title));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function get_all_auteur()
    
    {
        try {
         
            $requete = $this->bd->prepare('SELECT  Nom_auteur  FROM livres ORDER BY Nom_auteur');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function get_all_find_auteur()
    
    {
        try {
            $auteur=$_POST["auteur"];
            $requete = $this->bd->prepare('SELECT * FROM livres WHERE Nom_auteur= :a');
            $requete->execute(array(':a'=>$auteur));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    
    
    public function get_all_editeur()
    
    {
        try {
         
            $requete = $this->bd->prepare('SELECT DISTINCT Editeur  FROM livres ORDER BY Editeur');
            $requete->execute();
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
    public function get_all_find_editeur()
    
    {
        try {
            $editeur=$_POST["editeur"];
            $requete = $this->bd->prepare('SELECT * FROM livres WHERE Editeur= :e');
            $requete->execute(array(':e'=>$editeur));
            
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }


    public function get_modifier_livres(){
        // try{
        //     $_GET['id'];


        // }
    }
// ----------------------------------PARTIE fournisseur--------------------------------------------//
public function get_all_fournisseurs()
{
    try {
        $requete = $this->bd->prepare('SELECT * FROM fournisseurs');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}



public function get_all_fournisseurs_raison_social()
{
    try {
        $requete = $this->bd->prepare('SELECT Raison_sociale FROM fournisseurs');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

public function get_all_fournisseurs_find_raison_social()
    
{
    try {
        $raisonsocial=$_POST["raison_social"];
        $requete = $this->bd->prepare('SELECT * FROM fournisseurs WHERE Raison_sociale= :e');
        $requete->execute(array(':e'=>$raisonsocial));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}
public function get_all_fournisseurs_localite()
{
    try {
        $requete = $this->bd->prepare('SELECT DISTINCT Localite FROM fournisseurs');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

public function get_all_fournisseurs_find_Localite()
    
{
    try {
        $localite=$_POST["localite"];
        $requete = $this->bd->prepare('SELECT * FROM fournisseurs WHERE Localite= :e');
        $requete->execute(array(':e'=>$localite));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}
 

public function get_all_fournisseurs_pays()
{
    try {
        $requete = $this->bd->prepare('SELECT DISTINCT Pays FROM fournisseurs');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

public function get_all_fournisseurs_find_pays()
    
{
    try {
        $pays=$_POST["pays"];
        $requete = $this->bd->prepare('SELECT * FROM fournisseurs WHERE Pays= :p');
        $requete->execute(array(':p'=>$pays));
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}



// ----------------------------------PARTIE Commande--------------------------------------------//

public function get_all_commandes()
{
    try {
        $requete = $this->bd->prepare('SELECT id_commande, L.Titre_livre, F.Raison_sociale, Date_achat, Prix_achat, Nbr_exemplaires FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre;');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}


public function get_all_commandes_editeurs()
{
    try {
        $requete = $this->bd->prepare('SELECT DISTINCT Editeur  FROM livres;');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

public function get_all_commandes_find_editeurs()
{
    try {
        $editeur=$_POST["editeur"];
        $requete = $this->bd->prepare('SELECT id_commande,L.Editeur, L.Titre_livre, F.Raison_sociale, Date_achat, Prix_achat, Nbr_exemplaires FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre WHERE L.Editeur=:e;');
        $requete->execute(array(':e'=>$editeur));
      
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

public function get_all_commandes_fournisseurs()
{
    try {
        $requete = $this->bd->prepare('SELECT Raison_sociale, Id_fournisseur  FROM fournisseurs;');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

public function get_all_commandes_find_fournisseurs()
{
    try {
        $fournisseurs=$_POST["fournisseurs"];
        $requete = $this->bd->prepare('SELECT id_commande,L.Editeur, L.Titre_livre, F.Raison_sociale, Date_achat, Prix_achat, Nbr_exemplaires FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre WHERE C.Id_fournisseur=:f;');
        $requete->execute(array(':f'=>$fournisseurs));
      
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

public function get_all_commandes_dates()
{
    try {
        $requete = $this->bd->prepare('SELECT DISTINCT Date_achat  FROM commander;');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

public function get_all_commandes_find_dates()
{
    try {
        $dates=$_POST["dates"];
        $requete = $this->bd->prepare('SELECT id_commande,L.Editeur, L.Titre_livre, F.Raison_sociale, Date_achat, Prix_achat, Nbr_exemplaires FROM commander C JOIN fournisseurs F ON C.Id_fournisseur = F.Id_fournisseur JOIN livres L ON C.Id_Livre = L.Id_Livre WHERE C.Date_achat=:d;');
        $requete->execute(array(':d'=>$dates));
      
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

public function get_home_authentification()
{
    try {
        
       
        $utilisateur = $_POST['utilisateur'];
        $mdp=$_POST['mdp'];
      
        $requete=$this->bd->prepare('SELECT * FROM utilisateur where email=:u and MdP =:p ');
        $requete->execute(array(':u'=>$utilisateur,'p'=>$mdp));
        
  
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}
public function get_inscription_valider(array $data){
    try {
    $nom = isset($_POST['nom']) ? $_POST['nom'] : "";
    $prenom = isset($_POST['prenom']) ? $_POST['prenom'] : "";
    $age = isset($_POST['age']) ? $_POST['age'] : "";
    $today = date("Y-m-d");
    $Mdp = isset($_POST['mdp']) ? $_POST['mdp'] : "";
    $email=isset($_POST['email']) ? $_POST['email'] : "";
 

    $requete = $this->bd->prepare('INSERT INTO utilisateur (idUtilisateur,nom, prenom, age, Date, MdP, Statut,email) 
    VALUES (NULL, :nom, :prenom, :age, :today, :Mdp, NULL,:email)');
    $requete->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':age' => $age,
        ':today' => $today,
        ':Mdp' => $Mdp,
        ':email' => $email
    ]);

    return [
        ':nom' => $nom,
        ':Mdp' => $Mdp
    ];
}catch (PDOException $e) {
    die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
}
}

}


