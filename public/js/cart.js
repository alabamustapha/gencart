$(document).ready(function () {
 
    $('div.item-add-btn > div.add-btn > button').click(function() {
        
        var product = $(this).attr('id');
        
        axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
        axios.defaults.headers.common['X-CSRF-TOKEN'] = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
        axios.post('/products/' + product + '/add_to_cart', {})
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