$(document).ready(function() {
    $(".product_description-btn").click(function() {
        var id = $(this).attr('data-product-id');

        $.ajax({
            url: "add_to_cart.php",
            type: 'POST',
            data: {product_id: id},
            success: function(response) {
                if (response) {

                } else {
                    
                }
            }
        });

    return false
    });


});