const showAllButton = document.getElementById('showAllButton');
showAllButton.style.display = 'none';
const memeContainers = document.querySelectorAll('.memeContainer');

//bouton voter
const voteMeme = document.getElementById("voteMeme");
var voteInProgress = false;


function showOnlyThisMeme(clickedMeme) {
    showAllButton.style.display = 'block';
    // Parcourir tous les conteneurs et les cacher sauf celui qui a été cliqué
    memeContainers.forEach(container => {
        if (container !== clickedMeme) {
            container.classList.add('hidden');
        } else {
            container.classList.remove('hidden');
            container.classList.add('visible');
        }
    });
}

function showAllMeme() {
    // Sélectionner tous les conteneurs de mèmes
    const memeContainers = document.querySelectorAll('.memeContainer');

    // Parcourir tous les conteneurs et les cacher sauf celui qui a été cliqué
    memeContainers.forEach(container => {
        if (container.classList.contains('hidden')) {
            container.classList.remove('hidden');
        }
    });
    showAllButton.style.display = 'none';
}

voteMeme.addEventListener('click', () => {
    voteInProgress = true;
    alert("Cliquez sur le meme que vous souhaitez voter.");
});

showAllButton.addEventListener('click', showAllMeme);


memeContainers.forEach(container => {
    container.addEventListener('click', function() {
        if (isVotingEnabled) {
            // Récupérer l'ID du mème cliqué à partir de l'attribut data-id
            const memeId = container.getAttribute('data-id');
            
            // Désactiver le mode de vote
            isVotingEnabled = false;
            voteButton.disabled = true;  // Désactiver le bouton "Voter"

            // Envoi de la requête POST avec Axios pour enregistrer le vote
            axios.post('../vote.php', {
                memeId: memeId  // Envoie de l'ID du mème au serveur
            })
            .then(function(response) {
                console.log(response.data);  // Exemple de message : "Vote enregistré avec succès"
                alert("Votre vote a été pris en compte !");
            })
            .catch(function(error) {
                console.error("Erreur lors du vote :", error);
            });
        }
    });
});