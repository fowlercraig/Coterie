<div class="page-header">
<div class="centered centered-full">
  <div class="fs-row">
    <div class="fs-cell fs-all-full">
      <div class="page-title_wrapper">
        <h1 class="page-title">
          <?php if ($page == 'index'): ?>
          Co-te-rie.
          <?php else: ?>
        	<?php echo $_GET['name']; ?>.
        	<?php if (isset($_GET['filter'])): ?>
        	<?php if ( $_GET['filter'] != 'all' ): ?>
        	<br><span><small><?php echo $_GET['filter']; ?></small></span>
        	<?php endif; ?>
        	<?php endif; ?>
          <?php endif; ?>

          <?php if ($page == 'cart'): ?>
          <span class="page-title_sub"><small>subtotal: <small>$1125</small></small></span>
          <?php endif; ?>
        </h1>
      </div>
    </div>
  </div>
</div>
</div>