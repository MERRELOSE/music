```
// Récupération de l'élément de formulaire et ajout d'un écouteur d'événements
const form = document.querySelector('form');
form.addEventListener('submit', handleSubmit);

function handleSubmit(event) {
  event.preventDefault(); // Empêcher le formulaire de se soumettre

  const input = document.querySelector('input[name="search"]');
  const searchTerm = input.value;

  // Requête API pour récupérer les résultats de recherche
  fetch(`https://api.example.com/search?q=${searchTerm}`)
    .then(response => response.json())
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