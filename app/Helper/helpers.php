<?php

/** Set sidebar item active */
function setActive(array $route)
{
  if (is_array($route)) {
    foreach ($route as $r) {
      if (request()->routeIs($r)) return 'active';
    }
  }
}

/** Check if product have discount */
function checkDiscount($product)
{
  $currentDate = date('Y-m-d');

  return $product->offer_price > 0 && $currentDate >= $product->offer_start_date && $currentDate <= $product->offer_end_date;
}

/** Calculate discount percent */

function calculateDiscountPercent($originalPrice, $discountPrice)
{
  $discountAmount = $originalPrice - $discountPrice;
  $discountPercent = ($discountAmount / $originalPrice) * 100;

  return round($discountPercent);
}

/** Check the product type */

function productType($type)
{
  switch ($type) {
    case 'new_arrival':
      return 'New';
      break;
    case 'featured_product':
      return 'Featured';
      break;
    case 'top_product':
      return 'Top';
      break;

    case 'best_product':
      return 'Best';
      break;

    default:
      return '';
      break;
  }
}

/** get total cart amount */
function getCartTotal(){
  $total = 0;
  foreach(Cart::content() as $product){
      $total += ($product->price + $product->options->variants_total) * $product->qty;
  }
  return $total;
}

/** get payable total amount */
// function getMainCartTotal(){
//   if(Session::has('coupon')){
//       $coupon = Session::get('coupon');
//       $subTotal = getCartTotal();
//       if($coupon['discount_type'] === 'amount'){
//           $total = $subTotal - $coupon['discount'];
//           return $total;
//       }elseif($coupon['discount_type'] === 'percent'){
//           $discount = ($subTotal * $coupon['discount'] / 100);
//           $total = $subTotal - $discount;
//           return $total;
//       }
//   }else {
//       return getCartTotal();
//   }
// }
