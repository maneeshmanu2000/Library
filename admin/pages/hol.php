<?php
    include('config.php');
    session_start();
    if(isset($_SESSION['admin'])){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../../img/favicon.ico" type="image/x-icon">
    <title>Add Holidays</title>
    	<!-- Bootstrap CSS version 4.1.3 -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
	crossorigin="anonymous">

	<!--Font Awesome version 5.2.0-->	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ"
	crossorigin="anonymous">
	<!-- FontAwesome Icon Animation CSS-->
	<link rel="stylesheet" type="text/css" href="../dist/css/anima.css">
	<link rel="stylesheet" type="text/css" href="../dist/css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
   	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<form method="POST">
Year:<input type="number" name="year" value="<?php echo date("Y"); ?>">
        <br>
Month:<select name="month">
        <option value="<?php echo date("m"); ?>"><?php echo date("M"); ?>
        <option value="01">January
        <option value="02">February
        <option value="03">March
        <option value="04">April
        <option value="05">May
        <option value="06">June
        <option value="07">July
        <option value="08">August
        <option value="09">September
        <option value="10">October
        <option value="11">November
        <option value="12">December
    </select>
    <br>
    <input type="Number" name='num'>
    <br>
    <input type="Submit" name="save">
</form>
</body>
</html>
<?php
if(isset($_POST['save'])){
    $mnth=$_POST['month'];
    $yr=$_POST['year'];
    $num=$_POST['num'];
    mysqli_query($conn,"Insert into holnum(month,year,num) Values($mnth,$yr,$num)");

}
?>

<?php 
    }
?>