<?php $this->load->view('admin_header'); ?>
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
			<div class="sngl_row">
				<div class="col-12">
					<div class="col-6 lbl fleft">
						Select file type
					</div>
					<div class="col-6 fright">
						<div class="col-6 radio_bt fleft">
							<lable class="lbl" for="csv">CSV</lable>
							<input id="csv" type="radio" name="filetype" />
						</div>
						<div class="col-6 radio_bt fright">
						<lable class="lbl" for="exl">excel</lable>
						<input id="exl" type="radio" name="filetype" />
						</div>
					</div>
				</div> 
			</div>
			<div class="sngl_row">
				<div class="col-12">
					<div class="col-6 lbl fleft">
						Upload any file make sure file type should be CSV/EXL format. 
					</div>
					<div class="col-6 fright">
					<input type="button" class="btup" id="dummybt"/>
					<div class="lbl fnone">file path here </div>
					<input type="file" id="upload" style="display:none;">
					</div>
				</div> 
			</div>
		</div>
	</div>
</div>
<?php $this->load->view('admin_footer'); ?>