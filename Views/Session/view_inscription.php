<form action="?controller=home&action=inscription" method="POST">

    <form>
        <div class="row justify-content-center">
            <div class="col-4 ">
                <div class="mb-3">

                    <label for="nom" class="form-label">Nom utilisateur</label>
                    <input type="text" class="form-control" id="nom" name="nom">
                </div>
                <div class="mb-3">

                    <label for="prenom" class="form-label">Prenom utilisateur</label>
                    <input type="text" class="form-control" id="prenom" name="prenom">
                </div>
                <div class="mb-3">

                    <label for="age" class="form-label">age</label>
                    <input type="text" class="form-control" id="age" name="age">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>


                <div class="mb-3">
                    <label for="mdp" class="form-label">Password</label>
                    <input type="password" class="form-control" id="mdp" name="mdp">
                </div>

                <div class="mb-3">
                    <label for="confirm_mdp" class="form-label">Confirme Password</label>
                    <input type="password" class="form-control" id="confirm_mdp" name="confirm_mdp">
                </div>


                <input type="submit" class="btn btn-primary" value="Envoyé">


            </div>
        </div>
    </form>