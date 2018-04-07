<?php
$title = 'My new Web Page';
$heading = 'new heading';
$content = 'New text';
?>

<html>
<head><title><?= $title; ?></title></head>
<body>
<h1><?= ucwords($heading); ?></h1>
<p><?php echo $content; ?></p>
</body>
</html>
 