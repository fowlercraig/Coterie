<div id="header--nav_cart" class="cart-swap" data-cart-view="data-cart-view">
   <div class="cart-header text-left">
      <div class="wrapper wrapper-nosides">
         <div class="fs-row">
            <div class="fs-cell fs-full-all">
               <a href="#" class="swap cart-launch" data-swap-target=".cart-swap" data-swap-linked=".cart-launch">
                  <span class="btn-nav">cart</span>
                  <span class="btn-nav btn-icon ss-gizmo ss-delete right fl-right"></span>
               </a>
            </div>
         </div>
      </div>
   </div>
   <div class="cart-items" rv-each-item="cart.items">
      <?php include('cart-content.php'); ?>
      <?php include('cart-content.php'); ?>
      <?php include('cart-content.php'); ?>
   </div>
   <div class="cart-footer fs-cell fs-all-full">
      <div class="wrapper wrapper-nosides">
         <div class="fs-row">
            <div class="fs-cell fs-all-half"><a href='#' class="btn btn-full btn-icon btn-outline ss-gizmo ss-loading right">update</a></div>
            <div class="fs-cell fs-all-half"><a href='?page=cart&name=your cart' class="btn btn-full btn-icon btn-primary inverted ss-gizmo ss-right right">checkout</a></div>
         </div>
      </div>
   </div>
</div>