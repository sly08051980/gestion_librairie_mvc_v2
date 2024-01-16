<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table id='table' class="table table-success table-striped">
    <thead>
        <th>Livre</th>
        <th>Editeur</th>
        <th>Fournisseur</th>
        <th>Date_achat</th>
        <th>Prix_achat</th>
        <th>Nbr_exemplaires</th>
  
    </thead>
    <?php  foreach($dates as $c ): ?>
    <tr>
        <td><?=$c->Titre_livre?></td>
        <td><?=$c->Editeur?></td>
        <td><?=$c->Raison_sociale?></td>
        <td><?=$c->Date_achat?></td>
        <td><?=$c->Prix_achat?></td>
        <td><?=$c->Nbr_exemplaires?></td>
       
    </tr>
    <?php endforeach; ?>
</table>
</div>