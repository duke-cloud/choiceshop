<?php
define('BASEURL',$_SERVER['DOCUMENT_ROOT'].'/choiceshop/');
define('CART_COOKIE','XBZc06CIduke018');
define('CART_COOKIE_EXPIRE',time() + (86400 *30));
define('TAXRATE',0.087);

define('CURRENCY','ngr');
define('CHECKOUTMODE','TEST');


if(CHECKOUTMODE == 'TEST'){
  define('STRIPE_PRIVATE','sk_test_A8DgWqROmt4bKNRD1gB4vKyS');
  define('STRIPE_PUBLIC','pk_test_tNdYCTfAvY6hPUFdRwq6Qo3I');
}

if(CHECKOUTMODE == 'LIVE'){
  define('STRIPE_PRIVATE','sk_live_od3YyAKNhs9DCxokVKZcd7nr');
  define('STRIPE_PUBLIC','pk_live_uyXIGFIhjEhpspc1D2ARmG2o');
}

 ?>
