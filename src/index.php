<?php
require('model/connect.php');

$db = Db::connectDb();

if (isset($_GET['page'])) {
	$page = htmlentities($_GET['page']);

	$pages = scandir('view');

	if ( ! empty($page) && in_array($_GET['page'] . ".php", $pages)) {

		$content = 'view/' . $_GET['page'] . ".php";
	} else {
		header("href:/forum/");
	}
}

?>
<!DOCTYPE html>
<html>
<head>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="assets/css/style.css" rel="stylesheet" media="screen">

    <script src="assets/js/jquery.js"></script>
</head>

<body style="background-image:url('assets/img/sport.jpg')">
<?php include('menu/menu.php'); ?>

<div id="wrapper" style="width:940px;
	-webkit-border-radius:5px;
	-moz-border-radius:5px;
	margin:1.6em auto;
	padding:10px;
	background:#F6F6F6;
	">
	<?php
	if ( ! empty($content)) {
		include($content);
	} else {
		require('view/index.php');
		//header("href:/forum/view/");
	}

	?>
</div>

</body>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('.nav a').filter(function () {
            return this.href == location.href
        }).parent().addClass('active').siblings().removeClass('active');

        $('.nav a').click(function () {
            $(this).parent().addClass('active').siblings().removeClass('active')
        });
    });
</script>
</html>
