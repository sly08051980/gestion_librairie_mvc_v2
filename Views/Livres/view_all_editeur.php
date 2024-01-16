<div>
    <form method="POST" action="?controller=livres&action=all_find_editeur">
        <select name="editeur" >
            <?php foreach($editeur as $e): ?>
            <option  value="<?=$e->Editeur?>"><?=$e->Editeur?>
            </option>
            <?php endforeach; ?>
            </select>
   <input type="submit"></input>
    </form>
            