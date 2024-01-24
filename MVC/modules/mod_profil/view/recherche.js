$(document).ready(function() {
    $('#search-user').keyup(function() {

        $('#result-search').html('');

        var utilisateur = $(this).val();

        console.log(utilisateur)

        if(utilisateur != ""){
            $.ajax({
                type: 'GET',
                url: 'modules/mod_profil/search.php',
                data: {'user': + encodeURIComponent(utilisateur)} ,
                success: function(data) {
                    if(data != ""){
                        document.getElementById('result-search').html(data);
                    }
                    else{
                        document.getElementById('result-search').innerHTML = "<div>Aucun utilisateur<div>"
                    }
                },
                error: function() {
                    $('#result-search').html('Une erreur est survenue lors de la recherche.');
                }
            });
        }
      
    });
});
