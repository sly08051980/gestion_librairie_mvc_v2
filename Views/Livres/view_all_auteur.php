<div>
    <form method="POST" action="?controller=livres&action=all_find_auteur">
        <select name="auteur" >
            <?php foreach($auteur as $t): ?>
            <option  value="<?=$t->Nom_auteur?>"><?=$t->Nom_auteur?>
            </option>
            <?php endforeach; ?>
            </select>
   <input type="submit"></input>
    </form>
            
