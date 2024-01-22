document.addEventListener('DOMContentLoaded', function() {
    var modalEnvoiArgent = document.getElementById('modalEnvoiArgent'); // La pop-up pour l'envoi d'argent
    var fermerModalEnvoiArgent = document.getElementById('fermerModalEnvoiArgent'); // Bouton de fermeture pour l'envoi d'argent
    var openMoneyModal = document.getElementById('openMoneyModal'); // Bouton pour ouvrir la pop-up d'envoi d'argent

    // Gestionnaire d'événements pour ouvrir la pop-up d'envoi d'argent
    openMoneyModal.addEventListener('click', function() {
        modalEnvoiArgent.style.display = 'block'; // Affiche le pop-up d'envoi d'argent
    });

    // Gestionnaire pour fermer le pop-up d'envoi d'argent
    fermerModalEnvoiArgent.addEventListener('click', function() {
        modalEnvoiArgent.style.display = 'none';
    });

    // Gestionnaire pour fermer le modal lors d'un clic à l'extérieur de celui-ci
    window.addEventListener('click', function(event) {
        if (event.target == modalEnvoiArgent) {
            modalEnvoiArgent.style.display = 'none';
        }
    });
});
