<?php echo $this->load->view('admin_header') ?>

	<?php $this->load->view('front_end_header'); ?>
<div class="mi">
	<?php $this->load->view('front_end_side_bar') ?>
	<?php $this->load->view('advance_options') ?>
		
	<div class="tableouter">
	<table>
		<tr class="geetihd" style="width:1180px !important" >
			<td class="tab_opt bln headtd"><input type="checkbox"/></td>
			<?php foreach($fields as $k => $row) { ?>
			<td class="tab_opt bln headtd"><?php echo $fields[$k]['field_name'] ?></td>
			<?php } ?>
		</tr>
		<?php foreach($customers as $k => $row) { ?>
		<tr class="geeti" style="width:1180px !important">
			<td class="tab_opt bln tdtd"><input type="checkbox"/></td>
			<?php foreach($customers[$k] as $j => $row) { ?>
			<td class="tab_opt bln tdtd"><?php echo $customers[$k][$j]['field_value'] ?></td>			
			<?php } ?>
		</tr>
		<?php } ?>
	</table>
	</div>
			<script>
	function show_hidden(val){
		$('#show_div_'+val).slideToggle(0);
		
	}
		</script>
</div>
</div>
</body>
</html>
