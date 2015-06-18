<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>inventory page</title>
<script src="js/jquery-1.11.2.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery-ui.js"></script>
<link href="css/custom.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
	$(document).ready(function(){
	  $(function() {
		$( "#lpo" ).tabs();
	  });
	});
</script>
</head>
<body>

<div class="header_top">
	<div class="inner_logo">
		<img src="images/innerlogo.jpg"/>
	</div>
	<div class="userlogdetail">
		<div class="top">
			<span class="detail"><a href="#">Support </a> <a href="#">Help |</a> Your last login 10-Sep-2015 Time : 01:00:15  AM | <a href="#">Logout</a></span>
			<span>You login as Admin <br/> Aaron Hank</span>
		</div>
	</div>
</div>

<div class="mo">

<div class="mi">
	<div class="alp fleft">
		<div class="lpo">
			<ul>
			<li><a class="active" href="admin.php">CREATE USER</a></li>
			<li><a href="impexp.php">IMPORT / EXPORT</a></li>
			<li><a href="invmang.php">INVENTERY MANAGEMENT</a></li>
			<li><a href="cusmang.php">CUSTOMER MANAGEMENT</a></li>
			<li><a href="ordmang.php">ORDER MANAGEMENT</a></li>
			<li><a href="report.php">REPORTS</a></li>
			</ul>
		</div>
	</div>
	
	<div class="ad_hd fright">
		<div class="opt_bar">
			<div class="oplist">
			<div class="adv">Advance option</div>
			<div class="contrl_bt"></div>
			</div>
			<div class="opt_o">
			<span class="icon_tab pdf"></span>
			<span class="icon_tab exl"></span>
			<span class="icon_tab msg"></span>
			<span class="icon_tab noti"></span>
			<span class="icon_tab task"></span>
			</div>
		</div>
		<div class="fo_out">
			<div class="sngl_row topbar">
				<div class="tab_head sr_no">Sr No</div>
				<div class="tab_head firstname">First name</div>
				<div class="tab_head lastname">Last name</div>
				<div class="tab_head emailfld">Email</div>
				<div class="tab_head ipadd">IP address</div>
				<div class="tab_head uspri">User privilege</div>
				<div class="tab_head edt">Edit</div>
				<div class="tab_head del">Delete</div>
			</div>
			<?php for($i=1 ; $i<=10 ; $i++) { ?>
			<div class="sngl_row listbar">
				<div class="tab_head sr_no"><?php echo $i ?></div>
				<div class="tab_head firstname">Jhon</div>
				<div class="tab_head lastname">Wick</div>
				<div class="tab_head emailfld">sample@domain.com</div>
				<div class="tab_head ipadd">198.168.0.01</div>
				<div class="tab_head uspri">Full admin</div>
				<div class="tab_head edt"><a href="#" class="edt_bt">Edit</a></div>
				<div class="tab_head del"><a href="#" class="dl_bt">Delete</a></div>
			</div>
			<?php } ?>

			</div>

</div>
</div>
</body>
</html>
