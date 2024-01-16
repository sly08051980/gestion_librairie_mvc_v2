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
    <?php  foreach($fournisseurs as $f ): ?>
    <tr>
        <td><?=$f->Titre_livre?></td>
        <td><?=$f->Editeur?></td>
        <td><?=$f->Raison_sociale?></td>
        <td><?=$f->Date_achat?></td>
        <td><?=$f->Prix_achat?></td>
        <td><?=$f->Nbr_exemplaires?></td>
       
    </tr>
    <?php endforeach; ?>
</table>
</div>