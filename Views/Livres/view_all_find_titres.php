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
    <?php  foreach($findtitres as $f ): ?>
    <tr>
        <td><?=$f->ISBN?></td>
        <td><?=$f->Titre_livre?></td>
        <td><?=$f->Theme_livre?></td>
        <td><?=$f->Nbr_pages_livre?></td>
        <td><?=$f->Format_livre?></td>
        <td><?=$f->Nom_auteur?></td>
        <td><?=$f->Prenom_auteur?></td>
        <td><?=$f->Editeur?></td>
        <td><?=$f->Annee_edition?></td>
        <td><?=$f->Prix_vente?></td>
        <td><?=$f->Langue_livre?></td>
       
    </tr>
    <?php endforeach; ?>
</table>
</div>     