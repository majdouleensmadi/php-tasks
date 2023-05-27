let playlist = [];

function addSong() {
  const songNameInput = document.getElementById("songName");
  const songName = songNameInput.value.trim();
  if (!songName) {
    alert("Please enter a song name");
    return;
  }
  playlist.push(songName);
  songNameInput.value = "";

  renderPlaylist();
}

function deleteSong(index) {
  playlist.splice(index, 1);

  renderPlaylist();
}

function renderPlaylist() {
  const playlistElement = document.getElementById("playlist");
  playlistElement.innerHTML = "";

  for (let i = 0; i < playlist.length; i++) {
    const songName = playlist[i];
    const listItem = document.createElement("li");
    const deleteButton = document.createElement("img");

    deleteButton.src = "delete.png";
    deleteButton.alt = "Delete";
    deleteButton.onclick = function() {
      deleteSong(i);
    };

    listItem.textContent = songName;
    listItem.appendChild(deleteButton);
    playlistElement.appendChild(listItem);
  }
}
