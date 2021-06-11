<?php 
	$this->layoutPath = "Layout.php";
 ?>
<?php 
	$conn = Connection::getInstance();
	$vehicle["xemay"]  = $conn->query("select type from vehicle where type like 'Xe máy'");

	$vehicle["oto"]  = $conn->query("select type from vehicle where type like 'Ô tô'");

	$vehicle["xetai"]  = $conn->query("select type from vehicle where type like 'Xe tải'");

	$vehicle["xekhach"]  = $conn->query("select type from vehicle where type like 'Xe Khách'");
 ?>

<?php 
	$conn = Connection::getInstance();
	$mistake["1"] = $conn->query("select mistake from vehicle where mistake like 'Chuyển làn không có tín hiệu báo trước'");

	$mistake["2"] = $conn->query("select mistake from vehicle where mistake like 'Vượt đèn đỏ, đèn vàng'");

	$mistake["3"] = $conn->query("select mistake from vehicle where mistake like 'Không đội mũ khi tham gia giao thông'");

	$mistake["4"] = $conn->query("select mistake from vehicle where mistake like 'Đi ngược chiều'");
 ?>

<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load('visualization', '1.0', {'packages':['corechart']});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    
    data.addRows([
      ['Xe máy', <?php echo $vehicle["xemay"]->rowCount(); ?>],
      ['Ô tô', <?php echo $vehicle["oto"]->rowCount(); ?>],
      ['Xe tải', <?php echo $vehicle["xetai"]->rowCount(); ?>],
      ['Xe khách', <?php echo $vehicle["xekhach"]->rowCount(); ?>]
    ]);
	
    var options = {'title':'Tỉ lệ phương tiện vi phạm giao thông',
                   'width': 600,
                   'height': 500};
    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(data, options);
  }
</script>

<script type="text/javascript">
  google.load('visualization', '1.0', {'packages':['corechart']});
  google.setOnLoadCallback(drawChartS);
  function drawChartS() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Topping');
    data.addColumn('number', 'Slices');
    
    data.addRows([
      ['Chuyển làn không có tín hiệu báo trước', <?php echo $mistake["1"]->rowCount(); ?>],
      ['Vượt đèn đỏ, đèn vàng', <?php echo $mistake["2"]->rowCount(); ?>],
      ['Không đội mũ khi tham gia giao thông', <?php echo $mistake["3"]->rowCount(); ?>],
      ['Đi ngược chiều', <?php echo $mistake["4"]->rowCount(); ?>]
    ]);
	
    var options = {'title':'Tỉ lệ lỗi vi phạm giao thông',
                   'width': 600,
                   'height': 500};
    var chart = new google.visualization.PieChart(document.getElementById('chart_divS'));
    chart.draw(data, options);
  }
</script>

<div class="content-header">
	<div class="content-header-title">Tỉ lệ phương tiện vi phạm và lỗi vi phạm giao thông</div>
	<div class="content-header-link">
		<span><a href="index.php"><i class="fas fa-home"></i>&nbsp;Trang chủ </a> ></span>
		<span>Tỉ lệ phương tiện vi phạm và lỗi vi phạm giao thông</span>
	</div>
</div>
<div class="content-main"></div>
	<div class="content-main-header">
		<div class="content-main-header-title">
			Danh sách
		</div>
		<div class="search">
			<form method="get" action="">
				<div class="search-form">
					<form action="index.php?controller=users&action=search" method="POST">
						<input type="text" name="search" placeholder="Bạn cần tìm..." style="color: #ed5807;">
						<input type="submit" value="Tìm" style="background-color: #53a75b ;">
					</form>
					<button style="background-color: #52c0ef;"><a href="index.php?controller=users&action=create">Thêm mới</a></button>
				</div>
			</form>
		</div>
	</div>

	<div class="list">
		<div class="row">
			<div class="col-md-6"><span id="chart_div"></span></div>
			<div class="col-md-6"><span id="chart_divS"></span></div>
		</div>
	</div>
</div>
