<?php
/*

  type: layout
  content_type: static
  name: Home
  position: 1
  description: Homepage

*/
?>

<?php include template_dir() . "header.php"; ?>

<div class="edit" rel="content" field="starter_content">
  <module type="layouts" template="skin-1" />
  <module type="layouts" template="skin-2" />
  <module type="layouts" template="skin-3" />
  <module type="layouts" template="skin-4" />
  <module type="layouts" template="skin-5" />
</div>

<?php include template_dir() . "footer.php"; ?>