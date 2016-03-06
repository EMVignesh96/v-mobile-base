<?php 
$c=mysqli_connect("localhost","root","","phonedb");
$id=$_POST['id'];
$n=$_POST['una'];
if($_POST['ura']){
$rat=$_POST['ura'];
}
else{
$rat=0;
}
$rev=$_POST['urev'];
$sql="INSERT INTO userreview(ID, Name, Ratings, Review) VALUES($id,'$n',$rat,'$rev')";
echo" $rev";
if(mysqli_query($c,$sql)){
header("Location: details.php?pid=$id#ur");
}
?>