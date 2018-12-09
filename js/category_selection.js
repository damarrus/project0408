$(document).ready(function() {
    $("#category").change(function() {
        var id_cat = $(this).attr('data-category-id');
        // var pass = (document.getElementById("").value);
            function href() {
                window.location.replace('http://localhost/project0408/controllers/catalog.php?collection_id=3');
                document.location.href='http://localhost/project0408/controllers/catalog.php?collection_id=3'
                }
    return false
    });


});