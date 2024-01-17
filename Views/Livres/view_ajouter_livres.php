<div class="container">
    <form method="POST" action="?controller=livres&action=ajouter_livres_enregistrement">

        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">ISBN</span>
            <input type="text" class="form-control" name="ISBN" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Titre</span>
            <input type="text" class="form-control" name="Titre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Theme</span>
            <input type="text" class="form-control" name="Theme" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nombre de pages</span>
            <input type="text" class="form-control" name="Nbr_pages_livre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Format</span>
            <input type="text" class="form-control" name="Format_livre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Nom de l'auteur</span>
            <input type="text" class="form-control" name="Nom_auteur" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Prénom de l'auteur</span>
            <input type="text" class="form-control" name="Prenom_auteur" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Editeur</span>
            <input type="text" class="form-control" name="Editeur" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Année d'édition</span>
            <input type="text" class="form-control" name="Annee_edition" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Prix de vente</span>
            <input type="text" class="form-control" name="Prix_vente" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <div class="input-group input-group-sm mb-3">
            <span class="input-group-text" id="inputGroup-sizing-sm">Langue</span>
            <input type="text" class="form-control" name="Langue_livre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
        </div>
        <input type="submit" value="ajouter">
    </form>
</div>
