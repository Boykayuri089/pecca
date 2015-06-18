<?php $this->load->view('admin_header'); ?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
function moreget()
{
	var x=$('.renamefld').html();
	//alert(x);
	$('.renamefld').last().after('<div class="sngl_row renamefld">'+x+'</div>');
}
</script>
<div class="mo">

<div class="mi">
	<?php $this->load->view('admin_left_sidebar'); ?>
	
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
			<?php
			if($this->session->flashdata('errors'))
			{	?>
				<center><span class="err_msg text_right"><img src="<?php misc() ?>images/err_icon.png" border="none"><?php echo $this->session->flashdata('errors');?></span></center>
			<?php
			}
			if($this->session->flashdata('success'))
			{	 ?>
				<center><span class="scc_msg text_right"><img src="<?php misc() ?>images/suc_icon.png" border="none"><?php echo $this->session->flashdata('success');?></span></center>
			<?php 
			}
			?>
			<form action="<?php httpIndex() ?>admin/order_managment" method="post">
			<div class="sngl_row renamefld">
				<div class="col-12">
					<div class="col-6 fleft">
						<div class="col-6 lbl fleft">
							Edit field
						</div>
						<div class="col-6 fright">
							<div class="fld_o_a edit">
								<select name="field_id[]">
								<?php foreach( $fields as $k => $row) { ?>
									<option value="<?php echo $fields[$k]['field_id'] ?>"><?php echo $fields[$k]['field_values'] ?></option>
								<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="col-6 fright">
						<div class="col-6 lbl fleft">
							Rename field here
						</div>
						<div class="col-6 fright">
							<div class="fld_o_a edit">
								<input name="field_value[]" value="" type="text"/>
							</div>
							<div class="more" onclick="moreget()" style="padding-left: 200px;padding-top: 8px;">+</div>
						</div>
					</div>
				</div> 
			</div>
			<div class="field_o_bt">
				<input name="submit" value="Submit" class="sub_bt" type="submit">
			</div>
			</form>
			<!--div class="sngl_row">
				<div class="col-12">
					<div class="col-6 fleft">
						<div class="col-6 lbl fleft">
							Add new field after
						</div>
						<div class="col-6 fright">
							<div class="fld_o_a edit">
								<select>
									<option>Image</option>
									<option>Status</option>
									<option>SKU Condition</option>
									<option>Product title asin</option>
								</select>
							</div>
						</div>
						
						</div>
					<div class="col-6 fright">
						<div class="col-6 lbl fleft">
							New Field Name
						</div>
						<div class="col-6 fright">
							<div class="fld_o_a edit">
								<input type="text"/>
							</div>
						</div>
					</div>
				</div> 
			</div-->
		</div>

</div>
</div>
<?php $this->load->view('admin_footer'); ?>
