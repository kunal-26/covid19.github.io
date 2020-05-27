<!doctype html>

<html lang="en">
<head>


	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Bootstrap carousel example" />
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->





  <meta charset="utf-8">

  <title>Covid 19</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="interstyle.css">

</head>
<header class="header">
    <h1 class="logo"><a href="#">Covid 19</a></h1>
  <ul class="main-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="statistics.php">Statistics</a></li>
      <li><a href="symptoms.php">Symptoms</a></li>
      <li><a href="precautions.php">Precautions</a></li>
  </ul>
</header> 
<body style="background-color:black;">

<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/corona1jpg.jpg" alt="corona1jpg" title="corona1jpg" id="wows1_0"/></li>
		<li><img src="data1/images/corona2.jpg" alt="corona2" title="corona2" id="wows1_1"/></li>
		<li><a href="http://wowslider.net"><img src="data1/images/corona3.jpg" alt="slideshow javascript" title="corona3" id="wows1_2"/></a></li>
		<li><img src="data1/images/corona5.jpg" alt="corona5" title="corona5" id="wows1_3"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="corona1jpg"><span><img src="data1/tooltips/corona1jpg.jpg" alt="corona1jpg"/>1</span></a>
		<a href="#" title="corona2"><span><img src="data1/tooltips/corona2.jpg" alt="corona2"/>2</span></a>
		<a href="#" title="corona3"><span><img src="data1/tooltips/corona3.jpg" alt="corona3"/>3</span></a>
		<a href="#" title="corona5"><span><img src="data1/tooltips/corona5.jpg" alt="corona5"/>4</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">bootstrap carousel example</a> by WOWSlider.com v8.8</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section -->


<section>
   
        <p>
            Covid 19 : India Overview    </p>
    </div>
    <centre>
	<table class="content-table">
        <thread>
            <tr class="special">
                <th>Country</th>
                <th>Total Cases</th>
                <th>Active Cases</th>
                <th>Total Recovered</th>
                <th>Deaths</th>
            </tr>
        </thread>

	<?php 
$cn=mysqli_connect("localhost","root","","covid19");
if(!$cn)
{
	echo "Unable to connect";
	die();
}
$sql="select * from overall";

//Fetch data
$result=mysqli_query($cn,$sql);

//Check number of rows
$n=mysqli_num_rows($result);

if($n>0)
{
	//show data
	while($rw=mysqli_fetch_array($result))
	{
		$a=$rw["Country"];
		$b=$rw["Total Cases"];
		$c=$rw["Active Cases"];
		$d=$rw["Recovered"];
		$e=$rw["Deaths"];
		if($a=="India")
		{
	?>

    
            <tbody>
            <tr>
                <td><?php echo $a; ?></td>
                <td><?php echo $b; ?></td>
                <td><?php echo $c; ?></td>
                <td><?php echo $d; ?></td>
                <td><?php echo $e; ?></td>
                  </tr>
 <?php
		}
		
	}
	
	
}
?>
</tbody>
</table>




	<h1 style="color:#FFF;">Precautions</h1>
<p style="color:#FFF; text-justify:auto;">Protect yourself and others around you by knowing the facts and taking appropriate precautions. Follow advice provided by your local public health agency.
</p>


<h3 style="color:#FFF;">To prevent the spread of COVID-19:</h3>
<ol>
<li style="color:#FFF;">Clean your hands often. Use soap and water, or an alcohol-based hand rub.</li>
<li style="color:#FFF;">Maintain a safe distance from anyone who is coughing or sneezing.</li>
<li style="color:#FFF;">Don’t touch your eyes, nose or mouth.</li>
<li style="color:#FFF;">Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</li>
<li style="color:#FFF;">Stay home if you feel unwell.</li>
<li style="color:#FFF;">If you have a fever, cough and difficulty breathing, seek medical attention. Call in advance.</li>
<li style="color:#FFF;">Follow the directions of your local health authority.</li>
</ol>




    <div class="footer">
      <div class="inner-footer">
      
      <!--  for company name and description -->
        <div class="footer-items">
            <h1>Covid 19</h1>
            <p><img src="corona.jpg"></p>
          </div>
      
      <!--  for quick links  -->
          <div class="footer-items">
            <h3>Quick Links</h3>
            <div class="border1"></div> <!--for the underline -->
              <ul>
                <a href="index.php"><li>Home</li></a>
                <a href="statistics.php"><li>Statistics</li></a>
                <a href="symptoms.php"><li>Symptoms</li></a>
                <a href="precautions.php"><li>Precautions</li></a>
              </ul>
          </div>
      
            
      <!--  for contact us info -->
          <div class="footer-items">
            <h3>Contact us</h3>
            <div class="border1"></div>
              <ul>
                <li><i class="fa fa-map-marker" aria-hidden="true"></i>Gulab Jamun</li>
                <li><i class="fa fa-phone" aria-hidden="true"></i>9636381012</li>
                <li><i class="fa fa-envelope" aria-hidden="true"></i>kunaljain2608@gmail.com</li>
              </ul> 
            
      <!--   for social links -->
              <div class="social-media">
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-google-plus-square"></i></a>
              </div> 
          </div>
        </div>
        
      <!--   Footer Bottom start  -->
        <div class="footer-bottom">
          Copyright &copy; The Covid19 Page.
        </div>
      </div>    

</body>
</html>