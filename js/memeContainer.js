const showAllButton = document.getElementById('showAllButton');
showAllButton.style.display = 'none';
const memeContainers = document.querySelectorAll('.memeContainer');

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


showAllButton.addEventListener('click', showAllMeme);
