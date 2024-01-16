
    <form name ="form1" action="?controller=home&action=home_authentification" method="POST">

 
        <div class="row justify-content-center">
            <div class="col-4 ">
                <div class="mb-3">

                    <label for="utilisateur" class="form-label">email</label>
                    <input type="text" class="form-control" onchange= checkEmail(document.form1.utilisateur) id="utilisateur" name="utilisateur">
                </div>
                <div class="mb-3">
                    <label for="mdp" class="form-label">Password</label>
                    <input type="password" class="form-control" id="mdp" name="mdp">
                </div>
           
       
        <input type="submit" class="btn btn-primary" value="Envoy">
        <a class="btn btn-primary" href="?controller=session&action=session_inscription">Inscription</a>
        <a class="btn btn-primary" href="">Mot de passe oublié</a>
        
        </div>
        </div>
    </form>
    <?php

?>