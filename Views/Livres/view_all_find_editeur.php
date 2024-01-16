<div>
<table id='table'class="table table-success table-striped">
    <thead>
        <th>ISBN</th>
        <th>Titre</th>
        <th>Theme</th>
        <th>Nombre de pages</th>
        <th>Format</th>
        <th>Nom de l'auteur</th>
        <th>Prénom</th>
        <th>Éditeur</th>
        <th>Année d'édition</th>
        <th>Prix</th>
        <th>Langue</th>
    </thead>
    <?php  foreach($findediteur as $a ): ?>
    <tr>
        <td><?=$a->ISBN?></td>
        <td><?=$a->Titre_livre?></td>
        <td><?=$a->Theme_livre?></td>
        <td><?=$a->Nbr_pages_livre?></td>
        <td><?=$a->Format_livre?></td>
        <td><?=$a->Nom_auteur?></td>
        <td><?=$a->Prenom_auteur?></td>
        <td><?=$a->Editeur?></td>
        <td><?=$a->Annee_edition?></td>
        <td><?=$a->Prix_vente?></td>
        <td><?=$a->Langue_livre?></td>
       
    </tr>
    <?php endforeach; ?>
</table>
</div>     