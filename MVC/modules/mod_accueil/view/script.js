window.onload = function() {
    const descriptionElement = document.querySelector('.description');
    const descriptionText = [
        "Bienvenue dans l’univers de “Fantasy Fortress: The Return”, un tower defense haut en couleur.",
        "Votre mission est de défendre votre base contre les vagues d’ennemis qui cherchent à s’y infiltrer, et cela pendant plusieurs vagues.",
        "Mais attention, dans ce jeu, les ennemis ne suivent pas un chemin prédéfini. Au contraire, le parcours de ces intrus est déterminé au fur et à mesure que vous posez vos tourelles. Plongez-vous dans un monde cartoon, avec des tourelles colorées et des ennemis tout aussi extravagants."
    ];

    let currentIndex = 0; // Index de la phrase en cours
    let currentLetterIndex = 0; // Index de la lettre en cours

    function typeDescription() {
        if (currentIndex < descriptionText.length) {
            const currentText = descriptionText[currentIndex];
            if (currentLetterIndex < currentText.length) {
                descriptionElement.innerHTML += currentText.charAt(currentLetterIndex);
                currentLetterIndex++;
                setTimeout(typeDescription, 50); // Vitesse de frappe, ajustez selon vos préférences
            } else {
                currentIndex++;
                currentLetterIndex = 0; // Réinitialiser l'index de lettre pour la prochaine phrase
                descriptionElement.innerHTML += "<br>"; // Ajouter une ligne pour la prochaine phrase
                setTimeout(typeDescription, 1000); // Délai d'une seconde avant de passer à la phrase suivante
            }
        }
    }

    setTimeout(function() {
        descriptionElement.style.display = 'block';
        typeDescription();
    }, 2000); // Délai de 2 secondes avant le début de l'effet d'écriture
};
