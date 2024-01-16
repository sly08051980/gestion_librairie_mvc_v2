<div>
    <form method="POST" action="?controller=fournisseurs&action=all_fournisseurs_find_pays">
        <select name="pays" >
            <?php foreach($pays as $p): ?>
            <option  value="<?=$p->Pays?>"><?=$p->Pays?>
            </option>
            <?php endforeach; ?>
            </select>
   <input type="submit"></input>
    </form>
            