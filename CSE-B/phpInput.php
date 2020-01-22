<?php  
if (isset($_POST['btn'])){
echo $_POST['id'];
echo $_POST['name'];
echo $_POST['age'];
echo $_POST['contact'];
echo $_POST['e-mail'];
}
?>
<html>
    <head>
    <title>Input Form</title>
    </head>
    
    <body>
    <form action="phpInput.php" method="get">
        id: <input type="text" name="id"><br>
	Name: <input type="text" name="Name"><br>
	age: <input type="text" name="age"><br>
	Contact: <input type="text" name="contact"><br>	
	E-mail: <input type="text" name="email"><br>
      <input type="submit" name='btn'>
    </form>
    </body>


</html>
