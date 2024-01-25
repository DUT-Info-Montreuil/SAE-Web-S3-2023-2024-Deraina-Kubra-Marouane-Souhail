document.addEventListener('DOMContentLoaded', function() {
    var btnOpenClassementPopup = document.getElementById('openClassementPopup'); // Bouton pour ouvrir le classement
    var modalClassement = document.getElementById('classementGlobalPopup'); // La pop-up du classement
    var btnCloseClassementPopup = document.getElementById('closeClassementGlobalPopup'); // Bouton pour fermer la pop-up

    btnOpenClassementPopup.addEventListener('click', function() {
        modalClassement.style.display = 'block';
    });

    btnCloseClassementPopup.addEventListener('click', function() {
        modalClassement.style.display = 'none';
    });

    window.addEventListener('click', function(event) {
        if (event.target == modalClassement) {
            modalClassement.style.display = 'none';
        }
    });
});