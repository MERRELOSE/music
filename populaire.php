<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Populaire - Mon site de téléchargement de musique</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #fce1e1;
    /*background: url("téléchargement.jpeg") no-repeat ;*/
  background-size: 1850px;
  color: hwb(0 5% 94%);
}

header {
  /* Styles pour le header */
}
header {
  background-color: #ece8e8;
  color: rgb(75, 73, 73);
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0.5rem;
  position: fixed;
    width: 100%;
}
.star{
  color: #ffffff;
  text-decoration: none;
  padding: 10px 15px;
  border-radius: 4px;
  background-color: #333333;

}
.star:hover{
  background-color: #555555;
}
.star:active {
  background-color: #222222;
}


nav ul {
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
  margin: 0 auto;
  padding: 5rem 2rem 2rem 2rem;
}

h1 {
  font-size: 2rem;
  margin-bottom: 1rem;
}

.popular-songs {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 1rem;
}

.song-card {
  border: 1px solid #ccc;
  padding: 1rem;
  text-align: center;
}

.song-card img {
  width: 100%;
  max-height: 200px;
  object-fit: cover;
  margin-bottom: 1rem;
}

.song-card h3, .song-card p {
  margin: 0;
}

.song-card audio {
  width: 100%;
  margin-bottom: 1rem;
}

.song-card a {
  display: inline-block;
  background-color: #333;
  color: white;
  padding: 0.5rem 1rem;
  text-decoration: none;
  margin-top: 1rem;
}

.song-card a:hover {
  background-color: #ff0000; /* Couleur de survol du lien */
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
    <!-- Contenu du header (logo, barre de navigation, etc.) -->
    <h1>MéloBooks</h1>
    <h3><marquee behavior="" direction="left">Mon site de téléchargement de musique.</marquee></h3>
    <nav>
      <ul>
        <li><a href="accueil.php" class="nav-link">Accueil</a></li>
        <li><a href="Populaire.php" class="star">Populaire</a></li>
        <li><a href="new.php">Nouveautés</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h1>Populaire</h1>
    <div class="popular-songs">
      <div class="song-card">
        <img src="song1.jpg" alt="Chanson populaire 1">
        <h3>Nom de la chanson 1</h3>
        <p>Artiste 1</p>
        <audio controls>
          <source src="song1.mp3" type="audio/mpeg">
        </audio>
        <a href="download.html">Télécharger</a>
      </div>
      <div class="song-card">
        <img src="song2.jpg" alt="Chanson populaire 2">
        <h3>Nom de la chanson 2</h3>
        <p>Artiste 2</p>
        <audio controls>
          <source src="song2.mp3" type="audio/mpeg">
        </audio>
        <a href="download.html">Télécharger</a>
      </div>
      <!-- Ajouter d'autres cartes de chansons ici -->
    </div>
  </main>
  <footer>
    <!-- Contenu du footer (copyright, liens, etc.) -->
    <p>© 2024 Mon site de téléchargement de musique</p>
  </footer>
  <script>
    // Code JavaScript pour la page "populaire.html"

// Fonction d'initialisation
function initialize() {
  // Obtenir les données des chansons populaires depuis une source de données
  const popularSongsData = getPopularSongsData();

  // Afficher les chansons populaires sur la page
  displayPopularSongs(popularSongsData);
}

// Fonction pour obtenir les données des chansons populaires
function getPopularSongsData() {
  // Effectuer une requête AJAX ou accéder à une API pour obtenir les données des chansons populaires
  // Retourner les données obtenues
}

// Fonction pour afficher les chansons populaires sur la page
function displayPopularSongs(data) {
  const songsContainer = document.getElementById('popular-songs-container');

  // Parcourir les données et créer les éléments HTML pour chaque chanson populaire
  data.forEach(song => {
    const songElement = document.createElement('div');
    songElement.textContent = `${song.title} - ${song.artist}`;
    songsContainer.appendChild(songElement);
  });
}

// Appeler la fonction d'initialisation une fois la page chargée
window.addEventListener('load', initialize);// Code JavaScript pour la page "populaire.html"

// Fonction d'initialisation
function initialize() {
  // Obtenir les données des chansons populaires depuis une source de données
  const popularSongsData = getPopularSongsData();

  // Afficher les chansons populaires sur la page
  displayPopularSongs(popularSongsData);
}

// Fonction pour obtenir les données des chansons populaires
function getPopularSongsData() {
  // Effectuer une requête AJAX ou accéder à une API pour obtenir les données des chansons populaires
  // Retourner les données obtenues
}

// Fonction pour afficher les chansons populaires sur la page
function displayPopularSongs(data) {
  const songsContainer = document.getElementById('popular-songs-container');

  // Parcourir les données et créer les éléments HTML pour chaque chanson populaire
  data.forEach(song => {
    const songElement = document.createElement('div');
    songElement.textContent = `${song.title} - ${song.artist}`;
    songsContainer.appendChild(songElement);
  });
}

// Appeler la fonction d'initialisation une fois la page chargée
window.addEventListener('load', initialize);// Code JavaScript pour la page "populaire.html"

// Fonction d'initialisation
function initialize() {
  // Obtenir les données des chansons populaires depuis une source de données
  const popularSongsData = getPopularSongsData();

  // Afficher les chansons populaires sur la page
  displayPopularSongs(popularSongsData);
}

// Fonction pour obtenir les données des chansons populaires
function getPopularSongsData() {
  // Effectuer une requête AJAX ou accéder à une API pour obtenir les données des chansons populaires
  // Retourner les données obtenues
}

// Fonction pour afficher les chansons populaires sur la page
function displayPopularSongs(data) {
  const songsContainer = document.getElementById('popular-songs-container');

  // Parcourir les données et créer les éléments HTML pour chaque chanson populaire
  data.forEach(song => {
    const songElement = document.createElement('div');
    songElement.textContent = `${song.title} - ${song.artist}`;
    songsContainer.appendChild(songElement);
  });
}

// Appeler la fonction d'initialisation une fois la page chargée
window.addEventListener('load', initialize);
  </script>
</body>
</html>