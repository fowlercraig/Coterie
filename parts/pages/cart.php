<?php include ('parts/page-header.php'); ?>

<?php $width = 'fs-cell fs-xl-fourth fs-lg-fourth fs-md-2 fs-sm-1 fs-xs-full'; ?>

<div class="product-grid fs-row">
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/cart-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/cart-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/cart-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/cart-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/cart-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/cart-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/cart-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/cart-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/cart-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/cart-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/cart-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/cart-grid--item.php'); ?></div>
</div>

<div id="cart-footer">
  <div class="content">
    <div class="fs-row">
      <div class="fs-cell fs-xl-fourth fs-lg-half fs-md-4 fs-sm-full fs-right">
        <div class="fs-row">
          <div class="fs-cell fs-all-half"><a href='#' class="btn btn-full btn-icon btn-outline ss-gizmo ss-loading right">update</a></div>
          <div class="fs-cell fs-all-half"><a href='?page=cart&name=your cart' class="btn btn-full btn-icon btn-primary inverted ss-gizmo ss-right right">checkout</a></div>
        </div>
      </div>
    </div>
  </div>
</div>