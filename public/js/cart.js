$(document).ready(function () {
 
    $('div.item-add-btn > div.add-btn > button').click(function() {
        
        var product = $(this).attr('id');
        
        axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
        axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
        axios.post('/products/' + product + '/add_to_cart', {})
        .then(function (response) {
            $('.cart-qty-badge').html(response.data.totalItems);
            $('span#total-items-in-cart > strong').html(response.data.totalItems);
            $('input#side-item-cart-qty-' + response.data.id).val(response.data.qty);
            $('span.cart-total').html(response.data.total);
        })
        .catch(function (error) {
            console.log(error);
        });
        
    });


    $('img.item-img, .product-name').click(function () {

        var product = $(this).closest('div.product-details').attr('id'); 
        
        axios.post('/products/' + product + '/details', {})
            .then(function (response) {
                console.log(response);
            })
            .catch(function (error) {
                console.log(error);
            });
        
     });
    
    $('div.item-add-btn > div.favourite').click(function() {
       alert("favouriting"); 
    });

    function updateCartCount(params) {
        
    }

    function updateCartList(params) {
        
    }

    function updateCartItem(params) {
        
    }

});