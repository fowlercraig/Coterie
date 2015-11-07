<?php  $page = $_GET['name']; ?>

<hr class="fs-cell fs-all-full nomargin">
<div class="page-filters fs-row">
  <nav class="fs-cell fs-all-full fs-sm-3">
    <span class="ss-gizmo ss-category btn btn-nav">filter</span>
    <?php if (isset($_GET['collection'])): ?>
    <a class="btn btn-nav" href="?page=collection&name=<?php echo $page; ?>&filter=all"><?php echo $_GET['collection']; ?></a> | 
	<?php else: ?>
	<a class="btn btn-nav" href="?page=collection&name=<?php echo $page; ?>&filter=all">all</a>
	<?php endif; ?>
    <a class="btn btn-nav" href="?page=collection&name=<?php echo $page; ?>&filter=new arrivals">new arrivals</a>
    <a class="btn btn-nav" href="?page=collection&name=<?php echo $page; ?>&filter=clothing">clothing</a>
    <a class="btn btn-nav" href="?page=collection&name=<?php echo $page; ?>&filter=shoes">shoes</a>
    <a class="btn btn-nav" href="?page=collection&name=<?php echo $page; ?>&filter=bags">bags</a>
    <a class="btn btn-nav" href="?page=collection&name=<?php echo $page; ?>&filter=accessories">accessories</a>
  </nav>
</div>
