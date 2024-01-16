<div class="container">
    <form method="POST" action="?controller=livres&action=update_livre">
    <div class="input-group input-group-sm mb-3">
    <input type="hidden" name="Id_Livre" value="<?= $modifierLivres[0]->Id_Livre ?>">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="ISBN" aria-label="Sizing example input" value="<?= $modifierLivres[0]->ISBN ?>" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Titre" aria-label="Sizing example input" value="<?= $modifierLivres[0]->Titre_livre ?>" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Theme" aria-label="Sizing example input" value="<?= $modifierLivres[0]->Theme_livre ?>" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Nbr_pages_livre" aria-label="Sizing example input" value="<?= $modifierLivres[0]->Nbr_pages_livre ?>" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Format_livre" aria-label="Sizing example input"  value="<?= $modifierLivres[0]->Format_livre ?>"aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Nom_auteur" aria-label=" Sizing example input" value="<?= $modifierLivres[0]->Nom_auteur ?>" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Prenom_auteur" aria-label="Sizing example input" value="<?= $modifierLivres[0]->Prenom_auteur ?>" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Editeur" aria-label="Sizing example input" value="<?= $modifierLivres[0]->Editeur ?>" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Annee_edition" aria-label="Sizing example input" value="<?= $modifierLivres[0]->Annee_edition ?>"  aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Prix_vente" aria-label="Sizing example input" value="<?= $modifierLivres[0]->Prix_vente ?>"  aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Langue_livre" aria-label="Sizing example input" value="<?= $modifierLivres[0]->Langue_livre ?>"  aria-describedby="inputGroup-sizing-sm">
</div>
<input type="submit" value="modifier">
    </form>

</div>