<?php
$conn=mysqli_connect("localhost","root","","beautysalon");
// if ($conn) {
//     echo"well connected";
// }
if (isset($_POST['register'])) {
    # code...
    $sname=$_POST['salname'];
    $sowner=$_POST['salowner'];
    $sloc=$_POST['salloc'];
    $spic=$_POST['salpic'];
    $target_dir = "uploads/";
$target_file = $target_dir . basename($file["name"]);

}
?>