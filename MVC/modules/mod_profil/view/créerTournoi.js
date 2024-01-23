document.addEventListener('DOMContentLoaded', function() {
    var btnOpen = document.getElementById('openTournoi'); // Bouton pour ouvrir le modal
    var modal = document.getElementById('tournamentModal'); // Le modal
    var btnClose = document.getElementById('closeTournoiModal'); // Bouton pour fermer le modal
    var form = document.querySelector('form'); // Formulaire dans le modal

    btnOpen.addEventListener('click', function() {
        modal.style.display = 'block';
    });

    btnClose.addEventListener('click', function() {
        modal.style.display = 'none';
        resetForm(form); // Réinitialise le formulaire
    });

    window.addEventListener('click', function(event) {
        if (event.target == modal) {
            modal.style.display = 'none';
            resetForm(form); // Réinitialise le formulaire
        }
    });

    // Fonction pour réinitialiser le formulaire
    function resetForm(formElement) {
        formElement.reset(); // Réinitialise le formulaire
    }
});
