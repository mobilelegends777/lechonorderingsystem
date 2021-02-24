$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


var al = (()=> {

    var api_url = 'http://localhost:8000'; 
    var url = window.location.origin;
    return {
        deleteItemCart: (item_cart_id,product_id)=>{
          $.ajax({
             url:url+"/delete-items-cart",
             async:false,
             method:"POST",
             data:{item_cart_id:item_cart_id},
             beforeSend:function(){
             },
             success:function(data){
                // console.log(data);
                $('#cart-item-cont'+item_cart_id).remove();
                $('#cart-cont-item'+item_cart_id).remove();
                $('#mobile-cart'+item_cart_id).remove();
                var minus_items = $('#badge').text()-1;
                $('#badge').text(minus_items);
                var minus_items = $('#badge2').text()-1;
                $('#badge2').text(minus_items);
                // countItem();
                    $('.shop-left'+product_id).empty();
                    $('.shop-left'+product_id).append(`
                       <button class="addcart cols-cart{{$item->product_id}}" onclick="addC.addInCart(${product_id})"><i class="fa fa-cart-plus"></i>Add to cart</button>
                      `);
                    $('.cartIcon'+product_id).empty();
                    $('.cartIcon'+product_id).append(`
                      <span id="addToCart" class="shop-cart-icon addToCart" onclick="addC.addInCart(${product_id})" data-value="${product_id}"><i id="cart-icons" class="fa fa-cart-plus" aria-hidden="true"></i></span>
                    `)
                    $('.past-order'+product_id).empty();
                    $('.past-order'+product_id).append(`
                       <button type="button" onclick="addC.addInCart(${product_id})" class="reorder">Reorder</button>
                      `);
                // notif();
                subTOTS();
                // Carting();
                
             },
             error:function(){
                // _helper.buttonAnimation(2,'deposit_submit');
             }
          })
          // cartedItems();
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
           async:false,
           method:"POST",
           data:{carted:product_id},
           beforeSend:function(){
           },
           success:function(data){
            // console.log(data[2]);
                var minus_items = Number($('#badge').text())+1;
                $('#badge').text(minus_items);
                var minus_items = Number($('#badge2').text())+1;
                $('#badge2').text(minus_items);
                if(data[1] == true){
                    $('.shop-left'+data[2]).empty();
                    $('.shop-left'+data[2]).append(`
                       <button class="addcartcol"><i class="fas fa-check"></i>On cart</button>
                      `);
                    $('.cartIcon'+data[2]).empty();
                    $('.cartIcon'+data[2]).append(`
                      <span class="shop-cart-icon"><i id="cart-icons " class="fas fa-check" aria-hidden="true"></i></span>
                    `)
                    $('.past-order'+data[2]).empty();
                    $('.past-order'+data[2]).append(`
                       <button  class="reorder">On cart</button>
                      `);
                    cartI();
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
        $('.shop-items-conts-col').empty();
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
                                <span id="addToCart" class="shop-cart-icon addToCart" onclick="addC.addInCart(${item.product_id})" data-value="${item.product_id}"><i id="cart-icons" class="fa fa-cart-plus" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
              
              `);
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
                        <div class="shop-left${item.product_id}">
                          <button class="addcart cols-cart${item.product_id}" onclick="addC.addInCart(${item.product_id})"><i class="fa fa-cart-plus"></i>Add to cart</button>
                        </div>
                      </div>
                    </div>
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
                        <div class="shop-left${item.product_id}">
                          <button class="addcartcol"><i class="fas fa-check"></i>On cart</button>
                        </div>
                      </div>
                    </div>
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
                               <span id="addToCart" class="shop-cart-icon addToCart" onclick="addC.addInCart(${item.product_id})" data-value="${item.product_id}"><i id="cart-icons" class="fa fa-cart-plus" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
              
              `);
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
                        <div class="shop-left${item.product_id}">
                          <button class="addcart cols-cart${item.product_id}" onclick="addC.addInCart(${item.product_id})"><i class="fa fa-cart-plus"></i>Add to cart</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              `);
          }
				});
        cartI();
			}
		});
	}
  // end price filter
  // checkout item functions
  var Chck = (()=> {

  // var api_url = 'http://localhost:8000';
  var url = window.location.origin;
  var arrayID = [];
  var arrayQty = [];
  return {
      checkoutCart: ()=>{
        $('.d-cart_id').each(function() { arrayID.push($(this).val()); });
        $('.d-cartQ').each(function() { arrayQty.push($(this).val()); });
        // alert(arrayID);
        $.ajax({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
           url:url+'/update-cart-nav',
           method:"POST",
           data:{id:arrayID,qty:arrayQty},
           beforeSend:function(){
           },
           success:function(data){
            var len = $('.librebais').length;
             // console.log(len);
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
                                            <span id="addToCart" class="shop-cart-icon addToCart" onclick="addC.addInCart(${item.product_id} )" data-value="${item.product_id}"><i id="cart-icons" class="fa fa-cart-plus" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                            `);
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
                                          <div class="shop-left${item.product_id}">
                                            <button class="addcart cols-cart${item.product_id}" onclick="addC.addInCart(${item.product_id})"><i class="fa fa-cart-plus"></i>Add to cart</button>
                                          </div>
                                        </div>
                                      </div>
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
                                        <div class="shop-left${item.product_id}">
                                          <button class="addcartcol"><i class="fas fa-check"></i>On cart</button>
                                        </div>
                                      </div>
                                    </div>
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
                                            <span id="addToCart" class="shop-cart-icon addToCart" onclick="addC.addInCart(${item.product_id} )" data-value="${item.product_id}"><i id="cart-icons" class="fa fa-cart-plus" aria-hidden="true"></i></span>
                                        </div>
                                    </div>
                                </div>
                            `);
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
                                        <div class="shop-left${item.product_id}">
                                          <button class="addcart cols-cart${item.product_id}" onclick="addC.addInCart(${item.product_id})"><i class="fa fa-cart-plus"></i>Add to cart</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              `);
                        }
                    });
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
