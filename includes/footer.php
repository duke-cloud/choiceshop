

</div>


<!--<br><br>-->

<!--  -->
<div class="footer-content">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul>
					 <li><a href="#">Who We Are</a></li>
					 <li><a href="contact.html">Contact Us</a></li>
					 <li><a href="#">Our Sites</a></li>
					 <li><a href="#">In The News</a></li>
					 <li><a href="#">Team</a></li>
					 <li><a href="#">Join The Team</a></li>
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Customer service</h4>
				 <ul>
					 <li><a href="#">FAQ</a></li>
					 <li><a href="#">Shipping</a></li>
					 <li><a href="#">Cancellation</a></li>
					 <li><a href="#">Returns</a></li>
					 <li><a href="#">Bulk Orders</a></li>
					 <li><a href="#">Buying Guides</a></li>
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Your account</h4>
				 <ul>
					 <li><a href="account.html">Your Account</a></li>
					 <li><a href="#">Personal Information</a></li>
					 <li><a href="#">Addresses</a></li>
					 <li><a href="#">Discount</a></li>
					 <li><a href="#">Track your order</a></li>
					 <li><a href="#">Affilliate Program</a></li>
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Categories</h4>
				 <ul>
					 <li><a href="#"> Furinture</a></li>
					 <li><a href="#"> Clothing</a></li>
					 <li><a href="#"> Decor</a></li>
					 <li><a href="#"> Kichen & Dinning</a></li>
					 <li><a href="#"> Bed & Bath</a></li>
					 <li><a href="#">...More</a></li>
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="footer">
	 <div class="container">
		 <div class="store">
			 <ul>
				 <li class="active">OUR STORE LOCATOR::</li>
				 <li><a href="#">Abuja</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Lagos</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Ibadan</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Portharcourt</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Eket</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Uyo</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">South Africa</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Sagamu</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Ilorin</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Calabar</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Jos</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Kano</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Akure</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Minna</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Lokoja</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Yenagoa</a></li>
				 <li><a href="#">|</a></li>
				 <li><a href="#">Enugu</a></li>
			 </ul>
		 </div>
		 <div class="copywrite">
		 			 <p>Copyright © <?php echo date("Y");?> Choices All rights reserved | Design by <a href="http://AnchorTechnology.ng.com">Anchor Technology</a></p>
		 		 </div>
		 		 </div>
		 	 </div>
		</div>
<!--<footer class="text-center" id="footer">
&copy;copyright /**;**/
?>choices 

<div id="back-top" class="back-to-top"><a class="backtotop" href="javascript:void(0)" title="Back to Top"></a></div>
          	</div>
        </div>

</footer>-->







 <script>
   jQuery(window).scroll(function(){
   var vscroll=JQuery(this).scrollTop();
   jQuery('#logotext').css({
     "transform" :"translate(0px,"+vscroll/2+"px)"
  });
  var vscroll=JQuery(this).scrollTop();
  jQuery('#back-flower').css({
    "transform":"translate("+vscroll/5+"px,-"+vscroll/12+"px)"
   });
   var vscroll=JQuery(this).scrollTop();
   jQuery('#fore-flower').css({
     "transform":"translate("+vscroll/5+"px,-"+vscroll/2+"px)"
   });
 });

 function detailsmodal(id){
    var data = {"id":id};
    jQuery.ajax({
       url : '/choiceshop/includes/detailsmodal.php',
       method : "post",
       data : data,
       success : function(data){
         jQuery('body').append(data);
         jQuery('#details-modal').modal('toggle');
     },
     error:function(){
       alert("Something went wrong");
     }
   });
   }
   function update_cart(mode,edit_id,edit_size){
     var data = {"mode": mode,"edit_id":edit_id,"edit_size":edit_size};
     jQuery.ajax({
       url : '/choiceshop/admin/parsers/update_cart.php',
       method :"post",
       data : data,
       success : function(){location.reload()},
       error : function(){allert("something went wrong");
      }
     });

   }
   function add_to_cart(){
    jQuery('#modal_errors').html("");
    var size = jQuery('#size').val();
    var quantity = jQuery('#quantity').val();
    var available = jQuery('#available').val();
    var error = '';
    var data = jQuery('#add_product_form').serialize();
    if(size == '' || quantity == '' || quantity == 0){
      error +='<p class="text-danger text-center">You must choose a size and quantity.</p>';
      jQuery('#modal_errors').html(error);
      return;
    }else if(quantity > available){
      error += '<p class="text-danger text-center">There are only '+available+' available.</p>';
      jQuery('#modal_errors').html(error);
      return;
    }else{
      jQuery.ajax({
         url: '/choiceshop/admin/parsers/add_cart.php',
        method : 'post',
        data : data,
        success : function(){
          location.reload();
        },
        error : function(){alert("Somthing went wrong");}
      });
    }
   }
 </script>
</body>
 </html>
