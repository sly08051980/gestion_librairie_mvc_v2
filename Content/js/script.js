function checkEmail(email) {
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

  if (email.value.match(mailformat)) {
    return true;
  } else {
    if (email.value == "") {
      alert("Mettez une adresse email.");
    } else if (email.value.indexOf("@", 0) < 0) {
      alert("Votre adresse email non valide, manque @.");
    } else if (email.value.indexOf(".", 0) < 0) {
      alert("Votre adresse email non valide, manque le nom du domaine.");
    } else alert("Vous avez saisi une adresse électronique non valide !");

    email.focus();

    return false;
  }
}
