<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Highcharts Example</title>
		<style type="text/css">
.highcharts-figure, .highcharts-data-table table {
    min-width: 320px; 
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
	font-family: Verdana, sans-serif;
	border-collapse: collapse;
	border: 1px solid #EBEBEB;
	margin: 10px auto;
	text-align: center;
	width: 100%;
	max-width: 500px;
}
.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}
.highcharts-data-table th {
	font-weight: 600;
    padding: 0.5em;
}
.highcharts-data-table td, .highcharts-data-table th, .highcharts-data-table caption {
    padding: 0.5em;
}
.highcharts-data-table thead tr, .highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}
.highcharts-data-table tr:hover {
    background: #f1f7ff;
}


input[type="number"] {
	min-width: 50px;
}
		</style>
	</head>
	<body>
    <script src="https://code.highcharts.com/highcharts.js"></script>

<figure class="highcharts-figure">
    <div id="container4" class="">  </div>
    
</figure>
<?php
//เชื่อมต่อฐานข้อมูล
$conn=mysqli_connect("localhost","root","","project");  
//ให้แสดงผลภาษาไทยได้ โดยกำหนด charset เป็น utf-8
mysqli_set_charset($conn,"utf8");
$sql="SELECT helpResult,COUNT(*) AS count_helpResult FROM help group by helpResult";
$result = mysqli_query($conn,$sql);
    $data = array();
    while($row=mysqli_fetch_assoc($result)){
        extract($row);
        $data[]=array($row['helpResult'],intval($row['count_helpResult'])); 
        $data2=json_encode($data);    
    }
?>

<script type="text/javascript">
Highcharts.chart('container4', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'รายงานจำนวนผลการช่วยเหลือ'
    },
   
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'จำนวนนักเรียน',
        colorByPoint: true,
        data: <?php echo $data2; ?> 
    }]
});
		</script>
	</body>
</html>