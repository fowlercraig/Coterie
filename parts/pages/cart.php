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
    <form>
      <div class="fs-row">
        <div class="fs-cell fs-xl-fourth fs-lg-half fs-md-half fs-sm-full fs-right">
          <div class="fs-row">
            <div class="fs-cell fs-all-half"><a href='#' class="btn btn-full btn-icon btn-outline ss-gizmo ss-loading right">update</a></div>
            <div class="fs-cell fs-all-half"><a href='?page=cart&name=your cart' class="btn btn-full btn-icon btn-primary inverted ss-gizmo ss-right right">checkout</a></div>
          </div>
        </div>
        <hr class="compact invisible fs-cell fs-lg-hide fs-md-hide fs-sm-full">
        <div class="fs-cell fs-xl-half fs-lg-half fs-md-half fs-sm-full">
          <div class="fs-row">
            <div class="fs-cell fs-all-full">
              <a href='#' class="swap color-white instructions-launch" data-swap-target="#cart-instructions" data-swap-linked=".instructions-launch">add special instructions</a><br>
              <small href='#' class="color-gray">shipping and taxes calculcated at checkout</small>
            </div>
          </div>
        </div>
      </div>
      <div id="cart-instructions">
        <div class="fs-row">
          <hr class="divider fs-cell fs-all-full">
          <div class="fs-cell fs-lg-half fs-md-full fs-sm-3 text-right fs-right">
            <p id="cart-instructions_close">
              <a href='#' class="swap color-white ss-gizmo ss-delete right btn-icon instructions-launch" data-swap-target="#cart-instructions" data-swap-linked=".instructions-launch"></a>
            </p>
          </div>
          <div class="fs-cell fs-lg-half fs-md-full fs-sm-3">
            <textarea placeholder="Special Instructions"></textarea>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>