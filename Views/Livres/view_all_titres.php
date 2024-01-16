<div>
    <form method="POST" action="?controller=livres&action=all_find_titres">
        <select name="livres" >
            <?php foreach($titres as $t): ?>
            <option  value="<?=$t->Titre_livre?>"><?=$t->Titre_livre?>
            </option>
            <?php endforeach; ?>
            </select>
   <input type="submit"></input>
    </form>
            
