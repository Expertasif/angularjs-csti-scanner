<!DOCTYPE html>
<html>
	<head>
		<title>1.5.7</title>
		<script src="https://code.angularjs.org/1.5.7/angular.min.js"></script>
	</head>
	<body ng-app="">
		<a href="?vulnerable=payload">Payload</a>
		<?php if(isset($_GET['vulnerable'])): ?>
		<?= htmlentities($_GET['vulnerable']); ?>
		<?php endif; ?>
	</body>
</html>