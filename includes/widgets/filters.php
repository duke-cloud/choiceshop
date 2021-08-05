<?php
$cat_id = ((isset($_REQUEST['cat']))?sanitize($_REQUEST['cat']):'');
$price_sort = ((isset($_REQUEST['price_sort']))?sanitize($_REQUEST['price_sort']):'');
$min_price = ((isset($_REQUEST['min_price']))?sanitize($_REQUEST['min_price']):'');
$max_price = ((isset($_REQUEST['max_price']))?sanitize($_REQUEST['max_price']):'');
$b = ((isset($_REQUEST['brand']))?sanitize($_REQUEST['brand']):'');
$brandQ = $db->query("SELECT * FROM brand ORDER BY brand");
?>
<html>
<body>
<h3 class="text-center">Search By:</h3>
<h4 class="text-center">Price</h4>
<form action="search.php" method="post">
<input type="hidden" name="cat" value="<?=$cat_id;?>">
<input type="hidden" name="price_sort" value="0">
<p>
  <label for="amount">Price range:</label>
  <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
</p>

<div id="slider-range">


</div>

<input type ="radio" name="price_sort" value="low"<?=(($price_sort='low')?'checked':'');?>>Low to High<br>
<input type ="radio" name="price_sort" value="high"<?=(($price_sort='high')?'checked':'');?>>High to Low<br><br>
<input type ="text" name="min_price" class="price-range" placeholder="Min $" value="<?=$min_price;?>">To
<input type ="text" name="max_price" class="price-range" placeholder="Max $" value="<?=$max_price;?>"><br><br>
<h4 class="text-center">Brand</h4>
<input type="radio" name="brand" value=""<?=(($b =='')?' checked':'');?>>All<br>
<?php while($brand = mysqli_fetch_assoc($brandQ)): ?>
  <select class="form-control" id="brand" name="brand">
    <option value=""<?=(($brand =='')?' selected':'');?>></option>
    <?php while($b = mysqli_fetch_assoc($brandQ)):?>
      <option value="<?=$b['id'];?>"<?=(($brand ==$b['id'])?'selected':'');?>><?= $b['brand'];?></option>
    <?php endwhile; ?>
  </select><br><br>
<?php endwhile;?>
<input type="submit" value="Search" class="btn btn-xs btn-primary">
<div class="shipping text-center"><!--shipping-->
          <img src="./choiceshop/images/shipping.jpg" alt="" />
        </div><!--/shipping-->
</form>
</body>
</html>
