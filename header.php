<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome to Sushi Town! Population: One Hundred and YUM!</title>
 
<link rel="stylesheet" type="text/css" href="style/styles.css" />

<!-- <link rel="stylesheet" type="text/css" href="../style/styles.css" /> -->

<script src="jquery.js"> </script>
<script src="cycle2.js"> </script>

<script> 
$(document).ready(function(){
	var oldsrc;
	$("nav ul li a img").hover(function(){
		oldsrc = $(this).attr("src")
		$(this).attr("src","h-"+oldsrc)
	},function(){
		$(this).attr("src",oldsrc);
	})
})
</script>

</head>

<body>

<?php 
?>

