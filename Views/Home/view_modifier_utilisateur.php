<form action="?controller=home&action=valid_modifier_utilisateur" method="POST">

    <form>
        <div class="row justify-content-center">
            <div class="col-4 ">
            <div class="mb-3">


<input type="hidden" class="form-control" id="id" name="id" value="<?= $modifierutilisateur[0]->idUtilisateur  ?>">

</div>
                <div class="mb-3">

                    <label for="nom" class="form-label">Nom utilisateur</label>
                    <input type="text" class="form-control" id="nom" name="nom" value="<?= $modifierutilisateur[0]->nom ?>">
                  
                </div>
                <div class="mb-3">

                    <label for="prenom" class="form-label">Prenom utilisateur</label>
                    <input type="text" class="form-control" id="prenom" name="prenom" value="<?= $modifierutilisateur[0]->prenom ?>">
                </div>
                <div class="mb-3">

                    <label for="age" class="form-label">age</label>
                    <input type="text" class="form-control" id="age" name="age" value="<?= $modifierutilisateur[0]->age ?>">
                </div>
                <div class="mb-3">

<label for="date" class="form-label">Date</label>
<input type="text" class="form-control" id="date" name="date" value="<?= $modifierutilisateur[0]->Date ?>">
</div>
<div class="mb-3">
<label for="mdp" class="form-label">Mot de pass</label>
<input type="password" class="form-control" id="mdp" name="mdp" value="<?= $modifierutilisateur[0]->MdP ?>">
</div>
<div class="mb-3">
<label for="statut" class="form-label">Statut</label>
<input type="statut" class="form-control" id="statut" name="statut" value="<?= $modifierutilisateur[0]->Statut ?>">
</div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email"value="<?= $modifierutilisateur[0]->email ?>">
                </div>



                <input type="submit" class="btn btn-primary" value="Modifier">


            </div>
        </div>
    </form>