<!---right side bar--->

<script src="./js/promo.js"></script>
<script>
$(window).load(function(){
  $('.promo').promo();
});
</script>
<div class="col-md-2">
  <div id="doc">
    <div id ="content">
               <div class="promo">
                 <ul class="slides">
                    <li><img src="images/headerlogo/5off.jpg"/></li>
                   <li><img src="images/headerlogo/frree.jpg"/></li>
                   <li><img src="images/headerlogo/dealofdday.jpg"/></li>
                 </ul>
               </div>
        </div>
  </div>
  <?php
      include 'widgets/cart.php';
      include 'widgets/recent.php';
  ?>
</div>
