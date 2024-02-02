<!DOCTYPE html>
<html>
<head>
  <title>Récupération du mot de passe</title>
</head>
<style>
    div{
        background-color: #ccd4db;
    }
    .container {
  width: 300px;
  height: 330px;
  margin: 0 auto;
  padding: 20px;
  border-radius: 7px;
  text-align: center;
  align-items: center;
  justify-content: center;
  justify-items: center;
}

h2 {
  margin-bottom: 20px;
}
p{text-align: "justify";}

label, input {
  margin-bottom: 10px;
  border-radius: 5px;

}

button {
  height: 24px;
  width: 100px;
  border-radius: 5px 5px;
  padding: 0px;
  background-color: #337ab7;
  text-align: "center";
  color: #fff;
  border: none;
  cursor: pointer;
}

</style>
<body>
  <div class="container">
    <h2>Récupération du mot de passe</h2>
    <h5>Réinitialiser votre mot de passe</h5>
    <form id="reset-form" method="post">
      <p>Nous vous enverrons un code a cinq chiffres dans votre boite de reception de votre adresse e-mail.</p><br>
      <label for="email">Adresse e-mail :</label>
      <input type="email" id="email" name="email" required><br><br>
      <button id="send" type="submit">Envoyer</button>
    </form>
  </div>
  
  <script src="sc">
    // Code JavaScript pour la page de récupération du mot de passe

// Récupérer le formulaire de récupération du mot de passe
const resetForm = document.getElementById('reset-form');

// Ajouter un gestionnaire d'événement pour la soumission du formulaire
resetForm.addEventListener('submit', function(event) {
  event.preventDefault();

  // Récupérer l'adresse e-mail saisie par l'utilisateur
  const emailInput = document.getElementById('email');
  const email = emailInput.value;

  // Effectuer des validations supplémentaires si nécessaire

  // Envoyer la demande de récupération du mot de passe au serveur
  sendPasswordResetRequest(email);
});

// Fonction pour envoyer la demande de récupération du mot de passe au serveur
function sendPasswordResetRequest(email) {
  // Effectuer une requête AJAX ou une action appropriée pour envoyer la demande de récupération du mot de passe au serveur
  // Vous pouvez utiliser des bibliothèques telles que Axios, jQuery.ajax, ou la méthode fetch pour effectuer la requête
  // Exemple avec fetch :
  fetch('/password-reset', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({ email: email })
  })
  .then(response => {
    // Gérer la réponse du serveur
    if (response.ok) {
      // La demande a été envoyée avec succès
      // Vous pouvez rediriger l'utilisateur vers une page de confirmation ou afficher un message de succès
    } else {
      // La demande a échoué
      // Vous pouvez afficher un message d'erreur approprié
    }
  })
  .catch(error => {
    // Gérer les erreurs de la requête
    console.error('Erreur lors de l\'envoi de la demande de récupération du mot de passe:', error);
  });
}

  </script>
</body>
</html>