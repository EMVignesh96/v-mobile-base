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
<a id="logo-container" href="#" class="brand-logo">VMobileBase</a>
      
<ul class="right hide-on-med-and-down">
        
<li></li>     
</ul>

      
<ul id="nav-mobile" class="side-nav">

          
</ul>
      
<a href="#nav-mobile" data-activates="nav-mobile" class="button-collapse">
<i class="material-icons">menu</i></a>
    
</div>
  
</nav>  




<div id="view" class="section no-pad-bot" id="index-banner" >
    
<div class="container">
      
<br><br>      
<div class="row center">
        
</div>
      
<div class="row center">

<form class="row center" action="resultpage.php" method="get">
<table>
<tr>
<td><input type="text" name="query" style="font-size:20px; box-shadow:1px 1px 10px; padding:5px" placeholder="Search for a Phone or Brand.">

</td>
<td  style="padding-bottom:30px;">
&nbsp&nbsp<input type="submit" value="vSearch"  id="download-button" class="btn-large waves-effect waves-light red">
</td>
</tr>
</table>
</form>

<hr>	        
      
</div>
      
<br><br>

    
<?php
//$d=$_GET['query'];
//echo "Showing results '$d'";
echo '<h5 class="header col s12 light">Showing results matching your filters.</h5>';

?>
</div>
  
</div>



<!--//\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->


<div class="container">
    
<div class="section">

      <!--   Icon Section   -->
      
<div class="row">
        


 












      



<!--\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\-->




<?php
//$q=$_GET['query'];

$manid=$_GET['manid'];
$fp=$_GET['fp'];
$tp=$_GET['tp'];
$fpc=$_GET['fpc'];
$pf=$_GET['pf'];
$cg=$_GET['cg'];
$tpc=$_GET['tpc'];
$fsc=$_GET['fsc'];
$tsc=$_GET['tsc'];
$fram=$_GET['fram'];
$tram=$_GET['tram'];
$fy=$_GET['fy'];
$ty=$_GET['ty'];

$fq="SELECT phone.ID,phone.MobName,phone.Category,phone.Price,phone.Launch,
platform.OS,
camera.PC,camera.SC,
config.RAM,config.ROM,config.CPU,
battery.Type,battery.mAh,battery.TT, battery.ST, 
review.Ratings, review.Review, manufacturer.ManName 
FROM phone 
INNER JOIN platform ON phone.ID= platform.ID 
INNER JOIN camera ON camera.ID=phone.ID
INNER JOIN config ON config.ID=phone.ID
INNER JOIN battery ON battery.ID=phone.ID
INNER JOIN review ON review.ID= phone.ID
INNER JOIN manufacturer ON manufacturer.ID= phone.ManID WHERE 1=1";

if($_GET['manid']>0){
$fq=$fq." AND manufacturer.ID=$manid";
}

if($_GET['fp']){
$fq=$fq." AND phone.Price>=$fp";
}

if($_GET['tp']){
$fq=$fq." AND phone.Price<=$tp";
}

if($_GET['fpc']){
$fq=$fq." AND camera.PC>=$fpc";
}

if($_GET['pf']!=NULL&&$_GET['pf']>-1){
$fq=$fq." AND platform.OS LIKE"." '"."$pf%"."'";
}

if($_GET['cg']!=NULL&&$_GET['cg']>-1){
$fq=$fq." AND phone.Category LIKE"." '"."$cg%"."'";
}

if($_GET['tpc']>0){
$fq=$fq." AND camera.PC<=$tpc";
}

if($_GET['fsc']){
$fq=$fq." AND camera.SC>=$fsc";
}

if($_GET['tsc']){
$fq=$fq." AND camera.SC<=$tsc";
}

if($_GET['fram']){
$fq=$fq." AND config.RAM>=$fram";
}


if($_GET['tram']){
$fq=$fq." AND config.RAM<=$tram";
}


if($_GET['fy']>2005){
$fq=$fq." AND phone.Launch>=$fy";
}

if($_GET['ty']<=2015){
$fq=$fq." AND phone.Launch<=$ty";
}

$fq=$fq." ORDER BY review.ratings DESC";

$c=mysqli_connect("localhost","root","","phonedb");
$sql=$fq;

$re=mysqli_query($c,$sql);








if(mysqli_num_rows($re)>0){
while($r=mysqli_fetch_assoc($re)){
//////////////////////////////////////////////////////////////////////






echo '<div class="col s12 m4" style="box-shadow:1px 1px 5px; border-radius:5px">
          
<div class="icon-block">
   <h2 class="center red-text">
<i class="material-icons">';
//$cat=$re
if(!strcmp("SmartPhone",$r['Category']))
echo 'smartphone'; 
else if(!strcmp("Tablet",$r['Category']))
echo 'database';
else 
echo 'keyboard';
echo '</i></h2>
            
<h5 class="center">';echo "$r[MobName]";
echo '</h5>

            
<form method="get" action="details.php"><p class="center light">';
echo "<br>Launched in $r[Launch]";
echo "<br>Price: Rs.$r[Price]";
echo "<br>Ratings: $r[Ratings]";
echo "</p>";
echo '<input type="hidden" name="pid" value="';echo "$r[ID]";echo '">';
echo'<br><center><input type="submit" value="Show Specs"  id="download-button" class="btn waves-effect waves-light red"></center><br>';
          
echo '
</form>
</div>
        
</div>';





///////////////////////////////////////////////////////////////////////
}
}
else{

echo '<div id="update" class="section no-pad-bot" id="index-banner" style="box-shadow: 2px 2px 2px; border-radius:5px">
 
<div class="container">
      
<br><br>
      
<h1 class="header center red-text">';echo "No matching results.";echo '</h1>
      
</div>
  
</div>
';


}

?>


</div>

    
</div>
    
<br><br>

    
<div class="section">

    
</div>
  
</div>



<div id="update" class="section no-pad-bot" id="index-banner" style="box-shadow: 2px 2px 2px; border-radius:5px">
    
<div class="container">
      
<br><br>
      
<h1 class="header center red-text"></h1>
      
<div class="row center">
        
<h5 class="header col s12 light"></h5>
      
</div>
      
<div class="row center">
        
<form class="row center">
<table>
<tr>
<td class="header center red-text" style="text-align:right; font-size:30px;padding-bottom:30px;"></td>
<td></td>
</tr>	
</table>

</form>
      
</div>
      
<br><br>

    
</div>
  
</div>





<footer class="page-footer red" >
    


<div class="footer-copyright">
      
<div class="container">
      
Powered by <span class="white-text text-lighten-3">Google's Material Design Framework</span>
      
</div>
    
</div>
  
</footer>















  
<!--  Scripts-->
  
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../../bin/materialize.js"></script>
  
<script src="js/init.js"></script>

  
</body>

</html>