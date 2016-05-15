<!DOCTYPE HTML>  
<html>
<head>

<style>
body
{
	background:url("http://www.psdgraphics.com/file/wooden-panels.jpg");
  
}

fieldset 
{ 
    display: block;
    margin-left: 4px;
    margin-right: 2px;
    padding-top: 35px;
    padding-bottom: 35px;
    padding-left: 0.75em;
    padding-right: 0.75em;
    border: 2px groove (internal value);
}

</style>

</head>
<body>  

<?php
// define variable and set to empty values
$license = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $license = test_input($_POST["name"]);
}


function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<h2 align ="center">Web-Engage Demo Task</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	<fieldset>
    <legend>Admin Details:</legend>
  License: <input type="text" name="name">
  <br>
  <br>
  <br>
 <input type="submit" name="submit" value="Submit"> 
</fieldset>
</form>
<script type="text/javascript">
		var jsvar = <?php echo $license; ?>;
		document.write(jsvar);  // jsvar stores the license
	
</script>
<script type="text/javascript" src="file.js"></script>
</body>
</html>