<?php if($page == 'index'): ?>
<div class="page-header">
   <div class="fs-row">
      <div class="fs-cell fs-all-full">
         <h1 class="page-title">Coterie</h1>
      </div>
   </div>
</div>
<?php endif; ?>

<div id="header-wrapper">
   <?php 
      // Available Classes for #header:
      // .forehead: adds some space above the nav.
      // .fivehead: adds a bunch of space above the nav.
      // .chin: adds some space below the nav.
   ?>
   <header id="header" class="menu-swap">
      <div class="fs-row">
         <nav id="header--nav_left" class="fs-cell fs-lg-hide fs-md-hide fs-sm-1">
            <a href="/" class="btn btn-nav btn-logo">coterie</a>
         </nav>
         <nav id="header--nav_left" class="fs-cell fs-lg-8 fs-md-4 fs-sm-hide">
            <?php if( $page != 'index'): ?>
            <a href="/" class="btn btn-nav btn-first">coterie</a>
            <?php endif; ?>
            <a href="?page=men" class="btn btn-nav">men</a>
            <a href="?page=women" class="btn btn-nav">women</a>
            <a href="?page=accessories" class="btn btn-nav">accessories</a>
            <a href="?page=sale" class="btn btn-nav">sale</a>
            <a href="?page=brands" class="btn btn-nav">brands</a>
         </nav>
         <nav id="header--nav_right" class="fs-cell fs-lg-4 fs-md-2 fs-sm-2 text-right">
            <a href="#" class="btn btn-nav swap right" data-swap-target=".cart-swap">cart (0)</a>
            <a href="?page=search" class="btn btn-nav">search</a>
            <a href="#" class="btn btn-nav btn-hamburg swap right" data-swap-target=".menu-swap">&nbsp;</a>
         </nav>
      </div>
   </header>
   <?php // Need to figure out how to append this with jQuery rather than by this method ?>
   <header id="header-mobile">
      <div class="fs-row">
         <nav id="header--logo-mobile" class="fs-cell fs-lg-6 fs-md-3 fs-sm-full">
            <a href="?page=collection" class="btn btn-nav btn-close ss-gizmo ss-plus rotate-45"></a>
            <a href="?page=collection" class="btn btn-nav">Shop</a>
            <a href="?page=collection" class="btn btn-nav">Stockists</a>
            <a href="#" class="btn btn-nav">Account</a>
         </nav>
      </div>
   </header>
   <div id="header--active" class="bg-color-lightPink menu-swap">
      <div class="fs-row">
         <div class="fs-cell fs-all-full"><hr class="invisible">Hello<hr class="invisible"></div>
      </div>
   </div>

</div>