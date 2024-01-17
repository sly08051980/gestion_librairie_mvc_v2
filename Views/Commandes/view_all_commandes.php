<div>
    <a href="?controller=commandes&action=ajouter_commandes"class="btn btn-primary">Ajouter commande</a>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table id='table' class="table table-success table-striped">
    <thead>
        <th>Livre</th>
        <th>Fournisseur</th>
        <th>Date_achat</th>
        <th>Prix_achat</th>
        <th>Nbr_exemplaires</th>
        <?php if ($_SESSION['Status'] == 'Admin') {
            echo '<th>Action</th>';
        }
        ?>
  
    </thead>
    <?php  foreach($commandes as $c ): ?>
    <tr>
        <td><?=$c->Titre_livre?></td>
        <td><?=$c->Raison_sociale?></td>
        <td><?=$c->Date_achat?></td>
        <td><?=$c->Prix_achat?></td>
        <td><?=$c->Nbr_exemplaires?></td>
        <?php 
            if(isset($_SESSION["Status"]) && $_SESSION["Status"]=="Admin") 
                {echo '
                
        <td>
            <div class="d-flex flex-row">
            
                <a href="?controller=commandes&action=modifier&id='. $c->id_commande .'"">
                    <button type="submit" class="btn btn-primary btn-sm me-3"><i class="bi bi-pencil-fill"></i></button></a>
                    <a href="?controller=commandes&action=supprimer&id='. $c->id_commande .'"">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmation()"><i class="bi bi-pencil-fill"></i></button></a>
            </div>
        </td>';} 
       ?>  
       
    </tr>
    <?php endforeach; ?>
</table>
</div>