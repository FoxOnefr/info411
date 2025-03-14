function showOnlyThisMeme(clickedMeme) {
    // Sélectionner tous les conteneurs de mèmes
    const memeContainers = document.querySelectorAll('.memeContainer');

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

function resetMeme(clickedMeme){
    const memeContainers = document.querySelectorAll('.memeContainer');
    memeContainers.forEach(container => {
        
            if (container.classList.add('hidden')){
                container.classList.remove('hidden')
            }
        } 
    )
};


