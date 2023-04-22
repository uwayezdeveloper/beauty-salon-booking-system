<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="boot/css/bootstrap.min">
    <link rel="stylesheet" href="index.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>beauty salon</title>
</head>
<body>
 <div id="back1">
    <center>
<a href="index.php">home</a>
<a href="#">about us</a>
<a href="services.php">services</a>
<a href="#">help</a>
<a href="#">admin</a>
<b>
    <form action="#" >
        <input type="search" placeholder="search here" name="find" id="form1">
        <input type="submit" value="search" name="search" id="form2">
    </form>
    
</center>
</div> 
<div id="middle">
<center>
<!-- <i class="fas fa-search"></i> Search -->
<div class="container">
<fieldset>
<form action="reg.php" method="POST" enctype="multipart/form-data">
    
 <table border="0">
    <tr>
        <td>enter salon name</td>
        <td><input type="text" name="salname"></td>
    </tr>
    <tr>
        <td>enter salon owner</td>
        <td><input type="text" name="salowner"></td>
    </tr>
    <tr>
        <td>enter salon location</td>
        <td><input type="text" name="salloc"></td>
    </tr>
    <tr>
        <td>upload salon's picture</td>
        <td><input type="file" name="salpic"></td>
    </tr>
    <tr>
        <td>enter salons services</td>
        <td><input type="text" name="salserv"></td>
    </tr>
    <tr>
        <td>enter contact</td>
        <td><input type="text" name="salcon"></td>
    </tr>
    <tr>
        <td>enter minimum amount paid</td>
        <td><input type="number" name="salmin"></td>
    </tr>
    <tr>
      
        <td colspan="2"bgcolor="red"style="size: 20px;"><input type="submit" name="send" value="register" ></td>
    </tr>
    <tr>
      
        <td colspan="2"bgcolor="black"style="size: 20px;"><input type="reset" name="cancel" value="cancel" ></td>
    </tr>
 </table>

   
 </form>
 </fieldset>
 </div>
 </center>
 </div>
</body>
</html>