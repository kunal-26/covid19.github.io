<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Covid 19</title>
  <meta name="description" content="The HTML5 Herald">
  <meta name="author" content="SitePoint">

  <link rel="stylesheet" href="interstyle.css">

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Bootstrap carousel example" />
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->



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
   
   
       <centre>
<div id="chart_div5" style="width: 100px; height: 100px;"></div>
<?php
$cn=mysqli_connect("localhost","root","","covid19");
if(!$cn)
{
	echo "Unable to connect";
	die();
}
$sql="select * from cases";

//Fetch data
$result=mysqli_query($cn,$sql);
?>  
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      
	  
	  
	  function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['State', 'Total Cases'],
			<?php
			while($rw=mysqli_fetch_array($result))
			{
				echo "['".$rw['State']."',".$rw['Total Cases']."],";
				
			}
			
			?>
        ]);
  
        
        var options = {
          title: 'Worst Affected States',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>    
    
    <div id="piechart_3d" style="width: 800px; height: 300px;"></div>
   
    
	
    <div id="piechart_3d1" style="width: 100px; height: 100px;"></div>
       
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
		<?php
$cn=mysqli_connect("localhost","root","","covid19");
if(!$cn)
{
	echo "Unable to connect";
	die();
}
$sql="select * from total";

//Fetch data
$result=mysqli_query($cn,$sql);
?>  

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Cases', 'Numbers'],
           <?php
			while($rw=mysqli_fetch_array($result))
			{
				echo "['".$rw['Cases']."',".$rw['Numbers']."],";
				
			}
			
			?>
        ]);

        var options = {
          title: 'Corona Performance'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    <div id="piechart" style="width: 800px; height: 300px;"></div>
     
    <div id="piechart1" style="width: 100px; height: 100px;"></div>
    
    
    
    
    
   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

<?php
$cn=mysqli_connect("localhost","root","","covid19");
if(!$cn)
{
	echo "Unable to connect";
	die();
}
$sql="select * from months";

//Fetch data
$result=mysqli_query($cn,$sql);
?>    

 function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Active Cases'],
		   <?php
			while($rw=mysqli_fetch_array($result))
			{
				echo "['".$rw['Month']."',".$rw['Active Cases']."],";
				
			}
			
			?>
        ]);



        var options = {
          title: 'Covid Performance',
          hAxis: {title: 'Month',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
<div id="chart_div" style="width: 800px; height: 300px;"></div>    
<div id="chart_div1" style="width: 100px; height: 100px;"></div>    



  
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
	  
	  
	  
	  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

<?php
$cn=mysqli_connect("localhost","root","","covid19");
if(!$cn)
{
	echo "Unable to connect";
	die();
}
$sql="select * from months";

//Fetch data
$result=mysqli_query($cn,$sql);
?>    

 function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Recovery rate'],
		   <?php
			while($rw=mysqli_fetch_array($result))
			{
				echo "['".$rw['Month']."',".$rw['Recovered']."],";
				
			}
			
			?>
        ]);



        var options = {
          title: 'Corona Performance',
          hAxis: {title: 'Month',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div2'));
        chart.draw(data, options);
      }
    </script>


	<div id="chart_div2" style="width: 800px; height: 300px;"></div>
    <div id="chart_div3" style="width: 100px; height: 100px;"></div>
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

<?php
$cn=mysqli_connect("localhost","root","","covid19");
if(!$cn)
{
	echo "Unable to connect";
	die();
}
$sql="select * from months";

//Fetch data
$result=mysqli_query($cn,$sql);
?>    

 function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Month', 'Death rate'],
		   <?php
			while($rw=mysqli_fetch_array($result))
			{
				echo "['".$rw['Month']."',".$rw['Deaths']."],";
				
			}
			
			?>
        ]);



        var options = {
          title: 'Corona Performance',
          hAxis: {title: 'Month',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div4'));
        chart.draw(data, options);
      }
    </script>
    
    <div id="chart_div4" style="width: 800px; height: 300px;"></div>
    <div id="chart_div5" style="width: 100px; height: 100px;"></div>
  
  
    </centre>
</section>

    
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