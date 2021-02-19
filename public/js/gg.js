$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


var al = (()=> {

    var api_url = 'http://localhost:8000'; 
    var url = window.location.origin;
    return {
        deleteItemCart: (item_cart_id)=>{
          $.ajax({
             url:url+"/delete-items-cart",
             method:"POST",
             data:{item_cart_id:item_cart_id},
             beforeSend:function(){
             },
             success:function(data){
                // console.log(data);
                $('#cart-item-cont'+item_cart_id).remove();
                $('#cart-cont-item'+item_cart_id).remove();
                var minus_items = $('#badge').text()-1;
                $('#badge').text(minus_items);
                // countItem();
                notif();
                subTOTS();
                

             },
             error:function(){
                // _helper.buttonAnimation(2,'deposit_submit');
             }
          })
          cartedItems();
        },
        
        init: function() {
            // alert('dsdsdd');
          // al.getMarkers();
        }
    }

})(al);

$(function() {
    al.init();
});


var addC = (()=> {

  var api_url = 'http://localhost:8000'; 
  var url = window.location.origin;
  return {
      addInCart: (product_id)=>{
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
           url:url+"/add-to-cart-item",
           method:"POST",
           data:{carted:product_id},
           beforeSend:function(){
           },
           success:function(data){
            // 
           },
           error:function(){
              // _helper.buttonAnimation(2,'deposit_submit');
           }
        })
      },
      
      init: function() {
          // alert('dsdsdd');
        // al.getMarkers();
      }
  }

})(addC);
// search autocomp-----
function mySearchFunction(id) {
	var input = $('#'+id).val();
	// console.log(input);
	var url = window.location.origin;
	var n = input.length;
	if(n > 0 ) {

		$.ajax({
		headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
		type:'POST',
		url: url+'/search-products',
		data:{item:input},
		success:function(data)
			{	
				// console.log(data);
				$('#myUL').empty();
				if(data==false) {
					$('#myUL').append(`
							<li><a href="">No record found...</a></li>
						`);
				}else{
					$.each(data, function(i, item){
						$('#myUL').append(`
							<li><a href="${url+'/search?query='+item.name}">${item.name}</a></li>
						`);
					});
				}
			}
		});

	} else {
		$('#myUL').empty();
	}
	
}
// end autocomp
// hide / show notification
function notif(){
  if($('#badge').text() == 0){
    $( ".notification-cart" ).hide();
  }
}
// end
// add to cart func
function Carting(){ 
		
  $('.addToCart').each(function(){
  var carted = $(this).data('value');
  var url = window.location.origin;
    $(this).on('click', function(e){
      e.preventDefault();
      // alert(carted);
      addCart();
    });
  
    
  function addCart(){
    $( ".notification-cart" ).show();
    var text = $( "#badge" ).text();
    var text2 = $( "#badge2" ).text();
    text++;
    text2++;
    $( "#badge" ).text( text );
    $( "#badge2" ).text( text2 );
      $.ajax({
      headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
      type:'POST',
      url: url+'/add-to-cart-item',
      data:{carted:carted},
      success:function(data)
        {	
          if(data == true){
            $('.cartIcon'+carted).empty();
            $('.cartIcon'+carted).append(`
              <span class="shop-cart-icon"><i id="cart-icons " class="fas fa-check" aria-hidden="true"></i></span>
            `)
          // $( "#badge" ).text( text );
          }
        }
      });

  }
});
}
// end add to cart
// sidenav cart view
function cartedItems(){
		
  $.ajax({
    headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
    type:'POST',
    url: url+'/view-carted',
    data:{data:''},
    success:function(data)
      {
        // console.log(data);
        if(data == false){
          $('.item-on-cart').empty();
          $('.item-on-cart').append(`
            <div class="cart-empty">
              <h3>Your Cart is empty!!</h3>
            </div>
          `);
        }else{

        
        $('.item-on-cart').empty();
        var count_item=0;
        $.each(data, function(i, item){
        count_item++
          var numb = parseFloat(item.price).toFixed(2);
            $('.item-on-cart').append(`
            <div class="carted-item-cont" id="cart-item-cont${item.cart_id}">
              <div class="cart-product-cont">
                <img src="${item.images}">
                <span class="item-name"><p style="margin: 0;padding:0;">${item.name}</p></span>
              </div>
              <div class="carted-item">
                <div class="item-subtotal">
                  <div class="sub-price">
                    <input type="hidden" class="cart_id cart-id${item.cart_id}" name="cartID[]" value="${item.cart_id}">
                    <input type="hidden" class="cart-tot-price${item.cart_id}" value="${item.price}">
                    ₱ <span class="cart-sub-price${item.cart_id}">${numb}</span>
                  </div>
                  <div  class="cart-input">
                    <button  type="button" class="qty-dec" onclick="dec('qty',${item.cart_id})">-</button>
                      <input class="cartQ cartQty__${item.cart_id}" type="number" value="${item.quantity}" name="qty[]">
                    <button type="button" class="qty-inc" onclick="inc('qty',${item.cart_id})">+</button>
                  </div>
                  <div class="item-sub">
                    <span class="substotal${item.cart_id}">Total: ₱<span class="substotals">${item.total}</span></span>
                  </div>
                </div>
              </div>
              <span class="delete-item" onclick="al.deleteItemCart(${item.cart_id})">&times</span>
            </div>
            `);
        });
        $( "#badge" ).text( count_item );
        $('#badge2').text( count_item );
        // Carting();
      }
      }
  });
}
// end sidenav cart view
// filter price
function filterPrice() {
	var url = window.location.origin;
		// alert(min);
		$.ajax({
			headers:{ 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
			type:'POST',
			url: url+'/filter-price',
			data:{min:$( "#slider-range" ).slider( "values", 0 ),max:$( "#slider-range" ).slider( "values", 1 )},
			success:function(data)
			{
				$('.shop-items-conts').empty();
				// console.log(data);
				$.each(data, function(i, item){
          // console.log(item);
          if(item.order_exist == 0){
              $('.shop-items-conts').append(`
                
                    <div class="shop-items">
                        <div class="shop-item-image">
                          <a href="{{asset('frontpage/shop-details')}}" class="shop-images">
                            <img src="${item.images}">
                          </a>
                        </div>
                        
                        <div class="icon-holder">
                            <div class="shop-info-price">
                              <div class="shop-item-name">${item.name}</div>
                              <div class="shop-item-price">₱${item.price}</div>
                            </div>
                            <div class="cartIcon${item.product_id} cart-icon">
                                <a href="" id="addToCart" class="shop-cart-icon addToCart" data-value="${item.product_id}"><i id="cart-icons" class="fa fa-cart-plus" aria-hidden="true"></i></a href="">
                            </div>
                        </div>
                    </div>
              
              `);
          }else if(item.order_exist == 1){
              $('.shop-items-conts').append(`
                  
              <div class="shop-items">
                  <div class="shop-item-image">
                    <a href="{{asset('frontpage/shop-details')}}" class="shop-images">
                      <img src="${item.images}">
                    </a>
                  </div>
                  
                  <div class="icon-holder">
                    <div class="shop-info-price">
                      <div class="shop-item-name">${item.name}</div>
                      <div class="shop-item-price">₱${item.price}</div>
                    </div>
                    <div class="cartIcon${item.product_id} cart-icon">
                      <span class="shop-cart-icon"><i id="cart-icons " class="fas fa-check" aria-hidden="true"></i></span>
                    </div>
                </div>
              </div>
      `);
          }else {
            $('.shop-items-conts').append(`
                
                    <div class="shop-items">
                        <div class="shop-item-image">
                          <a href="{{asset('frontpage/shop-details')}}" class="shop-images">
                            <img src="${item.images}">
                          </a>
                        </div>
                        <div class="icon-holder">
                            <div class="shop-info-price">
                              <div class="shop-item-name">${item.name}</div>
                              <div class="shop-item-price">₱${item.price}</div>
                            </div>
                            <div class="cartIcon${item.product_id} cart-icon">
                                <a href="" id="addToCart" class="shop-cart-icon addToCart" data-value="${item.product_id}"><i id="cart-icons" class="fa fa-cart-plus" aria-hidden="true"></i></a href="">
                            </div>
                        </div>
                    </div>
              
              `);
          }
				});
				Carting();
        cartI();
			}
		});
	}
  // end price filter
  // checkout item functions
  var Chck = (()=> {

  // var api_url = 'http://localhost:8000';
  var url = window.location.origin;
  
  return {
      checkoutCart: ()=>{

        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
           url:url+"/checkout-item",
           method:"POST",
           data:{data:''},
           beforeSend:function(){
           },
           success:function(data){
            var len = $('.librebais').length;
             console.log(len);
             if(len > 0){
                location.href = '/frontpage/checkout';
             }else if(len == 0){
                alertify.success("Your Cart is Empty!!")
             }
                
           },
           error:function(){

              // _helper.buttonAnimation(2,'deposit_submit');
           }
        })
      },
      
      init: function() {
          // alert('dsdsdd');
        // al.getMarkers();
      }
  }

})(Chck);
// end checkout item
// sorting 
function sortIng(){
    var url = window.location.origin;
    $('#sort-items').on('change',function(){
        var sorts = $(this).val();

        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
           url:url+"/sort-items",
           method:"POST",
           data:{sort:sorts},
           beforeSend:function(){
           },
           success:function(data){
                $('.shop-items-conts').empty();
                    $('.shop-items-conts-col').empty();
                    
                    // console.log(data);
                    $.each(data, function(i, item){
                            // console.log(item.order_exist);
                      if(item.order_exist == 0){
                            $('.shop-items-conts').append(`
                                <div class="shop-items">
                                    <div class="shop-item-image">
                                        <a href="{{asset('frontpage/shop-details')}}" class="shop-images">
                                            <img src="${item.images}">
                                        </a>
                                    </div>
                                    <div class="icon-holder">
                                        <div class="shop-info-price">
                                          <div class="shop-item-name">${item.name}</div>
                                          <div class="shop-item-price">₱${item.price}</div>
                                        </div>
                                        <div class="cartIcon${item.product_id} cart-icon">
                                            <a href="" id="addToCart" class="shop-cart-icon addToCart" data-value="${item.product_id}"><i id="cart-icons" class="fa fa-cart-plus" aria-hidden="true"></i></a href="">
                                        </div>
                                    </div>
                                </div>
                            `);
                        }else if(item.order_exist == 1){
                            $('.shop-items-conts').append(`
                                <div class="shop-items">
                                    <div class="shop-item-image">
                                        <a href="{{asset('frontpage/shop-details')}}" class="shop-images">
                                            <img src="${item.images}">
                                        </a>
                                    </div>
                                    <div class="icon-holder">
                                        <div class="shop-info-price">
                                          <div class="shop-item-name">${item.name}</div>
                                          <div class="shop-item-price">₱${item.price}</div>
                                        </div>
                                        <div class="cartIcon${item.product_id} cart-icon">
                                            <span class="shop-cart-icon"><i id="cart-icons " class="fas fa-check" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                            `);
                        }
                        else{
                          $('.shop-items-conts').append(`
                                <div class="shop-items">
                                    <div class="shop-item-image">
                                        <a href="{{asset('frontpage/shop-details')}}" class="shop-images">
                                            <img src="${item.images}">
                                        </a>
                                    </div>
                                    <div class="icon-holder">
                                        <div class="shop-info-price">
                                          <div class="shop-item-name">${item.name}</div>
                                          <div class="shop-item-price">₱${item.price}</div>
                                        </div>
                                        <div class="cartIcon${item.product_id} cart-icon">
                                            <a href="" id="addToCart" class="shop-cart-icon addToCart" data-value="${item.product_id}"><i id="cart-icons" class="fa fa-cart-plus" aria-hidden="true"></i></a href="">
                                        </div>
                                    </div>
                                </div>
                            `);
                        }
                    });
                    
                    
                    $.each(data, function(i, item){
                            
                            $('.shop-items-conts-col').append(`
                            <div class="shop-items shop-item-col shop-cols">
                                <div class="shop-item-image">
                                    <a href="#">
                                        <img class="shop-imgs" src="${item.images}">
                                    </a>
                                </div>
                                <div class="shop-info-price shop-price-col shop-info-prices">
                                    <div class="shop-item-name-info shop-items-names">
                                        <div class="shop-item-name-col shop-name-col shop-itemname-cols">
                                            <span class="col-item-title col-names">${item.name}</span>
                                            <div class="parag col-parags">
                                                <div>${item.description}</div>
                                            </div>
                                        </div>
                                        <div class="shop-item-info shop-carts">
                                            <div class="col-price carts-price1">
                                                <div class="shop-item-price prod-price">₱${item.price}</div>
                                                <div class="shop-left">
                                                    <button class="addcart cols-cart" onclick="addC.addInCart(${item.product_id})"><i class="fa fa-cart-plus"></i>Add to cart</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            `);
    
                    });
                    Carting();
                    cartI();
           },
           error:function(){

           }
        });
    });
}
// end sorting
function subTotal(){
        var sum = Number($(this).text());
    $('.substotals').each(function(){
        sum += Number($(this).text());
    });
    $('.sub_tot').text(sum);
}


function cartI(){
    $('.shop-item-image').hover(function(){
      $('.shop-cart-icon i').css({
        'display':'block'
      });
    });
}
