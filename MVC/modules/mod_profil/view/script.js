document.addEventListener('DOMContentLoaded', function() {
  var modal = document.getElementById('myModal');
  var btn = document.getElementById('openModal');
  var closeBtn = document.getElementById('closeModal');

  // Gestionnaire pour ouvrir le modal
  btn.addEventListener('click', function() {
      modal.style.display = 'block';
  });

  // Gestionnaire pour fermer le modal
  closeBtn.addEventListener('click', function() {
      modal.style.display = 'none';
  });

  // Gestionnaire pour fermer le modal lors d'un clic à l'extérieur de celui-ci
  window.addEventListener('click', function(event) {
      if (event.target == modal) {
          modal.style.display = 'none';
      }
  });
});
