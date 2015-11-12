<?php include ('parts/page-header--brand.php'); ?>
<?php include ('parts/page-filters.php'); ?>

<?php $width = 'fs-cell fs-xl-fourth fs-lg-third fs-md-2 fs-sm-half fs-xs-half'; ?>

<div class="product-grid fs-row">
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/product-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/product-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/product-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/product-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/product-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/product-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/product-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/product-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/product-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/product-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/product-grid--item.php'); ?></div>
  <div class="product-grid_item <?php echo $width; ?>"><?php include('parts/product-grid--item.php'); ?></div>
</div>

<div class="page-modal brand-info swap toggle_linked">
  <div class="centered centered-full">
    <div class="content">
      <div class="fs-row">
        <div class="fs-cell fs-all-full">
          <div class="page-modal--content clearfix bg-color-black">
            <a href="#" class="swap ss-gizmo ss-delete page-modal--close toggle_linked" data-swap-target=".brand-info" data-swap-linked=".toggle_linked"></a>
            <div class="fs-cell fs-lg-7 fs-md-6 fs-sm-3 fs-contained fs-right"><img src="assets/modal-img.jpg" class="img-responsive" /></div>
            <div class="fs-cell fs-lg-5 fs-md-6 fs-sm-3 fs-contained wrapper">
              <span>brands</span>
              <h2>common projects</h2>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula 
                nibh ut nulla pretium hendrerit. Suspendisse et nibh sit amet magna 
                volutpat porttitor ut at diam. Vestibulum vulputate, augue eget 
                facilisis mattis, ante magna consequat velit, eget tempus eros lorem 
                eu arcu. Nam malesuada ex nec nibh elementum mollis. 
              </p>
              <a target="_blank" href="#">commonprojects.com</a>
              <hr class="invisible">
              <div class="brand-clips">
                <span class="color-grey">Featured Clips</span>
                <div class="brand-clips--item"><a href="#">Lorem ipsum dolor sit amet, consectetur</a></div>
                <div class="brand-clips--item"><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vehicula nibh ut nulla pretium hendrerit.</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>