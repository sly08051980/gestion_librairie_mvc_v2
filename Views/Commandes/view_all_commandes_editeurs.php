<div>
    <form method="POST" action="?controller=commandes&action=all_commandes_find_editeurs">
        <select name="editeur" >
            <?php foreach($editeur as $e): ?>
            <option  value="<?=$e->Editeur?>"><?=$e->Editeur?>
            </option>
            <?php endforeach; ?>
            </select>
   <input type="submit"></input>
    </form>
            