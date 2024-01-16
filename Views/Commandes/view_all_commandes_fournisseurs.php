<div>
    <form method="POST" action="?controller=commandes&action=all_commandes_find_fournisseurs">
        <select name="fournisseurs" >
            <?php foreach($fournisseurs as $e): ?>
            <option  value="<?=$e->Id_fournisseur?>"><?=$e->Raison_sociale?>
            </option>
            <?php endforeach; ?>
            </select>
   <input type="submit"></input>
    </form>
            