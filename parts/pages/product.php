<?php include ('parts/page-filters.php'); ?>

<div id="product" class="fs-row">
   <div class="fs-cell fs-lg-6 fs-md-3 fs-sm-3 fs-right"><?php include('parts/product-info.php'); ?></div>
   <div class="fs-cell fs-lg-6 fs-md-3 fs-sm-3"><?php include('parts/product-images.php'); ?></div>
   <div class="fs-cell fs-lg-6 fs-md-3 fs-sm-3 fs-right"><?php include('parts/product-addl.php'); ?></div>
</div>

<?php $width = 'fs-cell fs-xl-third fs-lg-third fs-md-2 fs-sm-full fs-xs-full fs-contained'; ?>

<hr class="divider">

<div class="product-grid fs-row">
  <div class="fs-cell fs-all-full">
    <div class="wrapper wrapper_pinned">
      <p class="">Complete the look with these carefully selected compliments.</p>
    </div>
    <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/product-grid--item.php'); ?></div>
    <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/product-grid--item.php'); ?></div>
    <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/product-grid--item.php'); ?></div>
  </div>
</div>
