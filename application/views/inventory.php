<?php echo $this->load->view('admin_header'); ?>

	<?php $this->load->view('front_end_header'); ?>
<div class="mi">
	<?php $this->load->view('front_end_side_bar') ?>
	<?php $this->load->view('advance_options') ?>
	<div class="tableouter">
		<table>				
			<tr class="geetihd">
				<td><input type="checkbox"/></td><?php foreach($fields as $k => $row) { ?>  <td id="<?php echo $fields[$k]['field_id'] ?>" class="tab_opt bln headtd"><?php echo $fields[$k]['field_name'] ?></td><?php } ?>
			</tr>		
			<?php foreach($products as $k => $row) { ?>
			<tr class="geeti">
				<td><input type="checkbox"/></td>
				<?php foreach($products[$k] as $j =>$row) { ?>
				<td class="tab_opt bln tdtd">
					<?php echo $products[$k][$j]['field_value'] ?>
				</td>			
				<?php } ?>
				<td class="tab_opt bln tdtd">
					<select>
						<option>Edit</option>
						<option>Delete</option>
					</select>
				</td>
				<td class=" ">
					<!--div class="edit w30 vmore">
						<div class="h_o">
							<div class="hopp gt"></div>
							<div class="hopp dlr"></div>
							<div class="hopp rt"></div>
						</div>
					</div-->
				</td>
			</tr>
			<?php } ?>
		
		</table>
	</div></div>
			<script>
	function show_hidden(val){
		$('#show_div_'+val).slideToggle(0);
		
	}
		</script>
</div>
</div>
</body>
</html>
