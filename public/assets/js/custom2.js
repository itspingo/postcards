function qty_incr(){
    cur_qty = document.getElementById('item_quantity').value;
    cur_qty = +cur_qty + 1;
    document.getElementById('item_quantity').value = cur_qty;
}
function qty_decr(){
    cur_qty = document.getElementById('item_quantity').value;
    if(cur_qty > 1){
        cur_qty = +cur_qty - 1;
        document.getElementById('item_quantity').value = cur_qty;
    }
}


function add_to_cart(itemId) {
    var vid = itemId;

    var vqty = $('#item_quantity').val();
    var vprice = $('#hprice').val();
    var vcartUrl = $('#cart_url').val();

    // alert('itemId: '+itemId+' , vqty: '+vqty+' , vprice: '+vprice+' , vcartUrl'+vcartUrl);

    $.ajax({
        url: '{{url("item/add_to_cart")}}',
        method: 'GET',
        data: {
            id: vid,
            qty: vqty,
            price: vprice
        },
        success: function(response) {
            alert('response:');
            alert(response);
            if (response == 'success') {
                $htmlbtnscode = '<button onClick="addedToCart()" class="btn btn-solid hover-solid btn-animation"><i class="fa fa-shopping-cart me-1" aria-hidden="true"></i> Added to cart</button>';
                //if(null != session('sess_settings') && session()->get('sess_settings')->enable_shopping_cart == 'Y'){
                    $htmlbtnscode += '<a href="' + vcartUrl + '" class="btn btn-solid hover-solid btn-animation">View Cart</a>';
                //}

                $('#span_cart_btn').html($htmlbtnscode);
            } else {
                alert('Error adding item to cart');
            }
        },
        error: function(xhr, status, error) {
            var err = JSON.parse(xhr.responseText);
            alert(err.error);
        }
    });

}

function addToCartIcon(itemId, price) {
    var vid = itemId;
    var vqty = '1';
    var vprice = price;

    // alert('itemId: '+vid+' , vqty: '+vqty+' , vprice: '+vprice);

    $.ajax({
        url: '{{url("item/add_to_cart")}}',
        method: 'GET',
        data: {
            _token: '{{csrf_token()}}',
            id: vid,
            qty: vqty,
            price: vprice
        },
        success: function(response) {
            // alert(response);
            if (response == 'success') {
                alert('item is added to cart');
                // $('#span_cart_btn').html('<button onClick="addedToCart()" class="btn btn-solid hover-solid btn-animation"><i class="fa fa-shopping-cart me-1" aria-hidden="true"></i> Added to cart</button> <a href="{{ url('cart') }}" class="btn btn-solid hover-solid btn-animation">View Cart</a>');
            }
        },
        error: function(xhr, status, error) {
            var err = JSON.parse(xhr.responseText);
            alert(err.error);
        }
    });

}



function addedToCart() {
    alert('Item already added to cart');
}


function add_to_wishlist(itemId) {
    var vid = itemId;

    $.ajax({
        url: '{{url("wishlist/add_to_wishlist")}}',
        method: 'GET',
        data: {
            _token: '{{csrf_token()}}',
            id: vid,
        },
        success: function(response) {
            // alert(response);
            if (response == 'success') {
                $('#span_wishlist_btn').html('<button  class="btn btn-solid"><i class="fa fa-bookmark fz-16 me-2" aria-hidden="true"></i>Added to wishlist</button>');
            }
        },
        error: function(xhr, status, error) {
            var err = JSON.parse(xhr.responseText);
            alert(err.error);
        }
    });
}



function place_abid(itemId) {
    var vid = itemId;


    var vprice = $('#bid_amount').val();

    // alert('vid: '+vid+' , vprice: '+vprice);


    $.ajax({
        url: '{{url("item/place_bid")}}',
        method: 'GET',
        data: {
            _token: '{{csrf_token()}}',
            id: vid,
            price: vprice
        },
        success: function(response) {
            // alert(response);
            if (response == 'success') {
                $('#span_bid_btn').html('<button disabled id="cartEffect" class="btn btn-solid hover-solid btn-animation">  <i class="fa fa-shopping-cart me-1" aria-hidden="true"></i>Bid is placed</button>');
            } else {
                alert('Error adding item to cart');
            }
        },
        error: function(xhr, status, error) {
            var err = JSON.parse(xhr.responseText);
            alert(err.error);
        }
    });

}


function make_offer(itemId) {
    var vid = itemId;


    var voffer = $('#offer_amount').val();

    // alert('vid: '+vid+' , vprice: '+vprice);


    $.ajax({
        url: '{{url("item/make_offer")}}',
        method: 'GET',
        data: {
            _token: '{{csrf_token()}}',
            id: vid,
            price: voffer
        },
        success: function(response) {
            // alert(response);
            if (response == 'success') {
                $('#span_offer_btn').html('<button disabled id="cartEffect" class="btn btn-solid hover-solid btn-animation">  <i class="fa fa-shopping-cart me-1" aria-hidden="true"></i>Offer Submitted</button>');
            } else {
                alert('Error adding item to cart');
            }
        },
        error: function(xhr, status, error) {
            var err = JSON.parse(xhr.responseText);
            alert(err.error);
        }
    });

}


function addToWishlistIcon(itemId) {
    var vid = itemId;

    $.ajax({
        url: '{{url("wishlist/add_to_wishlist")}}',
        method: 'GET',
        data: {
            _token: '{{csrf_token()}}',
            id: vid,
        },
        success: function(response) {
            // alert(response);
            if (response == 'success') {
                alert('item is added to wishlist');
                // $('#spanWishlistIcon'+vid).html('<a  title="Added to Wishlist" style="cursor:pointer;"><i class="ti-heart" aria-hidden="true" style="color:red;background-color:red;"></i></a>');
            }
        },
        error: function(xhr, status, error) {
            var err = JSON.parse(xhr.responseText);
            alert(err.error);
        }
    });
}


function addToComparelistIcon(itemId) {
    var vid = itemId;

    $.ajax({
        url: '{{url("comparelist/add_to_comparelist")}}',
        method: 'GET',
        data: {
            _token: '{{csrf_token()}}',
            id: vid
        },
        success: function(response) {

            if (response == 'success') {
                alert('item is added to compare list');
                // $('#spanCompareIcon'+vid).html('<a title="Added to Compare List" style="cursor:pointer;"><i class="ti-reload" aria-hidden="true" style="color:red;background-color:red;"></i></a>');
            }
        },
        error: function(xhr, status, error) {
            var err = JSON.parse(xhr.responseText);
            alert(err.error);
        }
    });

}






function data_sort(selectedValue) {
window.location.href = selectedValue;
};



function show_hide_shipping_address(){
    if(document.getElementById('div_shipping_address').style.display == 'none'){
        document.getElementById('div_shipping_address').style.display = 'block';
    }else if(document.getElementById('div_shipping_address').style.display == 'block'){
        document.getElementById('div_shipping_address').style.display = 'none';
    }
}


function checkNegative(recid) {

    var quantity = document.getElementById(qty + recid).value;
    // alert('qty: '+quantity);
    if (quantity < 0) {
        document.getElementById(qty + recid).value = 1;
    }
}



function data_sort(selectedValue) {
    window.location.href = selectedValue;
};



function show_hide_div(divShow, divHide) {
    $("#" + divShow).show();
    $("#" + divHide).hide();
}

function recedit(show_div, hide_div, dataFormId, recid, editlink){
    
    $.ajax({
        url: editlink,
        type: 'GET',
        data: {
            id: recid,
            _token: '{{ csrf_token() }}'
        },
        success: function(response) {
            console.log(response);
            if(response.status=='success'){
                //$('#address_book').html(data);
                console.log(response);
                show_hide_div(show_div, hide_div) ;
                responseData = response.data;
                var parentDiv = document.querySelector('.row[data-form-id="' + dataFormId + '"]');
                if (parentDiv) {
                    // Loop through each property in the responseData object and set the corresponding form field value
                    Object.keys(responseData).forEach(function(key) {
                        var value = responseData[key];
                        var inputField = parentDiv.querySelector('[name="' + key + '"]');
                        if (inputField) {
                            inputField.value = value;
                        }
                    });
                }
                //data-form-id="address_book"
            }
            // $('#address_book').html(data);
        }
    });
}

function show_reply_box(div_show, div_hide, recid){
    document.getElementById('replyto_id').value = recid;
    show_hide_div(div_show,div_hide);
}



// Function to check if input is a valid email address
function isValidEmail(field_name) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var field_val = document.getElementById(field_name).value;
    if(!emailPattern.test(field_val)){
        alert('invalid value entered');
        document.getElementById('diverr_'+field_name).innerHTML="Invalid value entered";
        return false; // Add return false to prevent form submission or further processing
    }else{
        document.getElementById('diverr_' + field_name).innerHTML = "";
    }
    return true; // URL is valid
}


// Function to check if input is a valid URL
function isValidUrl(field_name) {
    // const urlPattern = /^(https?:\/\/)?([\w-]+\.)*[\w-]+(\/[\w-./?%&=]*)?$/;
    var urlPattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
                            '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.?)+[a-z]{2,}|'+ // domain name
                            '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
                            '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
                            '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
                            '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
    var field_val = document.getElementById(field_name).value.trim(); // Trim whitespace
    if (!urlPattern.test(field_val)) {
        alert('Invalid value entered');
        document.getElementById('diverr_' + field_name).innerHTML = "Invalid URL entered";
        return false; // Add return false to prevent form submission or further processing
    }else{
        document.getElementById('diverr_' + field_name).innerHTML = "";
    }
    return true; // URL is valid
}


// Function to check if input is a valid telephone number
function isValidContactNumber(field_name) {
    const phonePattern = /^\+?(\d{1,3})?[-. ]?\(?\d{3}\)?[-. ]?\d{3}[-. ]?\d{4}$/;
    var field_val = document.getElementById(field_name).value;
    if(!phonePattern.test(field_val)){
        alert('invalid value entered');
        document.getElementById('diverr_'+field_name).innerHTML="Invalid value entered";
        return false; // Add return false to prevent form submission or further processing
    }else{
        document.getElementById('diverr_' + field_name).innerHTML = "";
    }
    return true; // URL is valid
}

// Function to check if input is a valid float number
function isValidFloat(field_name) {
    const floatPattern = /^[+-]?\d+(\.\d+)?$/;
    var field_val = document.getElementById(field_name).value;
    if(!floatPattern.test(field_val)){
        alert('invalid value entered');
        document.getElementById('diverr_'+field_name).innerHTML="Invalid value entered";
        return false; // Add return false to prevent form submission or further processing
    }else{
        document.getElementById('diverr_' + field_name).innerHTML = "";
    }
    return true; // URL is valid
}

// Function to check if input contains only numeric values
function isValidNumbers(field_name) {
    const numericPattern = /^[0-9]+$/;
    var field_val = document.getElementById(field_name).value;
    if(!numericPattern.test(field_val)){
        alert('invalid value entered');
        document.getElementById('diverr_'+field_name).innerHTML="Invalid value entered";
        return false; // Add return false to prevent form submission or further processing
    }else{
        document.getElementById('diverr_' + field_name).innerHTML = "";
    }
    return true; // URL is valid
}

// Function to check if input contains only alphabets
function isValidAlphabets(field_name) {
    const alphabetPattern = /^[A-Za-z]+$/;
    var field_val = document.getElementById(field_name).value;
    if(!alphabetPattern.test(field_val)){
        alert('invalid value entered');
        document.getElementById('diverr_'+field_name).innerHTML="Invalid value entered";
        return false; // Add return false to prevent form submission or further processing
    }else{
        document.getElementById('diverr_' + field_name).innerHTML = "";
    }
    return true; // URL is valid
}



function show_details(rowid){
    $("#btn_show_details"+rowid).hide();
    $("#btn_hide_details"+rowid).show();
    document.getElementById("tr_invoice_details"+rowid).style.display="block";
    // $("#tr_invoice_details"+rowid).show();
}
function hide_details(rowid){
    $("#btn_show_details"+rowid).show();
    $("#btn_hide_details"+rowid).hide();
    document.getElementById("tr_invoice_details"+rowid).style.display="none";
}


function show_details(rowid){
    $("#btn_show_details"+rowid).hide();
    $("#btn_hide_details"+rowid).show();
    document.getElementById("tr_invoice_details"+rowid).style.display="block";
    // $("#tr_invoice_details"+rowid).show();
}
function hide_details(rowid){
    $("#btn_show_details"+rowid).show();
    $("#btn_hide_details"+rowid).hide();
    document.getElementById("tr_invoice_details"+rowid).style.display="none";
}


function show_invoice_view(id){
    var url = $('#invoice_view_url').val();  
    // alert(url);
    $.ajax({
        type: "GET",
        url: url+"/"+id,
        success: function(result){
            $('#invoice_view').html(result); 
            // console.log(result); 
            document.getElementById('invoices_list').style.display = "none";
            document.getElementById('invoice_detail').style.display = "block";

        }
    });
}

function hide_invoice_view(){
    document.getElementById('invoices_list').style.display = "block";
    document.getElementById('invoice_detail').style.display = "none";
}



function printInvoice() {
    var printContents = document.getElementById('sec_invoice').innerHTML;
    var originalContents = document.body.innerHTML;

    // Replace the content of the body with the content of the specific div
    document.body.innerHTML = printContents;

    // Print the specific div content
    window.print();

    // Restore original content
    document.body.innerHTML = originalContents;
}
