<?php
error_reporting(E_ALL ^ E_NOTICE);
@include "./config/config.inc.php";
@include "./session_member.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>:: Sistem Kontrol Rumah ::</title>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="./bootstrap-3.3.7/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="./font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" media="screen">



<script src="./JQuery/jquery-3.1.1.min.js"></script>
<script src="./bootstrap-3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="http://ebikjr.tech/crumah.php">Sistem Kontrol Rumah</a>
		</div>		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="/page.php?page=dashboard">Admin Panel</a></li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	

	<div class="container">
		<p> Pilih Saklar </p>
	</div>
	<br>
</div>
	<div class="container">
		<div class="container-fluid">
					<?php	
				$data = json_decode(file_get_contents("data.json"), true);
				foreach ($data as $v) {
					echo '<div class="checkbox"><label><input '.($v["status"]?"checked":"").' data-toggle="toggle" type="checkbox" id="'.$v["ruang"].'">'.$v["description"].'</label></div><br>';	
				}
			?>
		</div>
				<footer class="pull-left footer">
			<p class="col-md-12">
				<hr class="divider">
				Copyright &COPY; 2019
			</p>
		</footer>
	</div>
</body>
</html>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
	<script type="text/javascript">
	$(function () {
  	$('.navbar-toggle-sidebar').click(function () {
  		$('.navbar-nav').toggleClass('slide-in');
  		$('.side-body').toggleClass('body-slide-in');
  		$('#search').removeClass('in').addClass('collapse').slideUp(200);
  	});

  	$('#search-trigger').click(function () {
  		$('.navbar-nav').removeClass('slide-in');
  		$('.side-body').removeClass('body-slide-in');
  		$('.search-input').focus();
  	});
  });
	</script>
<script>

	<?php
		$data_condition = file_get_contents('data.json');
		$data_condition = json_decode($data_condition, true);
		for ($i=0; $i < count($data_condition); $i++)
		{
				$ruang = $data_condition[$i]['ruang'];
				///$status = (int)$data_condition[$i]['status'];
				echo '$(function() {
						$("#'.$ruang.'").change(function() {
							d_post = $(this).prop("checked");
							if (d_post == true) { post = 1; } else{ post = 0; }
							saklar = "'.$ruang.'";
							$.ajax
							({
									url:"saklar_'.$ruang.'.php",
									method:"GET",
									data:{status:post,ruang:saklar},
									success:function(data)
									{
											alert(data);
									}
							})
						})
				})
				';
			}
		?>
</script>