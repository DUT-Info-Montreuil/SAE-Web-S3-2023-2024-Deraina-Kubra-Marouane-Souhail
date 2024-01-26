document.addEventListener('DOMContentLoaded', function() {
    var btnOpenTakeMission = document.getElementById('takeMissionButton');
    var modalTakeMission = document.getElementById('takeMissionModal');
    var btnCloseTakeMission = document.getElementById('closeTakeMissionModal');
    var formMission = document.querySelector('form'); // formulaire pour les missions

    // Vérifie si les éléments existent
    if (btnOpenTakeMission && modalTakeMission && btnCloseTakeMission && formMission) {
        btnOpenTakeMission.addEventListener('click', function() {
            modalTakeMission.style.display = 'block';
            chargerListeMissions();
        });

        btnCloseTakeMission.addEventListener('click', function() {
            modalTakeMission.style.display = 'none';
            resetForm(formMission);
        });

        window.addEventListener('click', function(event) {
            if (event.target === modalTakeMission) {
                modalTakeMission.style.display = 'none';
                resetForm(formMission);
            }
        });

        // Fonction pour réinitialiser le formulaire
        function resetForm(formElement) {
            formElement.reset();
        }

        function chargerListeMissions() {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'index.php?module=profil&action=loadMissions', true);
            xhr.onload = function() {
                if (this.status === 200) {
                    document.getElementById('listeMissions').innerHTML = this.responseText;
                }
            };
            xhr.send();
        }
        
    } else {
        console.error("Un ou plusieurs éléments du DOM ne sont pas trouvés.");
    }
});
