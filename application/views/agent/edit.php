<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Agent Edit</h3>
            </div>
			<?php echo form_open('index.php/agent/edit/'.$agent['agent_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="branch_id" class="control-label"><span class="text-danger">*</span>Branch</label>
						<div class="form-group">
							<!-- <select name="branch_id" class="form-control">
								<option value="">select</option>
								<?php 
								$branch_id_values = array(
								);

								foreach($branch_id_values as $value => $display_text)
								{
									$selected = ($value == $agent['branch_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select> -->

							<select name="branch_id" class="form-control">
				                <option value="">select branch</option>
				                <?php 
				                foreach($braches as $post)
				                {
				                    echo '<option value="'.$post->branch_id.'">'.$post->branch_name.'</option>';
				                } 
				                ?>
				            </select>
							<span class="text-danger"><?php echo form_error('branch_id');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="agent_name" class="control-label"><span class="text-danger">*</span>Agent Name</label>
						<div class="form-group">
							<input type="text" name="agent_name" value="<?php echo ($this->input->post('agent_name') ? $this->input->post('agent_name') : $agent['agent_name']); ?>" class="form-control" id="agent_name" />
							<span class="text-danger"><?php echo form_error('agent_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="daily_transactions" class="control-label"><span class="text-danger">*</span>Daily Transactions</label>
						<div class="form-group">
							<input type="text" name="daily_transactions" value="<?php echo ($this->input->post('daily_transactions') ? $this->input->post('daily_transactions') : $agent['daily_transactions']); ?>" class="form-control" id="daily_transactions" />
							<span class="text-danger"><?php echo form_error('daily_transactions');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="photo_internal_branding" class="control-label"><span class="text-danger">*</span>Photo Internal Branding</label>
						<div class="form-group">
							<input type="text" name="photo_internal_branding" value="<?php echo ($this->input->post('photo_internal_branding') ? $this->input->post('photo_internal_branding') : $agent['photo_internal_branding']); ?>" class="form-control" id="photo_internal_branding" />
							<span class="text-danger"><?php echo form_error('photo_internal_branding');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="photo_external_branding" class="control-label"><span class="text-danger">*</span>Photo External Branding</label>
						<div class="form-group">
							<input type="text" name="photo_external_branding" value="<?php echo ($this->input->post('photo_external_branding') ? $this->input->post('photo_external_branding') : $agent['photo_external_branding']); ?>" class="form-control" id="photo_external_branding" />
							<span class="text-danger"><?php echo form_error('photo_external_branding');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="photo_traffifs" class="control-label"><span class="text-danger">*</span>Photo Traffifs</label>
						<div class="form-group">
							<input type="text" name="photo_traffifs" value="<?php echo ($this->input->post('photo_traffifs') ? $this->input->post('photo_traffifs') : $agent['photo_traffifs']); ?>" class="form-control" id="photo_traffifs" />
							<span class="text-danger"><?php echo form_error('photo_traffifs');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>