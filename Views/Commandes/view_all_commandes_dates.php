<div>
    <form method="POST" action="?controller=commandes&action=all_commandes_find_dates">
        <select name="dates" >
            <?php foreach($dates as $e): ?>
            <option  value="<?=$e->Date_achat?>"><?=$e->Date_achat?>
            </option>
            <?php endforeach; ?>
            </select>
   <input type="submit"></input>
    </form>
            