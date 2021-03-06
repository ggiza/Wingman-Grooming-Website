<div class="modal fade" id="showProductDetails" tabindex="-1" role="dialog" aria-labelledby="confirmCancelLabel" aria-hidden="true">
    <div class="modal-dialog prod-details">
        <div class="modal-content prod-content-details">            
            <div class="modal-body">
                <div class="modal-content-container">
                    <div class="modal-details-images">
                        <div class="modal-product-image">
                            <img src="http://www.drodd.com/images14/flower26.jpg">
                        </div>
                        <div class="modal-product-more-images">
                            <div class="modal-product-more-images-each">
                                <img id="photo2" src="http://plusquotes.com/images/quotes-img/roundflower.jpg">
                            </div>
                            
                            <div class="modal-product-more-images-each">
                                <img id="photo3" src="http://plusquotes.com/images/quotes-img/roundflower.jpg">
                            </div>
                            
                            <div class="modal-product-more-images-each">
                                <img id="photo4" src="http://placehold.it/135x135">
                            </div>
                        </div>
                    </div>
                    
                    <div class="modal-product-details">  
                        
                        <div class="modal-close">
                                <a href="#">x</a>
                            </div>
                        
                        <div class="modal-shop-name">
                                O'DOUDS
                            </div>
                        
                        <div class="details-top">
                            <div class="details-left">    
                        
                            
                                <div class="modal-product-name">
                                    WATER BASED POMADE
                                </div>    

                                <div class="modal-product-price">
                                    $ 18.00
                                </div> 
                            </div>

                            <div class="details-right">
                                
                                <div id="hasstock" class="prod-hover-details">
                                    Quantity
                                    <div class="prod-hover-add">
                                        <input id="prodQty" class="prh-num" type="number" min="1" max="" value="1" placeholder="1">                                        
                                         
                                        <input id="prodAddCart" type="button"  class="prh-btn" value="ADD TO CART" data-href="{{ route('shop.index') }}" data-id="" data-productcode="" data-checkout="{{route('cart.index')}}"
                                        data-image="" data-name="" data-price="" data-stock=""
                                        data-toggle = "modal" data-target = "#addCartSuccess">  
                                    </div>

                                </div>
                                
                                <div id="outstock" class="prod-outofstock" style="display:none;">
                                    Out of Stock!
                                </div>
                            </div>       
                        </div>
                        
                        
                        
                        <div class="modal-product-detials-bot">           
                            
                            <hr style="border-color:#999; width: 95%; float: left;">

                            
                            <div class="product-description">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat iaculis auctor.
                                Donec turpis diam, sollicitudin sed porttitor sit amet, bibendum in justo. 
                                Aenean facilisis eu ligula id euismod. Suspendisse euismod lacus sit amet sapien hendrerit aliquam. 
                                Nam hendrerit volutpat nunc vel efficitur. Proin consequat sodales tristique. 
                                Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                                Nulla mauris enim, tincidunt a elit eget, maximus cursus magna. 
                                Ut porttitor dignissim rhoncus.
                            </div>
                            <br>
                            
                            <div class="details-properties">                   
                                <b>HOLD :</b>   Sample<br>
                                <b>HOLD :</b>   Sample<br>
                                <b>HOLD :</b>   Sample<br>
                                <b>HOLD :</b>   Sample

                            </div>
                            {{-- 
                            <div class="product-ingredients">
                                <span>INGREDIENTS</span>

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat iaculis auctor.
                                Donec turpis diam, sollicitudin sed porttitor sit amet, bibendum in justo. 
                                Aenean facilisis eu ligula id euismod. Suspendisse euismod lacus sit amet sapien hendrerit aliquam. 
                                Nam hendrerit volutpat nunc vel efficitur. Proin consequat sodales tristique. 
                                Interdum et malesuada fames ac ante ipsum primis in faucibus. 
                                Nulla mauris enim, tincidunt a elit eget, maximus cursus magna. 
                            </div> --}}
                            
                        </div>
                    </div>
                </div>
                
                <br>  
                <hr style="border-color: #999;width:92%;float:left;margin-left:50px;">

                <div class="modal-related-items">
                    <span>RELATED ITEMS</span>
                    <div class="related-items">
                        
                        <div class="shop-product-container">
                            <div class="shop-product-image">
                                <img src="http://placehold.it/190x190" width="190px" height="190px">
                            </div>

                            <div class="shop-product-details">
                                <div class="prod-detail-name">
                                    Water Based Pomade
                                </div>

                                <div class="prod-detail-price">
                                    $18.00
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div> <!-- End Modal Body -->            
        </div> <!-- End Modal Content -->
    </div> <!-- End Modal Dialog -->
</div> <!-- End Modal -->


	<!-- Javascript functions to control modal data injection -->
<script type="text/javascript">
    $href = "";
    
    $('#showProductDetails').on('show.bs.modal', function (e) {
        
      $(this).find('#prodQty').val(1);

      $image = $(e.relatedTarget).attr('data-image1');
      $(this).find('.modal-product-image img').attr('src',$image);
        
      $image2 = $(e.relatedTarget).attr('data-image2');
      $(this).find('.modal-product-more-images img#photo2').attr('src',$image2);    
        
      $image3 = $(e.relatedTarget).attr('data-image3');
      $(this).find('.modal-product-more-images img#photo3').attr('src',$image3);
        
      $image4 = $(e.relatedTarget).attr('data-image4');
      $(this).find('.modal-product-more-images img#photo4').attr('src',$image4);
        
      $name = $(e.relatedTarget).attr('data-name');
      $(this).find('.modal-product-name').text($name);
        
      $price = $(e.relatedTarget).attr('data-price');
      $(this).find('.modal-product-price').text("Php "+$price);
        
      $description = $(e.relatedTarget).attr('data-description');
      $(this).find('.product-description').text($description);
        
      $details = $(e.relatedTarget).attr('data-details');
      //$(this).find('.product-description').text($details); 

      $stock = $(e.relatedTarget).attr('data-stock');
      $(this).find('#prodQty').attr('max',$stock);

      if($stock == 0)
      {
        $(this).find('#outstock').css("display","inline-block");
        $(this).find('#hasstock').css("display","none");
      }
      else
      {
        $(this).find('#outstock').css("display","none");
        $(this).find('#hasstock').css("display","inline-block");
      }

      $id = $(e.relatedTarget).attr('data-id');
      $prodCode = $(e.relatedTarget).attr('data-productcode');

      $(this).find('#prodAddCart').attr('data-id',$id);
      $(this).find('#prodAddCart').attr('data-productcode',$prodCode);
      $(this).find('#prodAddCart').attr('data-name',$name);
      $(this).find('#prodAddCart').attr('data-image',$image);
      $(this).find('#prodAddCart').attr('data-price',$price);
      $(this).find('#prodAddCart').attr('data-stock',$stock);
      
      $(".details-properties").empty();

      $jsonDetails = JSON.parse($details);
            
      for(count = 0; count < $jsonDetails.length; count++)
      {            
          $(".details-properties").append('<div class="product-ingredients"><span font-family: BebasNeue;text-transform:uppercase; font-size: 18pt;>'+$jsonDetails[count]['name']+' : </span><span style="padding-top: 10px; font-weight:bold;font-size: 11pt; font-family: Gotham;">'+$jsonDetails[count]['value']+'</span><br>');
      }        
      
      $href = $(e.relatedTarget).attr('data-href');      
      
    });

    //-- Form confirm (yes/ok) handler, submits form --//
    $('#showProductDetails').find('.modal-footer #confirm').on('click', function(e){ 
        //$(this).data('form').submit();  
        window.open($href, '_self');        
    });

    //-- close --//
    $('#showProductDetails').find('.modal-close a').on('click', function(e){ 
        //$(this).data('form').submit();  
        $('#showProductDetails').modal('hide');     
    });

    $('.modal-product-more-images img').click(function() {
        var thmb = this;
        var src = this.src;

        $('.modal-product-image img').fadeOut(400,function(){
            thmb.src = this.src;
            $(this).fadeIn(400)[0].src = src;
        });
    });

    $('#prodAddCart').click(function()            
        {
            $('#showProductDetails').modal('hide');

            var id = $(this).attr("data-id");
            var code = $(this).attr("data-productcode");
            var name = $(this).attr("data-name");
            var image = $(this).attr("data-image");
            var price = $(this).attr("data-price");            
            var stock = $(this).attr("data-stock");            
                        
            var qty = $('#prodQty').val();

            $('#prodAddCart').attr('data-quantity', qty);

            $.ajax({
                type: "POST",
                url: 'webapi/cart/add-cart-details',                
                data: {
                    "id" : id,
                    "code" : code,
                    "name" : name,
                    "image" : image,
                    "qty" : parseInt(qty),
                    "price" : price,
                    "stock" : stock,
                },  
                success: function(data) {
                    console.log(data);                         
                },
                error: function(xhr, status, error) {
              
                // So we remove everything before the first '{
                var result = xhr.responseText.replace(/[^{]*/i,'');
                
                //We parse the json
                var data = JSON.parse(result);
                console.log(data);
                $('#errorhere').html("<div class='alert alert-danger'></div>");
                // And continue like no error ever happened
                $.each(data, function(i,item){
                    $('.alert-danger').append(item + "<br>");
                });
            } 
            });
        });


</script>