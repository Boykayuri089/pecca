<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>inventory page</title>
<script src="js/jquery-1.11.2.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
$(document).ready(function(){

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
<div class="lfs">
	<a href="" class="ho1 tb">
		<span>Home</span>
	</a>
	<a href="" class="tick tb">
		<span>Tasks</span>
	</a>
	<a href="task.php" class="tel tb">
		<span>Contacts</span>
	</a>
	<a href="" class="org tb">
		<span>Organization</span>
	</a>
	<a href="" class="pro tb">
		<span>Projects</span>
	</a>
	<a href="" class="mail tb">
		<span>Email</span>
	</a>
	<a href="" class="report tb">
		<span>Reports</span>
	</a>
	<a href="" class="hide tb">
		<span>Hide/Show</span>
	</a>

</div>
<div class="mo">
	<div class="tab_outer fright">
	<ul>
		<li><a href="inventory.php">Inventory</a></li>
		<li><a href="customer.php" >Customers</a></li>
		<li><a href="order.php">Orders</a></li>
		<li><a href="report.php">Reports</a></li>
		<li><a href="#">Employees</a></li>
		<li><a href="cal.php">My accounts</a></li>
	</ul>
	</div>
<div class="mi">
	<div class="main_controler fleft">
		<form method="GET">
		<div class="fld_o">
			<div class="s_row search_o">
				<input type="search" name="src" class="src_fld" placeholder="Keyword Search"/>
				<input type="submit" class="src_bt" value="Go"/>
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row sel">
				<label>Status</label>
				<select>
					<option>Active</option>
					<option>Non Active</option>
				</select>
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row sel">
				<label>BRANDS</label>
				<select>
					<option>JBL</option>
					<option>SONY</option>
				</select>
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row head">
			Condition
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row ">
				<div class="option_o">
					<input type="checkbox"/>
					<label>New</label>
				</div>
				<div class="option_o">
					<input type="checkbox"/>
					<label>Like new</label>
				</div>
				<div class="option_o">
					<input type="checkbox"/>
					<label>Used</label>
				</div>
				<div class="option_o">
					<input type="checkbox"/>
					<label>Defective</label>
				</div>
				<div class="option_o">
					<input type="checkbox"/>
					<label>Untested</label>
				</div>
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row head">
			Price
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row">
			<div class="ttl">MSRP</div>
			<div class="h_input">
				<input type="text"/>
				<span>TO</span>
				<input type="text"/>
			</div>
			<div class="ttl">Online Price</div>
			<div class="h_input">
				<input type="text"/>
				<span>TO</span>
				<input type="text"/>
			</div>
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row head">
			Quantity
			</div>
		</div>
		<div class="fld_o">
			<div class="s_row">
			<div class="h_input">
				<input type="text"/>
				<span>TO</span>
				<input type="text"/>
			</div>
			</div>
		</div>
		</form>
	</div>
	
	<div class="main_list_o fright">
	
		<div class="opt_bar">
			<div class="oplist">
			<div class="adv">Advance Option</div>
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
		
		<div class="list_outer">
		
		<div class="task_top">
		Tasks
		</div>
		
		<div class="bt_o">
			<div class="inner">
				<ul>
					<li>Task Filters</li>
					<li>Catagories <img src="images/cat.jpg"/>
						<ul>
							<li>Option 1</li>
							<li>Option 2</li>
						</ul>
					</li>
					<li>View <img src="images/cat.jpg"/>
						<ul>
							<li>Option 1</li>
							<li>Option 2</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="src_o">
			<input type="Search"/>
			<input type="submit"/>
			</div>
		</div>
		
		<div class="tll">
		overdue<span>4</span>
		</div>
		<div class="lst_outer">
			<ul>
				<li>
				 <div class="ckb"><input type="checkbox"/></div>
				 <div class="so"><img src="images/star.jpg"/></div>
				 <div class="dto">12-sep-2015</div>
				 <div class="msg_a">Lorem ipsum </div>
				<div class="edit_bt"></div>
				<div class="del_bt"></div>
				</li>
				<li>
				 <div class="ckb"><input type="checkbox"/></div>
				 <div class="so"><img src="images/star.jpg"/></div>
				 <div class="dto">12-sep-2015</div>
				 <div class="msg_a">Lorem ipsum </div>
				<div class="edit_bt"></div>
				<div class="del_bt"></div>
				</li>
				<li>
				 <div class="ckb"><input type="checkbox"/></div>
				 <div class="so"><img src="images/star.jpg"/></div>
				 <div class="dto">12-sep-2015</div>
				 <div class="msg_a">Lorem ipsum </div>
				<div class="edit_bt"></div>
				<div class="del_bt"></div>
				</li>
			</ul>
		</div>
		
		
		<div class="tll">
		Latter task<span>6</span>
		</div>
		<div class="lst_outer">
			<ul>
				<li>
				 <div class="ckb"><input type="checkbox"/></div>
				 <div class="so"><img src="images/star.jpg"/></div>
				 <div class="dto">12-sep-2015</div>
				 <div class="msg_a">Lorem ipsum </div>
				<div class="edit_bt"></div>
				<div class="del_bt"></div>
				</li>
				<li>
				 <div class="ckb"><input type="checkbox"/></div>
				 <div class="so"><img src="images/star.jpg"/></div>
				 <div class="dto">12-sep-2015</div>
				 <div class="msg_a">Lorem ipsum </div>
				<div class="edit_bt"></div>
				<div class="del_bt"></div>
				</li>
				<li>
				 <div class="ckb"><input type="checkbox"/></div>
				 <div class="so"><img src="images/star.jpg"/></div>
				 <div class="dto">12-sep-2015</div>
				 <div class="msg_a">Lorem ipsum </div>
				<div class="edit_bt"></div>
				<div class="del_bt"></div>
				</li>
			</ul>
		</div>

		</div>
</div>
</div>
</body>
</html>
