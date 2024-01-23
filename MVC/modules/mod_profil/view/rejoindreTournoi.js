document.addEventListener('DOMContentLoaded', function() {
    var btnOpenJoin = document.getElementById('joinTournamentButton');
    var modalJoin = document.getElementById('joinTournamentModal');
    var btnCloseJoin = document.getElementById('closeJoinTournoiModal');
    var form = document.querySelector('form'); // Assurez-vous que c'est le bon formulaire

    // Vérifie si les éléments existent
    if (btnOpenJoin && modalJoin && btnCloseJoin && form) {
        btnOpenJoin.addEventListener('click', function() {
            modalJoin.style.display = 'block';
            // Ajoutez ici du code pour charger les données dans le formulaire si nécessaire
        });

        btnCloseJoin.addEventListener('click', function() {
            modalJoin.style.display = 'none';
            resetForm(form);
        });

        window.addEventListener('click', function(event) {
            if (event.target === modalJoin) {
                modalJoin.style.display = 'none';
                resetForm(form);
            }
        });

        // Fonction pour réinitialiser le formulaire
        function resetForm(formElement) {
            formElement.reset();
        }
    } else {
        console.error("Un ou plusieurs éléments du DOM ne sont pas trouvés.");
    }
});
