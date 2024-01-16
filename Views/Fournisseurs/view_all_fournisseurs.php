<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table id='table'class="table table-success table-striped">
    <thead>
        <th>Code_fournisseur</th>
        <th>Raison_sociale</th>
        <th>Rue_fournisseur</th>
        <th>Code_postal</th>
        <th>Localite</th>
        <th>Pays</th>
        <th>Tel_fournisseur</th>
        <th>Url_fournisseur</th>
        <th>Email_fournisseur</th>
        <th>Fax_fournisseur</th>
        <?php if ($_SESSION['Status'] == 'Admin') {
            echo '<th>Action</th>';
        }
        ?>
   
    </thead>
    <?php  foreach($fournisseurs as $f ): ?>
    <tr>
        <td><?=$f->Code_fournisseur?></td>
        <td><?=$f->Raison_sociale?></td>
        <td><?=$f->Rue_fournisseur?></td>
        <td><?=$f->Code_postal?></td>
        <td><?=$f->Localite?></td>
        <td><?=$f->Pays?></td>
        <td><?=$f->Tel_fournisseur?></td>
        <td><?=$f->Url_fournisseur?></td>
        <td><?=$f->Email_fournisseur?></td>
        <td><?=$f->Fax_fournisseur?></td>
        <?php 
            if(isset($_SESSION["Status"]) && $_SESSION["Status"]=="Admin") 
                {echo '
                
        <td>
            <div class="d-flex flex-row">
            
                <a href="?controller=fournisseurs&action=modifier&id='. $f->Id_fournisseur .'"">
                    <button type="submit" class="btn btn-primary btn-sm me-3"><i class="bi bi-pencil-fill"></i></button></a>
                    <a href="?controller=fournisseurs&action=supprimer&id='. $f->Id_fournisseur .'"">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmation()"><i class="bi bi-pencil-fill"></i></button></a>
            </div>
        </td>';} 
       ?>  
       
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              