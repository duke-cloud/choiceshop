<?php
require_once'core/init.php';
include 'includes/head.php';
include 'includes/navigation.php';
include 'includes/headerfull.php';
include 'includes/leftbar.php';
$sql="SELECT * FROM products WHERE featured = 1";
$featured = $db->query($sql);
?>


   <!--main content---->
   <div class ="col-md-8">
     <div class="row">
       <h2 class="text-center">Featured Products</h2>
       <?php while($products = mysqli_fetch_assoc($featured)):?>
     <div class="col-md-3">
         <h4><?=$products['title'];?></h4>
         <?php $photos = explode(',',$products['image']); ?>
         <img src="<?=$photos[0];?>" alt=""  class="img-thumb">
         <p class="list_price text-danger">List Price:<?='<strike>'.money($products['list_price']).'</strike>';?></p>
         <p class="price ">Our Price:<?=money($products['price']);?></p>
         <button type="button" class="btn btn-sm btn-success"  onclick="detailsmodal(<?= $products['id'];?>)">Details</button>
     </div>

   <?php endwhile;?>
         </div>
       </div>
<?php
  include 'includes/rightbar.php';
   include 'includes/footer.php';?>


   <script type="text/javascript">
  jQuery(function() {
    jQuery("#slider-range").slider({
      range: true,
      min: 0,
      max: 20000,
      values:[500,1000],
      slide: function( event, ui ) {
      jQuery("#amount").val("N" + ui.values[0] + "- N" + ui.values[1] );
      }
    });
    jQuery("#amount").val("N" +jQuery("#slider-range").slider("values",0 ) +
      "-N" + $( "#slider-range" ).slider( "values", 1 ) );
  });
  </script>
