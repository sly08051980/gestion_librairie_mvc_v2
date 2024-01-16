<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table id='table'class="table table-success table-striped">
    <thead>
        <th>Code_fournisseur</th>
        <th>Raison_sociale</th>
        <th>Rue_fournisseur</th>
        
   
    </thead>
    <?php  foreach($fournisseurs as $f ): ?>
    <tr>
        <td><?=$f->Code_fournisseur?></td>
        <td><?=$f->Raison_sociale?></td>
        <td><?=$f->Rue_fournisseur?></td>
       
       
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              