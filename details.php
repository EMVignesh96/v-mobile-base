<!DOCTYPE html>

<html lang="en">

<head>
  
<style>
::-webkit-scrollbar { 
    display: none; 
}
</style>
<meta http-equiv="Database Front End" content="text/html; charset=UTF-8"/>
  
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  
<title>Database System</title>

  
<!-- CSS  -->
  
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
<link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  
<link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>

<body>


  
<nav class="red lighten-1" role="navigation" style="position: fixed; z-index:100">
    
<div class="nav-wrapper container">
<a id="logo-container" href="#" class="brand-logo">

<?php
$c=mysqli_connect("localhost","root","","phonedb");
$sql="SELECT phone.MobName from phone where phone.ID=$_GET[pid]";
$res=mysqli_query($c,$sql);
$n=mysqli_fetch_assoc($res);
echo"$n[MobName] Review";
?>


</a>
      
<ul class="right hide-on-med-and-down">
        
<a href="searchquery.php">Back to Search
</a>     
</ul>

      
<ul id="nav-mobile" class="side-nav">
     

</ul>
      
<a href="#nav-mobile" data-activates="nav-mobile" class="button-collapse">
<i class="material-icons">menu</i></a>
    
</div>
  
</nav>  


<div class="section no-pad-bot" id="index-banner">
    
<div class="container">
      
<br><br>
      

<?php
///////////////////////////////////////////////////////////
//echo '<h1 class="header center red-text">Hello, Sign in here.<h1>';




//$q=$_GET['query'];
$c=mysqli_connect("localhost","root","","phonedb");
$sql="SELECT phone.MobName,phone.Category,phone.Price,phone.Launch,
platform.OS,
camera.PC,camera.SC,
config.RAM,config.ROM,config.CPU,
battery.Type,battery.mAh,battery.TT, battery.ST, 
review.Ratings, review.Review, manufacturer.ManName, dimension.L, dimension.B, dimension.H
FROM phone 
INNER JOIN platform ON phone.ID= platform.ID 
INNER JOIN camera ON camera.ID=phone.ID
INNER JOIN config ON config.ID=phone.ID
INNER JOIN battery ON battery.ID=phone.ID
INNER JOIN review ON review.ID= phone.ID
INNER JOIN manufacturer ON manufacturer.ID= phone.ManID
INNER JOIN dimension ON dimension.ID=phone.ID
WHERE phone.ID=$_GET[pid]";
$re=mysqli_query($c,$sql);
//$r=mysqli_fetch_assoc($re);
echo "<br/><br/>";













if(mysqli_num_rows($re)>0){
while($r=mysqli_fetch_assoc($re)){
//////////////////////////////////////////////////////////////////////


echo '<div  class="section no-pad-bot" id="index-banner" style="box-shadow:2px 2px 10px; border-radius:5px">
 
<div class="container">
      
<br><br>
      
<h1 class="header center red-text">';echo "$r[MobName]";echo '</h1>
      
<hr>

      
<div class="row center">
        
<table class="row center" style="text-align:justify">

<tr>
<td class="header light" style="text-align:center; font-size:30px;"></td>
      
<td class="header light" style="text-align:center; font-size:30px;"></td>
</tr>

<tr>
<td colspan="2" class="header  light" style="text-align:right; font-size:30px;">Overview.</td>
      
</tr>

<tr>
<td class="red-text" style="text-align:right; font-size:30px;">Launch|</td>
<td style="font-size:20px;">'; echo "$r[Launch]"; echo '</td>
</tr>	

<tr>
<td class="red-text" style="text-align:right; font-size:30px;">Manufacturer|</td>
<td style="font-size:20px;">'; echo "$r[ManName]"; echo '</td>
</tr>

<tr>
<td class="red-text" style="text-align:right; font-size:30px;">Price|</td>
<td style="font-size:20px;">'; echo "Rs.$r[Price]/-"; echo '</td>
</tr>


<tr>
<td class="red-text" style="text-align:right; font-size:30px;">Category|</td>
<td style="font-size:20px;">'; echo "$r[Category]"; echo '</td>
</tr>

<tr>
<td colspan="2" class="header  light" style="text-align:right; font-size:30px;"><hr></td>
      
</tr>

<tr>
<td colspan="2" class="header  light" style="text-align:left; font-size:30px;">Dimensions.</td>
      
</tr>







<tr>
<td class="red-text" style="text-align:right; font-size:30px;">Length|</td>
<td style="font-size:20px;">'; echo "$r[L] inches"; echo '</td>
</tr>	

<tr>
<td class="red-text" style="text-align:right; font-size:30px;">Breadth|</td>
<td style="font-size:20px;">'; echo "$r[B] inches"; echo '</td>
</tr>


<tr>
<td class="red-text" style="text-align:right; font-size:30px;">Thickness|</td>
<td style="font-size:20px;">'; echo "$r[H] inches"; echo '</td>
</tr>


<tr>
<td colspan="2" class="header  light" style="text-align:right; font-size:30px;"><hr></td>
      
</tr>

<tr>
<td colspan="2" class="header  light" style="text-align:right; font-size:30px;">Configuration.</td>
      
</tr>


<tr>
<td class="red-text" style="text-align:right; font-size:30px;">Operating System|</td>
<td style="font-size:20px;">'; echo "$r[OS]"; echo '</td>
</tr>	

<tr>
<td class="red-text" style="text-align:right; font-size:30px;">CPU|</td>
<td style="font-size:20px;">'; echo "$r[CPU] GHz"; echo '</td>
</tr>


<tr>
<td class="red-text" style="text-align:right; font-size:30px;">ROM|</td>
<td style="font-size:20px;">'; echo "$r[ROM] GB"; echo '</td>
</tr>	

<tr>
<td class="red-text" style="text-align:right; font-size:30px;">RAM|</td>
<td style="font-size:20px;">'; echo "$r[RAM] GB"; echo '</td>
</tr>


<tr>
<td colspan="2" class="header  light" style="text-align:right; font-size:30px;"><hr></td>
      
</tr>


<tr>
<td colspan="2" class="header  light" style="text-align:left; font-size:30px;">Camera.</td>
      
</tr>

<tr>
<td class="red-text" style="text-align:right; font-size:30px;">Back|</td>
<td style="font-size:20px;">'; echo "$r[PC] MP"; echo '</td>
</tr>	

<tr>
<td class="red-text" style="text-align:right; font-size:30px;">Front|</td>
<td style="font-size:20px;">'; echo "$r[SC] MP"; echo '</td>
</tr>

<tr>
<td colspan="2" class="header  light" style="text-align:right; font-size:30px;"><hr></td>
      
</tr>


<tr>
<td colspan="2" class="header  light" style="text-align:right; font-size:30px;">Battery.</td>
      
</tr>

<tr>
<td class="red-text" style="text-align:right; font-size:30px;">Type|</td>
<td style="font-size:20px;">'; echo "$r[Type]"; echo '</td>
</tr>	

<tr>
<td class="red-text" style="text-align:right; font-size:30px;">Capacity|</td>
<td style="font-size:20px;">'; echo "$r[mAh] mAh"; echo '</td>
</tr>


<tr>
<td class="red-text" style="text-align:right; font-size:30px;">Talktime|</td>
<td style="font-size:20px;">'; echo "$r[TT] hours"; echo '</td>
</tr>

<tr>
<td class="red-text" style="text-align:right; font-size:30px;">Stand-by|</td>
<td style="font-size:20px;">'; echo "$r[ST] hours"; echo '</td>
</tr>


<tr>
<td colspan="2" class="header  light" style="text-align:right; font-size:30px;"><hr></td>
      
</tr>


<tr>
<td colspan="2" class="header  light" style="text-align:left; font-size:30px;">Verdict.</td>
      
</tr>

<tr>
<td class="red-text" style="text-align:right; font-size:30px;">Rating|</td>
<td style="font-size:20px;">'; echo "$r[Ratings]"; echo '</td>
</tr>


<tr>
<td class="red-text" style="text-align:right; font-size:30px;">vReview|</td>
<td style="font-size:20px;">'; echo "$r[Review]"; echo '</td>
</tr>

</table>
<p class="header light" style="text-align:right; font-size:20px;"><strong>Courtesy:</strong>GSMArena.</p>
      
</div>
 
</div>
';


////////////////////////////////















///////////////////////////////////////////////////////////////////////
}
}











?>
   
</div>
  
</div>












<hr>
<br>
<div id="pass" class="section no-pad-bot" id="index-banner" >
    
<div class="container">
      
      
<?php
$c=mysqli_connect("localhost","root","","phonedb");
$sql="SELECT Name, Ratings, Review FROM userreview INNER JOIN phone WHERE phone.id=userreview.id AND phone.id=$_GET[pid]";
$r=mysqli_query($c,$sql);
if(mysqli_num_rows($r)>0){
echo '<h1 id="ur" class="header center red-text">User Reviews</h1>
';
}
else{
echo '<h1 class="header center red-text">No User Reviews yet</h1>
';
}?>

<div class="row center">
        
<h5 class="header col s12 light"></h5>
      
</div>
      
<?php
$c=mysqli_connect("localhost","root","","phonedb");
$sql="SELECT Name, Ratings, Review FROM userreview INNER JOIN phone WHERE phone.id=userreview.id AND phone.id=$_GET[pid]";
$re=mysqli_query($c,$sql);

while($r=mysqli_fetch_assoc($re)){

echo '<div class="row center" style="box-shadow:2px 2px 10px; border-radius:5px">
<table class="row center" style="text-align:justify">
<tr>
<td class="red-text" style="text-align:right; font-size:30px;">';echo "$r[Name]|";echo '</td>
<td style="font-size:20px;">';echo "$r[Review]";echo'</td>
<td class="red-text" style="font-size:20px;">';
if($r['Ratings']!=0){
echo "|$r[Ratings]";
}
else{
echo "";
}
echo '
</tr>
</table>
</div>
';
}
?>

    
</div>
  
</div>














<hr>
<div id="pass" class="section no-pad-bot" id="index-banner" >
    
<div class="container">
      
      
<h1 class="header center red-text">Your Experience with <?php 
$c=mysqli_connect("localhost","root","","phonedb");
$sql="SELECT phone.MobName from phone where phone.ID=$_GET[pid]";
$res=mysqli_query($c,$sql);
$n=mysqli_fetch_assoc($res);
echo"$n[MobName]";

?>.</h1>
      
<div class="row center">
        
<h5 class="header col s12 light">Give your Opinion.</h5>
      
</div>
      
<div class="row center">

<form class="row center" method="post" action="passreview.php">
<table>

<tr>
<td class="header center red-text" style="text-align:right; font-size:30px;padding-bottom:30px;">Your Name|</td>
<td><input type="text" name="una" style="padding-left:5px;font-size:20px; box-shadow:1px 1px 10px"></td>
</tr>

<tr>
<td class="header center red-text" style="text-align:right; font-size:30px;padding-bottom:30px;">Ratings|</td>
<td><input type="number" name="ura" style="padding-left:5px; font-size:20px; box-shadow:1px 1px 10px"></td>
</tr>	

<input type="hidden" name="id" value="<?php echo "$_GET[pid]"; ?>"style="font-size:20px; box-shadow:1px 1px 10px">

<tr>
<td class="header center red-text" style="text-align:right; font-size:30px;padding-bottom:30px;">Review|</td>
<td><textarea name="urev" placeholder="Enter your Experience" style="padding-left:5px;font-size:20px; box-shadow:1px 1px 10px; height:110px"></textarea></td>
</tr>

</table>
<input type="submit" value="Send" id="download-button" class="btn waves-effect waves-light red">
</form>

      
</div>
      
<br><br>

    
</div>
  
</div>







<footer class="page-footer red">
    
<div class="container">
      
<div class="row">
        
<div class="col l6 s12">
          
<h5 class="white-text">Credits</h5>
          
<p class="grey-text text-lighten-4">
This is a front-end to the Database.<br>Vignesh E M<br> Venkateswaran K<br>Vinoth R</p>


        
</div>
   

<div class="col l3 s12">
          
<h5 class="white-text">Details</h5>
          
<ul>
            
<li><a class="white-text" href="#!">Register Number</a></li>
            
<li><a class="white-text" href="#!">2014506059</a></li>
            
<li><a class="white-text" href="#!">2014506058</a></li>
            
<li><a class="white-text" href="#!">2014506060</a></li>
          
</ul>
        
</div>
     
       
      
</div>
    
</div>
    


<div class="footer-copyright">
      
<div class="container">
      
Powered by <span class="white-text text-lighten-3">Google's Material Design Framework<s/span>
      
</div>
    
</div>
  
</footer>















  
<!--  Scripts-->
  
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../../bin/materialize.js"></script>
  
<script src="js/init.js"></script>

  
</body>

</html>