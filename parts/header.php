<?php if($page == 'index'): ?>
<div class="page-header">
   <div class="fs-row">
      <div class="fs-cell fs-all-full">
         <div class="page-title_wrapper">
            <h1 class="page-title">co-te-rie</h1>
         </div>
      </div>
   </div>
</div>
<?php endif; ?>

<div id="header-wrapper">
   <header id="header" class="menu-swap <?php if($page == 'index'): ?>home<?php endif; ?>">
      <div class="fs-row">
         <nav id="header--nav_left" class="fs-cell fs-lg-hide fs-md-hide fs-sm-1">
            <a href="/" class="btn btn-nav btn-logo">shop...</a>
         </nav>
         <nav id="header--nav_left" class="fs-cell fs-lg-8 fs-md-4 fs-sm-hide">
            <?php if( $page != 'index'): ?>
            <a href="/" class="btn btn-nav btn-first active">co-te-rie</a>
            <?php endif; ?>
            <a href="?page=men" class="btn btn-nav">men</a>
            <a href="?page=women" class="btn btn-nav">women</a>
            <a href="?page=accessories" class="btn btn-nav">accessories</a>
            <a href="?page=sale" class="btn btn-nav">sale</a>
            <a href="?page=brands" class="btn btn-nav">brands</a>
         </nav>
         <nav id="header--nav_right" class="fs-cell fs-lg-4 fs-md-2 fs-sm-2 text-right cart-swap">
            <a href="#" class="btn btn-nav swap right cart-launch" data-swap-target=".cart-swap" data-swap-linked=".cart-launch">cart (0)</a>
            <a id="search-start" href="?page=search" class="btn btn-nav swap search-launch" data-swap-target=".search-swap" data-swap-linked=".search-launch">search</a>
            <a href="#" class="btn btn-nav btn-hamburg swap right" data-swap-target=".cart-swap">&nbsp;</a>
            <div id="header--nav_cart" class="cart-swap" data-cart-view="data-cart-view">
               <div class="cart-header text-left">
                  <div class="wrapper">
                     <a href="#" class="swap cart-launch" data-swap-target=".cart-swap" data-swap-linked=".cart-launch">
                        <span class="btn-nav">your cart.</span>
                        <span class="btn-nav btn-icon ss-gizmo ss-delete fl-right"></span>
                     </a>
                  </div>
               </div>
               <div class="cart-items" rv-each-item="cart.items">
                  <?php include('parts/cart-content.php'); ?>
                  <?php include('parts/cart-content.php'); ?>
                  <?php include('parts/cart-content.php'); ?>
               </div>
               <div class="cart-footer">
                  <div class="wrapper">
                     <div class="fs-row">
                        <div class="fs-cell fs-all-half"><a href='#' class="btn btn-full btn-icon btn-outline ss-gizmo ss-loading right">update</a></div>
                        <div class="fs-cell fs-all-half"><a href='#' class="btn btn-full btn-icon btn-primary inverted ss-gizmo ss-right right">checkout</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
      </div>
   </header>
</div>

<div id="search" class="search-swap">
   <div id="search-inner">
      <a href="#" class="ss-gizmo ss-delete swap search-launch" data-swap-target=".search-swap" data-swap-linked=".search-launch" id="search-close"></a> 
   </div>
</div>