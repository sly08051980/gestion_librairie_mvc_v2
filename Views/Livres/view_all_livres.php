<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
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
        <?php if ($_SESSION['Status'] == 'Admin') {
            echo '<th>Action</th>';
        }
        ?>
        
    </thead>
    <?php  foreach($livre as $l ): ?>
    <tr>
        <td><?=$l->ISBN?></td>
        <td><?=$l->Titre_livre?></td>
        <td><?=$l->Theme_livre?></td>
        <td><?=$l->Nbr_pages_livre?></td>
        <td><?=$l->Format_livre?></td>
        <td><?=$l->Nom_auteur?></td>
        <td><?=$l->Prenom_auteur?></td>
        <td><?=$l->Editeur?></td>
        <td><?=$l->Annee_edition?></td>
        <td><?=$l->Prix_vente?></td>
        <td><?=$l->Langue_livre?></td>
        <?php 
            if(isset($_SESSION["Status"]) && $_SESSION["Status"]=="Admin") 
                {echo '
                
        <td>
            <div class="d-flex flex-row">
            
                <a href="?controller=livres&action=modifier&id='. $l->Id_Livre .'"">
                    <button type="submit" class="btn btn-primary btn-sm me-3"><i class="bi bi-pencil-fill"></i></button></a>
                <a href="">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmation()"><i class="bi bi-pencil-fill"></i></button></a>
            </div>
        </td>';} 
       ?>  
       
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              