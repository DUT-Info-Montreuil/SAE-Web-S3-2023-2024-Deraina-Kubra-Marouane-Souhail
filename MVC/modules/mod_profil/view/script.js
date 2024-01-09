document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('myModal');
    var btn = document.getElementById('openModal');
    var closeBtn = document.getElementById('closeModal');
  
    btn.addEventListener('click', function() {
      modal.style.display = 'block';
    });
  
    closeBtn.addEventListener('click', function() {
      modal.style.display = 'none';
    });
  
    window.addEventListener('click', function(event) {
      if (event.target == modal) {
        modal.style.display = 'none';
      }
    });
  
  
  })