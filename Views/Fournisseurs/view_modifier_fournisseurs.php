<div class="container">
    <form method="POST" action="?controller=fournisseurs&action=update_fournisseur">
    <div class="input-group input-group-sm mb-3">
    <input type="hidden" name="Id_fournisseur" value="<?= $modifierFournisseur[0]->Id_fournisseur ?>">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Code_fournisseur" aria-label="Sizing example input" value="<?= $modifierFournisseur[0]->Code_fournisseur ?>" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Raison_sociale" aria-label="Sizing example input" value="<?= $modifierFournisseur[0]->Raison_sociale ?>" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Rue_fournisseur" aria-label="Sizing example input" value="<?= $modifierFournisseur[0]->	Rue_fournisseur ?>" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Code_postal" aria-label="Sizing example input" value="<?= $modifierFournisseur[0]->Code_postal ?>" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Localite" aria-label="Sizing example input"  value="<?= $modifierFournisseur[0]->Localite ?>"aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Pays" aria-label=" Sizing example input" value="<?= $modifierFournisseur[0]->Pays ?>" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Tel_fournisseur" aria-label="Sizing example input" value="<?= $modifierFournisseur[0]->Tel_fournisseur ?>" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Url_fournisseur" aria-label="Sizing example input" value="<?= $modifierFournisseur[0]->Url_fournisseur ?>" aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Email_fournisseur" aria-label="Sizing example input" value="<?= $modifierFournisseur[0]->Email_fournisseur ?>"  aria-describedby="inputGroup-sizing-sm">
</div>
<div class="input-group input-group-sm mb-3">
  <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
  <input type="text" class="form-control" name ="Fax_fournisseur" aria-label="Sizing example input" value="<?= $modifierFournisseur[0]->Fax_fournisseur ?>"  aria-describedby="inputGroup-sizing-sm">
</div>

<input type="submit" value="modifier">
    </form>

</div>