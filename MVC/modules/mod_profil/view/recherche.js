$(document).ready(function() {
    $('#search-user').on('input', function() {
        var searchTerm = $(this).val().trim();

        $.ajax({
            type: 'GET',
            url: 'modules/mod_profil/controleur_profil.php',
            data: { action: 'rechercherUtilisateur', user: searchTerm },
            success: function(data) {
                $('#result-search').html(data);
            },
            error: function() {
                $('#result-search').html('Une erreur est survenue lors de la recherche.');
            }
        });
    });
});
