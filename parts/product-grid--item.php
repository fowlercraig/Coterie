<?php 
  $items = Array(
    '1001065_002.jpg',
    'h55bbe231235d7.jpg',
    'h55e4f679a15f5.jpg',
  );
?>

<div class="product--grid-item">
  <div class="product--grid-thumb">
    <a href="?page=product&collection=<?php echo $_GET['name']; ?>&name=Army Shirt"><img src="/assets/<?php echo $items[array_rand($items)]; ?>" class="img-responsive"/></a>
    <div class="product--grid-thumb_controls">
      <span>Available Sizes</span>
      <span>SM</span> / 
      <span>LG</span>
      <span class="fl-right">
        <a href="#" class="ss-gizmo ss-eye">zoom</a>
      </span>
    </div>
  </div>
  <div class="product--grid-info">
    <a href="?page=product&collection=<?php echo $_GET['name']; ?>&name=Army Shirt">
      <small class="color-grey"><span class="product--grid-vendor">Common Projects</span></small><br>
      <span class="product--grid-title color-black">Product Title</span><br>
      <small class="color-grey"><span class="product--grid-price">$30.00</span></small>
    </a>
  </div>
  <hr class="invisible">
</div>