<?php echo $this->load->view('admin_header') ?>
	<?php $this->load->view('front_end_header'); ?>
<div class="mi">
	<?php $this->load->view('front_end_side_bar') ?>
	
	<?php $this->load->view('advance_options') ?>
	<div class="tableouter">
		<table>
			<tr class="geetihd" style="width:1050px !important" >
				<td class="tab_opt bln headtd"><input type="checkbox"/></td>
				<?php foreach($fields as $k => $row) { ?>
				<td class="tab_opt bln headtd"><?php echo $fields[$k]['field_values'] ?></td>
				<?php } ?>
			</tr>
			<?php foreach($orders as $k => $row) { ?>
			<tr class="geeti" style="width:1050px !important">
				<td class="tab_opt bln tdtd"><input type="checkbox"/></td>
				<?php foreach($orders[$k] as $j => $row) { ?>
				<td class="tab_opt bln tdtd"><?php echo $orders[$k][$j]['field_value'] ?></td>
				<?php } ?>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>
<script>
	function show_hidden(val){
		$('#show_div_'+val).slideToggle(0);
		
	}
</script>
</div>

<?php echo $this->load->view('admin_footer') ?>
