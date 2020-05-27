<html>
  <head>
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
          title: 'Recovery Rate',
          hAxis: {title: 'Month',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="chart_div" style="width: 700; height: 400px;"></div>
  </body>
</html>