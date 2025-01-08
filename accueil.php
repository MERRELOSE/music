<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Mon site de téléchargement de musique</title>
  <link rel="stylesheet" href="accueil.css">
</head>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #fce1e1;
    /*background: url("téléchargement\ \(2\).jpeg") no-repeat ;*/
    background-size: 1850px;
    color: hwb(0 5% 94%);
  }
  
  header {
    background-color: #ece8e8;
    color: rgb(75, 73, 73);
    display: flex;
    justify-content: space-between;
    align-items: justify;
    padding: 0.5rem;
    position: fixed;
    width: 100%;
  }
  .nav-link{
    color: #ffffff;
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 4px;
    background-color: #333333;
  
  }
  .nav-link:hover{
    background-color: #555555;
  }
  .nav-link:active {
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
    max-height: 5000px;
    height: 1200px;
    margin: 0 auto;
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
  
  form input[type="text"] {
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
  <?php
  
  ?>
  <header >
    <h1>MéloBooks</h1>
    <h3><marquee behavior="" direction="left">Mon site de téléchargement de musique.</marquee></h3>
    <nav>
      <ul>
        <li><a href="accueil.php" class="nav-link">Accueil</a></li>
        <li><a href="Populaire.php">Populaire</a></li>
        <li><a href="new.php">Nouveautés</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <h2>Recherchez votre musique!</h2>
    <form method="post">
      <label for="search">Retrouvez ici vos musiques favorites! </label>
      <input type="text" id="search" name="search" placeholder="Recherchez une chanson, un artiste ou un album... ">
      <button type="submit">Rechercher</button>
    </form>
    <h2>Résultats de recherche :</h2>
    <div class="songs">
      <!-- Contenu généré dynamiquement en fonction des résultats de recherche -->
    </div>
  </main>
  <footer>
    <p>© 2024 Mon site de téléchargement de musique</p><br><br>
    <a href="login.php"><input type="button" value="Back"></a>
  </footer>

  <script>
    // Récupération de l'élément de formulaire et ajout d'un écouteur d'événements
    const form = document.querySelector('form');
    form.addEventListener('submit', handleSubmit);

    function handleSubmit(event) 
    {
      event.preventDefault(); // Empêcher le formulaire de se soumettre

      const input = document.querySelector('input[name="search"]');
      const searchTerm = input.value;

      // Requête API pour récupérer les résultats de recherche
      fetch(`https://api.example.com/search?q=${searchTerm}`)
        .then(response => response.json(response))
        .then(data => {
          const songs = data.results;
          displaySongs(songs);
        })
        .catch(error => console.error(error));
    }
    function displaySongs(songs) {
      const songsContainer = document.querySelector('.songs');
      songsContainer.innerHTML = ''; // Effacer le contenu précédent

      songs.forEach(song => {
        const songCard = `
          <div class="song">
            <img src="${song.albumArt}">
            <h3>${song.title}</h3>
            <p>${song.artist}</p>
            <audio controls src="${song.audioFile}"></audio>
            <a href="${song.downloadLink}" download>Télécharger</a>
          </div>
        `;
        songsContainer.insertAdjacentHTML('beforeend', songCard);
      });
    }
</script>
</body>
</html>
