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
    background-color: rgb(194, 52, 17);
    background-color: #ece8e8;
    color: rgb(75, 73, 73);
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0.5rem;
    position: fixed;
    width: 100%;
}
.new{
  color: #ffffff;
  text-decoration: none;
  padding: 10px 15px;
  border-radius: 4px;
  background-color: #333333;

}
.new:hover{
  background-color: #555555;
}
.new:active {
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
  margin: 0 auto;
  padding: 5rem 2rem 2rem 2rem;
  /*background: url("téléchargement.jpeg") no-repeat ;*/
  background-size: 1850px;
}
h1{
    font-size: 2rem;
    margin-bottom: 1rem;
}
.new-releases{
display: grid;
grid-template-columns: repeat(3, 1fr);
grid-gap: 1rem;
}
.release-card{
border: 1px solid #ccc;
padding: 1rem;
text-align: center;
}
.release-card img{
    width: 100%;
    max-height: 200px;
    object-fit: cover;
    margin-bottom: 1rem;
}
.release-card a{
    display: inline-block;
    background-color: #333;
    color: white;
    padding: 0.5rem 1rem;
    text-decoration: none;
    margin-top: 1rem;
}
.release-card a:hover {
    /*couleur de survole du lien*/
background-color: #ff0000;
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
        <!--Contenu du header (logo, barre de navigation, etcc)-->
        <h1>MéloBooks</h1>
        <h3><marquee behavior="" direction="left">Mon site de téléchargement de musique.</marquee></h3>
        <nav>
            <ul>
                </li><li><a href="accueil.php" class="nav-link">Accueil</a></li>
                <li><a href="Populaire.php">Populaire</a></li>
                <li><a href="new.php" class="new">Nouveautés</a></li>
                <li><a href="contact.php" class="active">Contact</a></li>
        </ul>
        </nav>
    </header>
    <main>
        <h1>Nouveautés</h1>
        <div class="new-releases">
            <div class="release-card">
                <img src="site4.jpg" alt="Nouvel album1">
                <h3>Nom de l'album 1</h3>
                <p>Artiste 1</p>
                <a href="Download.html">Télécharger</a>
            </div>

            <div class="release-card">
                <img src="site5.jpg" alt="Nouvel album2">
                <h3>Nom de l'album 2</h3>
                <p>Artiste 2</p>
                <a href="Download.html">Télécharger</a>
                <!--Ajouter d'autres cartes de sortie ici-->
            </div>
        </div>
    </main>
    <footer>
        <!--contenu du footer-copyright, liend, etc-->
        <p>© 2024 Mon site de téléchargement de musique</p><br><br>
    </footer>
    <script>
        
    </script>
</body>
</html>