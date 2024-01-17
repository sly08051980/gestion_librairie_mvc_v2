<div class="container">
    <form method="POST" action="?controller=commandes&action=ajouter_commandes_commandes">

    <div class="input-group input-group-sm mb-3">
    <label class="input-group-text" for="Id_Livre">Livre</label>
    <select class="form-select" id="Id_Livre" name="Id_Livre" required>
        <?php foreach ($allLivres as $livre) : ?>
            <option value="<?= $livre->Id_Livre; ?>"><?= $livre->Titre_livre; ?></option>
        <?php endforeach; ?>
    </select>
</div>

<div class="input-group input-group-sm mb-3">
            <label class="input-group-text" for="Id_fournisseur">Fournisseur</label>
            <select class="form-select" id="Id_fournisseur" name="Id_fournisseur" required>
                <?php foreach ($allFournisseurs as $fournisseur) : ?>
                    <option value="<?= $fournisseur->Id_fournisseur; ?>"><?= $fournisseur->Raison_sociale; ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="input-group input-group-sm mb-3">
            <label class="input-group-text" for="Date_achat">Date d'achat</label>
            <input type="date" class="form-control" name="Date_achat" id="Date_achat" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <label class="input-group-text" for="Prix_achat">Prix d'achat</label>
            <input type="text" class="form-control" name="Prix_achat" id="Prix_achat" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <label class="input-group-text" for="Nbr_exemplaires">Nombre d'exemplaires</label>
            <input type="text" class="form-control" name="Nbr_exemplaires" id="Nbr_exemplaires" required>
        </div>
        
        <input type="submit" value="ajouter">
    </form>
</div>