<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="icon" href="iconsale4mua.png" type="image/x-icon" />
<?php 
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo "<link rel=\"canonical\" href=\"$actual_link\"/>";
?>
<meta name="author" content="Huynh Ngoc Phat" />
<meta name="revisit-after" content="1 days" />
