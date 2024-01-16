<div>
    <form method="POST" action="?controller=fournisseurs&action=all_fournisseurs_find_localite">
        <select name="localite" >
            <?php foreach($localite as $r): ?>
            <option  value="<?=$r->Localite?>"><?=$r->Localite?>
            </option>
            <?php endforeach; ?>
            </select>
   <input type="submit"></input>
    </form>
            