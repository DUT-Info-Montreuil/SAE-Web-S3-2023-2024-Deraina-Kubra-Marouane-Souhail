document.addEventListener('DOMContentLoaded', function() {
    var messagesModal = document.getElementById('messagesPopup'); // Le modal pour les messages
    var closeBtnMessages = messagesModal.querySelector('.close'); // Bouton de fermeture pour les messages
    var icon = document.querySelector('.icon'); // Sélectionne l'icône

    // Gestionnaire d'événements pour l'icône
    icon.addEventListener('click', function(event) {
        if (!messagesModal.contains(event.target)) {
            messagesModal.style.display = 'block'; // Affiche le pop-up des messages
        }
    });

    // Gestionnaire pour fermer le pop-up des messages
    closeBtnMessages.addEventListener('click', function() {
        messagesModal.style.display = 'none';
    });

    // Gestionnaire pour fermer le modal lors d'un clic à l'extérieur de celui-ci
    window.addEventListener('click', function(event) {
        if (event.target == messagesModal) {
            messagesModal.style.display = 'none';
        }
    });
});
