$(document).ready(function(){


    $('.add-to-cart').click(function () {
        id=$(this).attr("data");
        addtoCart();
    });







});

function addtoCart() {

    $.ajax({
        type:'post',
        url:'/cart/addAjax/'+id,
        data:{},

        success: function (response) {

            $('#count_cart').html(response);
        },


    });
}