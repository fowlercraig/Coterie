<div id="header-wrapper">
   <header id="header" class="menu-swap about-swap <?php if($page == 'index'): ?>home<?php endif; ?>">
      <div class="fs-row">
         <nav id="header--nav_left" class="fs-cell fs-lg-hide fs-md-hide fs-sm-1">
            <a href="#" id="header-menu" class="btn btn-nav btn-hamburg">&nbsp;</a>
            <a href="/" class="btn btn-nav btn-first btn-logo"><?php echo $siteName; ?></a>
         </nav>
         <nav id="header--nav_left" class="fs-cell fs-lg-8 fs-md-4 fs-sm-hide navigation">
            <?php if( $page != 'index'): ?>
            <a href="/" class="btn btn-nav btn-first active"><?php echo $siteName; ?></a>
            <?php endif; ?>
            <a href="?page=collection&name=men" class="btn btn-nav">men</a>
            <a href="?page=collection&name=women" class="btn btn-nav">women</a>
            <a href="?page=collection&name=accessories" class="btn btn-nav">accessories</a>
            <a href="?page=collection&name=sale" class="btn btn-nav">sale</a>
            <a href="?page=collection&name=brands" class="btn btn-nav">brands</a>
            <a href="?page=magazine&name=magazine" class="btn btn-nav">magazine</a>
         </nav>
         <nav id="header--nav_right" class="fs-cell fs-lg-4 fs-md-2 fs-sm-2 text-right cart-swap">
            <a href="#" id="btnAbout" class="btn btn-nav swap" data-swap-target=".about-swap">about</a>
            <a id="search-start" href="?page=search" class="btn btn-nav swap search-launch" data-swap-target=".search-swap" data-swap-linked=".search-launch">search</a>
            <a href="#" class="btn btn-nav swap right btn-last cart-launch" data-swap-target=".cart-swap" data-swap-linked=".cart-launch">cart (3)</a>
         </nav>
      </div>
   </header>
   <?php include('parts/header-about.php'); ?>
   <?php include('parts/cart-header.php'); ?>
</div>

<?php include('parts/search-header.php'); ?>