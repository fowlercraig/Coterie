<?php 
  $items = Array(
    'img_5153.jpg',
    'IMG_1388.jpg',
    'home_grid_4.jpg',
  );
?>

<div id="splash" class="covered">
	<div class="content">
		<div class="page-header">
			<div class="centered centered-full">
			  <div class="fs-row">
			    <div class="fs-cell fs-all-full">
			      <div class="page-title_wrapper">
			        <h1 class="page-title"><?php echo $siteName; ?></h1>
			        <div class="spinner">
								<div class="bounce1"></div>
								<div class="bounce2"></div>
								<div class="bounce3"></div>
							</div>
			      </div>
			    </div>
			  </div>
			</div>
		</div>
		<div id="splash--overlay"></div>
		<div id="splash--bg" style="background-image:url('/assets/<?php echo $items[array_rand($items)]; ?>');"></div>
	</div>
</div>