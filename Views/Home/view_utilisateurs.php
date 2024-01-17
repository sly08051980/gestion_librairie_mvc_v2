<div>
    <p> <?= isset($search)?'Recherche par '.$search:'' ?></p>
<table id='table'class="table table-success table-striped">
    <thead>
        <th>nom</th>
        <th>prenom</th>
        <th>age</th>
        <th>Statut</th>
        <th>email</th>
   
        <?php if ($_SESSION['Status'] == 'Admin') {
            echo '<th>Action</th>';
        }
        ?>
        
    </thead>
    <?php  foreach($utilisateur as $u ): ?>
    <tr>
        <td><?=$u->nom?></td>
        <td><?=$u->prenom?></td>
        <td><?=$u->age?></td>
        <td><?=$u->Statut?></td>
        <td><?=$u->email?></td>
      
        <?php 
            if(isset($_SESSION["Status"]) && $_SESSION["Status"]=="Admin") 
                {echo '
                
        <td>
            <div class="d-flex flex-row">
            
                <a href="?controller=home&action=modifier_utilisateur&id='. $u->idUtilisateur .'"">
                    <button type="submit" class="btn btn-primary btn-sm me-3"><i class="bi bi-pencil-fill"></i></button></a>
                    <a href="?controller=home&action=supprimer_utilisateur&id='. $u->idUtilisateur .'"">
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmation()"><i class="bi bi-pencil-fill"></i></button></a>
            </div>
        </td>';} 
       ?>  
       
    </tr>
    <?php endforeach; ?>
</table>
</div>            
              