document.addEventListener('DOMContentLoaded', function() {
    var btnOpenJoin = document.getElementById('joinTournamentButton');
    var modalJoin = document.getElementById('joinTournamentModal');
    var btnCloseJoin = document.getElementById('closeJoinTournoiModal');
    var form = document.querySelector('form'); // Formulaire dans le modal

    btnOpenJoin.addEventListener('click', function() {
        modalJoin.style.display = 'block';
    });

    btnCloseJoin.addEventListener('click', function() {
        modalJoin.style.display = 'none';
        resetForm(form); // Réinitialise le formulaire
    });

    window.addEventListener('click', function(event) {
            if (event.target == modalJoin) {
                modalJoin.style.display = 'none';
                resetForm(form); // Réinitialise le formulaire
            }
        });

// Fonction pour réinitialiser le formulaire
function resetForm(formElement) {
    formElement.reset(); // Réinitialise le formulaire
}
});
