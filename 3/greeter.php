<!DOCTYPE html>
<html>
<head>
	<link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="greet.css">
	<title>greeter</title>
</head>
<body>
	<h2>Greeter</h2>
	<form id="Age-frm" method="GET" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<span class="lbl">Age :</span>
		<input type="number" min="1" max="100" name="Age" id="Age" class="Age"required/>
	
<button name="salimia"value='yes'>Salimia me</button>
</form>
<script type="text/javascript">
// check on change /onkeyup on
// #<., 	

 document.getElementById('Age').onchange=function(){

 }
</script>
</body>

</html>

<?php
if(isset($_GET['salimia']) && $_GET['salimia'] == 'yes') {
	# cod




$Age = $_GET['Age'];
//echo gettype($Age);

$Age_messsage = salimiana($Age);

echo '<br/><marquee style="color:blue;font-size:20px;">'.salimiana($Age).'</marquee>';


}

function salimiana($Age){
	//echo "$Age";


	if ($Age<=12):

		return 'Child';
		# code...
		elseif($Age >= 13 && $Age<= 19 ):
			# code...
		return'Teenie';

elseif( $Age >= 20&& $Age < 30):

	return 'Yout';
else:
 return 'Mzito';

endif;
}
?>