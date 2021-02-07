$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


var al = (()=> {

    var api_url = 'http://localhost:8000'; 

    return {
        deleteItemCart: (item_cart_id)=>{
          $.ajax({
             url:api_url+"/delete-items-cart",
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
                if($('#badge').text() == 0){
                  $( ".notification-cart" ).hide();
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

})(al);

$(function() {
    al.init();
});
