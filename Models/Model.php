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


public function get_utilisateur(){
    try {
        $requete = $this->bd->prepare('SELECT * FROM utilisateur');
        $requete->execute();
        
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

public function get_modifier_utilisateur($idutilisateur){
    try {
        $requete = $this->bd->prepare('SELECT * FROM utilisateur WHERE idUtilisateur=:idutilisateur');
        $requete->execute(array(':idutilisateur' => $idutilisateur)); 
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

public function get_valid_modifier_utilisateur($idutilisateur, $nom,$prenom,$age,$date,$mdp,$statut,$email){
    try {
        $requete = $this->bd->prepare('UPDATE utilisateur 
                                       SET nom = :nom,
                                           prenom = :prenom,
                                           age = :age,
                                           Date = :date,
                                           MdP = :mdp,
                                           Statut = :statut,
                                           email = :email
                                       WHERE idUtilisateur = :idutilisateur');
        $requete->execute(array(
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':age' => $age,
            ':date' => $date,
            ':mdp' => $mdp,
            ':statut' => $statut,
            ':email' => $email,
            ':idutilisateur' => $idutilisateur
        ));
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage());
    }
}
    

// ----------------------------------PARTIE LIVRE--------------------------------------------//

public function get_ajouter_livres_enregistrement($ISBN, $Titre, $Theme, $Nbr_pages_livre, $Format_livre, $Nom_auteur,
$Prenom_auteur, $Editeur, $Annee_edition, $Prix_vente, $Langue_livre){
    try {
    $requete = $this->bd->prepare('INSERT INTO livres (Id_Livre,ISBN, Titre_livre, Theme_livre, Nbr_pages_livre, Format_livre, 
    Nom_auteur,Prenom_auteur,Editeur,Annee_edition,Prix_vente,Langue_livre) 
    VALUES (NULL, :ISBN, :Titre_livre, :Theme_livre, :Nbr_pages_livre, :Format_livre, :Nom_auteur,:Prenom_auteur,:Editeur,:Annee_edition,
    :Prix_vente,:Langue_livre)');
    $requete->execute([
        ':ISBN' => $ISBN,
        ':Titre_livre' => $Titre,
        ':Theme_livre' => $Theme,
        ':Nbr_pages_livre' => $Nbr_pages_livre,
        ':Format_livre' => $Format_livre,
        ':Nom_auteur' => $Nom_auteur,
        ':Prenom_auteur' => $Prenom_auteur,
         ':Editeur' => $Editeur,
        ':Annee_edition' => $Annee_edition,
        ':Prix_vente'=>$Prix_vente,
        ':Langue_livre'=>$Langue_livre
    ]);
}catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
      
}
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


    public function get_modifier_livres($idlivre){
        try{
      
            $requete = $this->bd->prepare('SELECT * FROM livres WHERE Id_Livre = :a');
            $requete->execute(array(':a'=>$idlivre));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_update_livre($id_livre, $isbn, $titre, $theme, $nbr_pages, $format, $nom_auteur, $prenom_auteur, $editeur, $annee_edition, $prix_vente, $langue) {

        try {
            $requete = $this->bd->prepare('UPDATE livres 
                                           SET ISBN = :isbn,
                                               Titre_livre = :titre,
                                               Theme_livre = :theme,
                                               Nbr_pages_livre = :nbr_pages,
                                               Format_livre = :format,
                                               Nom_auteur = :nom_auteur,
                                               Prenom_auteur = :prenom_auteur,
                                               Editeur = :editeur,
                                               Annee_edition = :annee_edition,
                                               Prix_vente = :prix_vente,
                                               Langue_livre = :langue
                                           WHERE Id_Livre = :id_livre');
            $requete->execute(array(
                ':id_livre' => $id_livre,
                ':isbn' => $isbn,
                ':titre' => $titre,
                ':theme' => $theme,
                ':nbr_pages' => $nbr_pages,
                ':format' => $format,
                ':nom_auteur' => $nom_auteur,
                ':prenom_auteur' => $prenom_auteur,
                ':editeur' => $editeur,
                ':annee_edition' => $annee_edition,
                ':prix_vente' => $prix_vente,
                ':langue' => $langue
            ));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage());
        }
    }
    public function get_supprimer_livres($idlivre){
       
        try{
      
            $requete = $this->bd->prepare(' DELETE FROM `livres` WHERE  Id_Livre = :a');
            $requete->execute(array(':a'=>$idlivre));
        } catch (PDOException $e) {
            die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
        return $requete->fetchAll(PDO::FETCH_OBJ);
    }
// ----------------------------------PARTIE fournisseur--------------------------------------------//
public function get_ajouter_fournisseur_enregistrement($Code_fournisseur, $Raison_sociale, $Rue_fournisseur, $Code_postal, $Localite, $Pays, $Tel_fournisseur, $Url_fournisseur, $Email_fournisseur){
    try {
        $requete = $this->bd->prepare('INSERT INTO fournisseurs (Id_fournisseur, Code_fournisseur, Raison_sociale, Rue_fournisseur, Code_postal, Localite, Pays, Tel_fournisseur, Url_fournisseur, Email_fournisseur) 
        VALUES (NULL, :Code_fournisseur, :Raison_sociale, :Rue_fournisseur, :Code_postal, :Localite, :Pays, :Tel_fournisseur, :Url_fournisseur, :Email_fournisseur)');
        $requete->execute([
            ':Code_fournisseur' => $Code_fournisseur,
            ':Raison_sociale' => $Raison_sociale,
            ':Rue_fournisseur' => $Rue_fournisseur,
            ':Code_postal' => $Code_postal,
            ':Localite' => $Localite,
            ':Pays' => $Pays,
            ':Tel_fournisseur' => $Tel_fournisseur,
            ':Url_fournisseur' => $Url_fournisseur,
            ':Email_fournisseur' => $Email_fournisseur
        ]);
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
}
public function get_supprimer_fournisseurs($idfournisseur){
    try{
      
        $requete = $this->bd->prepare(' DELETE FROM `fournisseurs` WHERE  Id_fournisseur = :a');
        $requete->execute(array(':a'=>$idfournisseur));
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}
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

public function get_modifier_fournisseurs($idfournisseur){
    try{
  
        $requete = $this->bd->prepare('SELECT * FROM fournisseurs WHERE Id_fournisseur = :a');
        $requete->execute(array(':a'=>$idfournisseur));
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    return $requete->fetchAll(PDO::FETCH_OBJ);
}

public function get_update_fournisseurs($Id_fournisseur, $Code_fournisseur, $Raison_sociale, $Rue_fournisseur, $Code_postal, $Localite,
 $Pays, $Tel_fournisseur, $Url_fournisseur, $Email_fournisseur, $Fax_fournisseur) {

    try {
        $requete = $this->bd->prepare('UPDATE fournisseurs 
                                       SET Code_fournisseur = :Code_fournisseur,
                                       Raison_sociale = :Raison_sociale,
                                       Rue_fournisseur = :Rue_fournisseur,
                                       Code_postal = :Code_postal,
                                       Localite = :Localite,
                                       Pays = :Pays,
                                       Tel_fournisseur = :Tel_fournisseur,
                                       Url_fournisseur = :Url_fournisseur,
                                       Email_fournisseur = :Email_fournisseur,
                                       Fax_fournisseur = :Fax_fournisseur
                                       
                                       WHERE Id_fournisseur = :Id_fournisseur');
        $requete->execute(array(
            ':Id_fournisseur' => $Id_fournisseur,
            ':Code_fournisseur' => $Code_fournisseur,
            
            ':Raison_sociale' => $Raison_sociale,
            ':Rue_fournisseur' => $Rue_fournisseur,
            ':Code_postal' => $Code_postal,
            ':Localite' => $Localite,
            ':Pays' => $Pays,
            ':Tel_fournisseur' => $Tel_fournisseur,
            ':Url_fournisseur' => $Url_fournisseur,
            ':Email_fournisseur' => $Email_fournisseur,
            ':Fax_fournisseur' => $Fax_fournisseur
            
        ));
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage());
    }
}

// ----------------------------------PARTIE Commande--------------------------------------------//


public function get_ajouter_commande_commandes($Id_Livre, $Id_fournisseur, $Date_achat, $Prix_achat, $Nbr_exemplaires){
    try {
        $requete = $this->bd->prepare('INSERT INTO commander (Id_Livre, Id_fournisseur, Date_achat, Prix_achat, Nbr_exemplaires) 
            VALUES (:Id_Livre, :Id_fournisseur, :Date_achat, :Prix_achat, :Nbr_exemplaires)');
        $requete->execute([
            ':Id_Livre' => $Id_Livre,
            ':Id_fournisseur' => $Id_fournisseur,
            ':Date_achat' => $Date_achat,
            ':Prix_achat' => $Prix_achat,
            ':Nbr_exemplaires' => $Nbr_exemplaires,
        ]);
    } catch (PDOException $e) {
        die('Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
    }
    
}
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
    $utilisateur="Utilisateur";
 

    $requete = $this->bd->prepare('INSERT INTO utilisateur (idUtilisateur,nom, prenom, age, Date, MdP, Statut,email) 
    VALUES (NULL, :nom, :prenom, :age, :today, :Mdp, :utilisateur,:email)');
    $requete->execute([
        ':nom' => $nom,
        ':prenom' => $prenom,
        ':age' => $age,
        ':today' => $today,
        ':Mdp' => $Mdp,
        ':email' => $email,
        ':utilisateur'=>$utilisateur
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


