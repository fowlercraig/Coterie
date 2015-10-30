<?php if($page == 'index'): ?>
<div class="page-header">
   <div class="fs-row">
      <div class="fs-cell fs-all-full">
         <h1 class="page-title">co-te-rie</h1>
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
   <header id="header" class="menu-swap <?php if($page == 'index'): ?>home<?php endif; ?>">
      <div class="fs-row">
         <nav id="header--nav_left" class="fs-cell fs-lg-hide fs-md-hide fs-sm-1">
            <a href="/" class="btn btn-nav btn-logo">co-te-rie</a>
         </nav>
         <nav id="header--nav_left" class="fs-cell fs-lg-8 fs-md-4 fs-sm-hide">
            <?php if( $page != 'index'): ?>
            <a href="/" class="btn btn-nav btn-first">co-te-rie</a>
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
</div>