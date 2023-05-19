// Récupérer le label "Invalid login"
  var invalidLogin = document.getElementById("error");

  // Vérifier si le login a échoué (par exemple, si le formulaire a été soumis avec des identifiants incorrects)
  var loginFailed = true;

  if (loginFailed) {
    // Afficher le message d'erreur
    invalidLogin.style.display = "block";

    // Masquer le message d'erreur après 3 secondes
    setTimeout(function() {
      invalidLogin.style.display = "none";
    }, 2000);
  }