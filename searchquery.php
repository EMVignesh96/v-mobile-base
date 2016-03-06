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


<style>
select{
display: inline;
}
</style>

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
<td><input type="text" name="query" style="font-size:20px; box-shadow:1px 1px 10px; padding:5px" placeholder="Search for a Phone or Brand.
">

</td>
<td  style="padding-bottom:30px;">
&nbsp&nbsp<input type="submit" value="vSearch"  id="download-button" class="btn-large waves-effect waves-light red">
</td>
</tr>
</table>
</form>

<hr>	        

</div>
</div>








<!--------------------------------------------------------------------------------------------------------------->
<!--------------------------------------------------------------------------------------------------------------->





<div id="pass" class="section no-pad-bot" id="index-banner" >
    
<div class="container">
      
      
<h1 class="header center red-text">Filtered Search.</h1>
      
<div class="row center">
        
<h5 class="header col s12 light">Get Filtered Results.</h5>
      
</div>
      
<div class="row center">

<form class="row center" method="get" action="filteredresult.php">
<table>

<tr>
<td class="header center red-text" style="text-align:right; font-size:30px;padding-bottom:20px;">Brand|</td>
<td><select name="manid" style="padding-left:5px; font-size:20px; box-shadow:1px 1px 10px">
<option value="-1"></option>
<option value="1">Sony</option>
<option value="2">Apple</option>
<option value="3">Microsoft</option>
<option value="4">Nokia</option>
<option value="5">Huawei</option>
<option value="6">Samsung</option>
<option value="7">Lenovo</option>
<option value="8">Motorola</option>
<option value="9">BlackBerry</option>
<option value="10">LG</option>
<option value="11">HTC</option>
</select></td>
</tr>

<tr>
<td class="header center red-text" style="text-align:right; font-size:30px;padding-bottom:20px;">Category|</td>
<td><select name="cg" style="padding-left:5px; font-size:20px; box-shadow:1px 1px 10px">
<option value="-1"></option>
<option value="SmartPhone">Smartphone</option>
<option value="Tablet">Tablet</option>
<option value="FeaturePhone">Featurephone</option>
</select></td>
</tr>

<tr colspan="4">
<td class="header center red-text" style="text-align:right; font-size:30px;padding-bottom:20px;">Platform|</td>
<td><select name="pf" style="padding-left:5px; font-size:20px; box-shadow:1px 1px 10px">
<option value="-1"></option>
<option value="Android">Android</option>
<option value="iOS">iOS</option>
<option value="Windows">Windows</option>
<option value="BlackBerry">BlackBerry</option>
<option value="Java">Java/Symbian</option>
</select></td>
</tr>

<tr>
<td class="header center red-text" style="text-align:right; font-size:30px;padding-bottom:30px;">Price|</td>
<td><input type="number" name="fp" style="padding-left:5px; font-size:20px; box-shadow:1px 1px 10px"></td>
<td style="text-align:center; font-size:20px; padding-left:5px; padding-bottom:20px;">to</td>
<td><input type="number" name="tp" style="padding-left:5px; font-size:20px; box-shadow:1px 1px 10px"></td>
</tr>	


<tr>
<td class="header center red-text" style="text-align:right; font-size:30px;padding-bottom:30px;">Primary Camera|</td>
<td><input type="number" name="fpc" style="padding-left:5px; font-size:20px; box-shadow:1px 1px 10px"></td>
<td style="text-align:center; font-size:20px; padding-left:5px; padding-bottom:20px;">to</td>
<td><input type="number" name="tpc" style="padding-left:5px; font-size:20px; box-shadow:1px 1px 10px"></td>
</tr>	


<tr>
<td class="header center red-text" style="text-align:right; font-size:30px;padding-bottom:30px;">Selfie Camera|</td>
<td><input type="number" name="fsc" style="padding-left:5px; font-size:20px; box-shadow:1px 1px 10px"></td>
<td style="text-align:center; font-size:20px; padding-left:5px; padding-bottom:20px;">to</td>
<td><input type="number" name="tsc" style="padding-left:5px; font-size:20px; box-shadow:1px 1px 10px"></td>
</tr>


<tr>
<td class="header center red-text" style="text-align:right; font-size:30px;padding-bottom:30px;">RAM|</td>
<td><input type="number" name="fram" style="padding-left:5px; font-size:20px; box-shadow:1px 1px 10px"></td>
<td style="text-align:center; font-size:20px; padding-left:5px; padding-bottom:20px;">to</td>
<td><input type="number" name="tram" style="padding-left:5px; font-size:20px; box-shadow:1px 1px 10px"></td>
</tr>	

<tr>
<td class="header center red-text" style="text-align:right; font-size:30px;padding-bottom:30px;">Release Year|</td>
<td><select name="fy" style="padding-left:5px; font-size:20px; box-shadow:1px 1px 10px">
<option value="-1"></option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
</select></td>
<td style="text-align:center; font-size:20px; padding-left:5px; padding-bottom:20px;">to</td>
<td><select name="ty" style="padding-left:5px; font-size:20px; box-shadow:1px 1px 10px">
<option value="2015"></option>
<option value="2005">2005</option>
<option value="2006">2006</option>
<option value="2007">2007</option>
<option value="2008">2008</option>
<option value="2009">2009</option>
<option value="2010">2010</option>
<option value="2011">2011</option>
<option value="2012">2012</option>
<option value="2013">2013</option>
<option value="2014">2014</option>
<option value="2015">2015</option>
</select>
</td>
</tr>	

</table>
<input type="submit" value="Get Results" id="download-button" class="btn waves-effect waves-light red">
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