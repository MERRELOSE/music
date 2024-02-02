<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body{
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #fce1e1;
}

header{
    background-color: #ece8e8;
    color: rgb(75, 73, 73);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.5rem;
    position: fixed;
    width: 100%;
}
.active{
  color: #ffffff;
  text-decoration: none;
  padding: 10px 15px;
  border-radius: 4px;
  background-color: #333333;

}
.active:hover{
  background-color: #555555;
}
.active:active {
  background-color: #222222;
}
nav ul{
    list-style: none;
    color: rgb(24, 121, 231);
    margin: 0;
    padding: 0;
    display: flex;
}

nav li {
  margin-right: 1rem;
}

nav a {
  color: rgb(23, 121, 201);
  text-decoration: none;
}
nav a:hover{
    color: #ff0000;
}

main {
  max-width: 1200px;
  max-height: 5000px;
  height: 1200px;
  margin: 5 ;
  padding: 5rem 2rem 2rem 2rem;
  /*background: url("téléchargement.jpeg") no-repeat ;*/
  background-size: 1850px;
}
h2 {
  font-size: 2rem;
  margin-top: 3rem;
}

form label {
  display: block;
  font-size: 1.2rem;
  margin-bottom: 1rem;
}

form input, form textarea {
  padding: 0.5rem;
  font-size: 1.2rem;
  border: 1px solid #ccc;
  border-radius: 4px;
  width: 100%;
}

form button[type="submit"] {
  padding: 0.5rem 1rem;
  background-color: #d40707;
  color: white;
  border: none;
  border-radius: 4px;
  margin-top:1rem
}

footer{
    background-color: #333;
    color: white;
    padding: 1rem;
    text-align: center;
}
</style>
<body>
    <header>
      <h1>MéloBooks</h1>
      <h3><marquee behavior="" direction="left">Mon site de téléchargement de musique.</marquee></h3>
        <nav>
            <ul>
                </li><li><a href="accueil.php" class="nav-link">Accueil</a></li>
                <li><a href="Populaire.php">Populaire</a></li>
                <li><a href="new.php">Nouveautés</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
        </ul>
        </nav>
    </header>
    <main>
        <h2>Contactez-nous</h2>
        <form action="" method="get">
            <label for="name">Nom:</label><input type="text" id="name" name="name"required placeholder="ICI, entrez votre nom..."><br><br>
            <label for="email">E-mail:</label><input type="text" id="email" name="email"required placeholder="Entrez votre e-mail..."><br><br>
            <label for="message">Message:</label><textarea name="message" id="message" cols="30" rows="10" required placeholder="Exprimez-vous , merci !!"> </textarea>
            <button type="submit">Envoyer</button>
        </form>
    </main>
    <footer>
        <p>© 2024 Mon site de téléchargement de musique</p>
    </footer>
    <script>
      // Code JavaScript pour la page contact.html
    const contactForm = document.getElementById("contactForm");

contactForm.addEventListener("submit", function(event) {
  event.preventDefault();

  // Récupérer les valeurs du formulaire
  const name = document.getElementById("name").value;
  const email = document.getElementById("email").value;
  const message = document.getElementById("message").value;

  // Envoyer les données du formulaire à un serveur ou traiter localement
  console.log("Nom :", name);
  console.log("Email :", email);
  console.log("Message :", message);

  // Réinitialiser le formulaire
  contactForm.reset();
});
    </script>
</body>
</html>