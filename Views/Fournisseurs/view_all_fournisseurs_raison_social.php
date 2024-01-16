<div>
    <form method="POST" action="?controller=fournisseurs&action=all_fournisseurs_find_raison_social">
        <select name="raison_social" >
            <?php foreach($raisonsocial as $r): ?>
            <option  value="<?=$r->Raison_sociale?>"><?=$r->Raison_sociale?>
            </option>
            <?php endforeach; ?>
            </select>
   <input type="submit"></input>
    </form>
            