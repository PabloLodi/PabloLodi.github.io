<script src="./js/grabber.js"></script>
<script src="./js/main.js"></script>
<?php 
if (isset($_SESSION['audio'])) {
	if ($_SESSION['audio'] == 1) {
		echo '<script type="text/javascript">',
		'grabber()',
		'</script>';
	}
}?>
<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
</html>