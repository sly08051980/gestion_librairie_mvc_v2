<div>
<table id='table'class="table table-success table-striped">
    <thead>
        <th>Code_fournisseur</th>
        <th>Raison_sociale</th>
        <th>Rue</th>
        <th>Code_postal</th>
        <th>Localite</th>
        <th>Pays</th>
        <th>Tel</th>
        <th>Url</th>
        <th>Email</th>
        <th>Fax</th>
       
    </thead>
    <?php  foreach($findpays as $a ): ?>
    <tr>
        <td><?=$a->Code_fournisseur?></td>
        <td><?=$a->Raison_sociale?></td>
        <td><?=$a->Rue_fournisseur?></td>
        <td><?=$a->Code_postal?></td>
        <td><?=$a->Localite?></td>
        <td><?=$a->Pays?></td>
        <td><?=$a->Tel_fournisseur?></td>
        <td><?=$a->Url_fournisseur?></td>
        <td><?=$a->Email_fournisseur?></td>
        <td><?=$a->Fax_fournisseur?></td>
    
       
    </tr>
    <?php endforeach; ?>
</table>
</div>     