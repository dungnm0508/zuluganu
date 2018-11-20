<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>Tra cứu theo tuổi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/favicon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="manifest" href="/favicon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/input.css">
	
</head>
<body>
	<div class="container">
		@if (!empty($status))
		<div class="alert alert-danger">
			{{$status}}
		</div>
		@endif
		<header>Tra cứu tuổi mệnh theo năm</header>
		
		<div class="content">
			@if(empty($info))
			@else
			<center>
				<div class="result">
					<p>Kết quả</p>
					<div class="item-info" >
						Năm sinh: <span>
							<?php echo $info['namsinh']; ?>
							@if($info['gioitinh'] == 1)
							Nam mệnh
							@else
							Nữ mệnh
							@endif
						</span>
					</div>
					
					<div class="item-info" >
						Can Chi: <span><?php echo $info['canchi']; ?> (<?php echo $info['giainghia_nam']; ?>)</span>
					</div>
					<div class="item-info" >
						Mệnh: <span><?php echo $info['menh']; ?> (<?php echo $info['nguhanh'];?>_<?php echo $info['giainghia_nguhanh'];?>)</span>
					</div>
					<div class="item-info" >
						Cung: <span><?php echo $info['cung']; ?></span>
					</div>
					<a href="javascript:void(0)" id="more-cungtrach">Xem thêm tuổi vợ chồng theo cung trạch</a>
					<div class="dropdown-cung col-md-6"" style="display: none">
						<meta name="csrf-token" content="{{ csrf_token() }}" />
						<input type="number" class="form-control" id="numberYear" data-id-cung='<?php echo $info['id_cung']; ?>' data-gioitinh='<?php echo $info['gioitinh']; ?>' aria-describedby="emailHelp" placeholder="Vui lòng nhập năm sinh của <?php echo $gioitinh = ($info['gioitinh'] ==1)?'Vợ':'Chồng'; ?>" name="numberYear" required>
						<button class="btn btn-success" id="btn-tra">Tra</button>
					</div>

				</div>
			</center>
			
			
			@endif
			<form method="post" action="postCanChi">
				@csrf
				<div class="form-group col-sm-11">
					<div class="col-sm-2">
						<label for="exampleInputEmail1">Năm</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Vui lòng nhập năm sinh của quý khách" name="txtYear" required>
					</div>
				</div>
				<div class="form-group col-sm-11">
					<div class="col-sm-2">
						<label for="exampleInputEmail1">Giới tính</label>
					</div>
					<div class="col-sm-10">
						<select class="form-control" id="selectSex" name="sltSex">
							<option value="1">Nam</option>
							<option value="2">Nữ</option>
						</select>
					</div>
				</div>
				<div class="footer">
					<div class="col-sm-12">
						<input type="submit" value="Gửi" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
		<footer>Copyright: 2018</footer>
	</div>
	<div class="modal fade" id="modalCungTrach" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Kết quả tra cung trạch</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="note-cungtrach">
						* <b>Bát Trạch Cung Phi (thuộc Cha)</b>: Khi chúng ta ra đời, dù Mạng và Cung Sanh như nhau - nhưng Cha Mẹ khác nhau, vợ chồng khác nhau, con cái khác nhau, địa lý khác nhau, hướng nhà khác nhau, gái (Âm) - trai (Dương) giới tính khác nhau... sẽ khiến cho Vận Mạng mỗi người có biến động, thay đổi. Và giữa mỗi người chúng ta sẽ có sự khác nhau rất lớn.
						<br>
						* <b>Cung Phi</b>: Dùng để coi về cưới gả, cất nhà, phương hướng xây nhà, hướng bếp, đường đi... Bát Trạch Cung Phi được tính dựa trên Ngũ Hành, Bát Quái, qua đó phản ánh sự biến đổi và phát triển của vạn vật trong vũ trụ theo thời gian. Phi còn có nghĩa là chạy, chạy là khác đi là sự phát triển - không giống nhau. 
						
					</div>
					<div class="content-result">
						<div class="result-cung col-sm-12">
							<div class="content-cung col-sm-6">
								<label><b>Cung Nam: </b></label>
								<p id="content-cungtrai"></p>
							</div>
							<div class="content-cung col-sm-6">
								<label><b>Cung Nữ: </b></label>
								<p id="content-cunggai"></p>
							</div>
						</div>
						<div class="result-battrach">
							<b>BÁT SAN GIAO HỢP: </b><span class="content-battrach"></span>
						</div>
						<div class="content-giainghia"><p></p></div>
					</div>

				</div>
				<!-- <div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div> -->
			</div>
		</div>
	</div>

	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script type="text/javascript">
		<?php if(!empty($info)){ ?>
			var infoMain = <?php echo json_encode($info); ?>;
		<?php } ?>
	</script>
	<script type="text/javascript" src="js/input.js"></script>

	
</body>
</html>