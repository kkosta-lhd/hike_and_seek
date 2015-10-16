<!doctype html>
<html>
<head>
<link href="_style/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {margin: auto;background-image:url(_images/wide-angle.jpg);     background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center; }
#plant-form {opacity: 0.9; filter: alpha(opacity=90); /* For IE8 and earlier */ margin: auto;width:60%;background-color:#fff;padding:20px;border-left:solid 1px #000;border-right:solid 1px #000; border-bottom:solid 1px #000;}
.form {opacity: 1; filter: alpha(opacity=100);}
</style>
<meta charset="UTF-8">
<title>Hike and Seek</title>
</head>
<body>
<div id="plant-form">
<h1>Please Enter Your Plant Information</h1>
<form class="form" method="GET">
	<p><input type="text" name ="first_name" placeholder= "First" /></p>
	<p><input type="text" name ="last_name" placeholder= "Last" /></p>
	<p><input type="text" name ="email" placeholder= "Email" /></p>
    <p><select name="formSoil">
 	 <option value="">Select One</option>
 	 <option value="clay">Clay</option>
 	 <option value="laom">Loam</option>
 	 <option value="peat">Peat</option>
 	 <option value="rocky">Rocky</option>
 	 <option value="sand">Sand</option>
 	 <option value="silt">Silt</option>
	</select></p>
    <p><textarea name="notes" placeholder= "Your Comments Here"></textarea></p>
    <input type="submit" name="submit" value= "Submit"/>
</form>
</div>


<body>
</body>
</html>


