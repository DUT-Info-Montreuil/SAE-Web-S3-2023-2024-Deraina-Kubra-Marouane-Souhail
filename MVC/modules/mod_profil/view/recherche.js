$(document).ready(function() {
    $('#search-user').keyup(function() {

        $('#result-search').html('');

        var utilisateur = $(this).val();

        if(utilisateur != ""){
            $.ajax({
                type: 'GET',
                url: 'modules/mod_profil/search.php',
                data: {'user': utilisateur} ,
                dataType: 'json', 
                success: function(data) {
                    if(data.length > 0){
                        var resultHTML = data.map(function(user) {
                            return user.Nom;
                        }).join(' / ');

                        $('#result-search').html(resultHTML);
                    } else {
                        $('#result-search').html("<div>Aucun utilisateur</div>");
                    }
                },
                error: function() {
                    $('#result-search').html('Une erreur est survenue lors de la recherche.');
                }
            });
        }
      
    });
});
