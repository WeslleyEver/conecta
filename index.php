<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" onload="this.onload=null;this.rel='stylesheet'">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap">
  </noscript>
	<!-- <link rel="stylesheet" href="<?= BASE_URL ?>/css/styles.css?v=<?= $time ?>"> -->
	<link rel="stylesheet" href="css/styles.css?v=<?= $time ?>">

	<title>Conecta</title>
</head>

<body>
	<?php include INCLUDES_PATH . '/header.php'?>

	<?php include INCLUDES_PATH . '/main.php'?>
</body>
<!-- <script src="<?= BASE_URL ?>/js/main.js?v=<?= $time ?>"></script> -->
<script src="js/main.js?v=<?= $time ?>"></script>

</html>