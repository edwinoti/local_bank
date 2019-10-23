<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Branch Edit</h3>
            </div>
			<?php echo form_open('index.php/branch/edit/'.$branch['branch_id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="user_id" class="control-label"><span class="text-danger">*</span>User Id</label>
						<div class="form-group">
							<!-- <select name="user_id" class="form-control">
								<option value="">select</option>
								<?php 
								$user_id_values = array(
								);

								foreach($user_id_values as $value => $display_text)
								{
									$selected = ($value == $branch['user_id']) ? ' selected="selected"' : "";

									echo '<option value="'.$value.'" '.$selected.'>'.$display_text.'</option>';
								} 
								?>
							</select> -->

							<select name="user_id" class="form-control">
				                <option value="">select User</option>
				                <?php 
				                foreach($users as $post)
				                {
				                    echo '<option value="'.$post->user_id.'">'.$post->user_email.'</option>';
				                } 
				                ?>
				            </select>
							<span class="text-danger"><?php echo form_error('user_id');?></span>
						</div>
					</div>
					
					<div class="col-md-6">
						<label for="branch_name" class="control-label"><span class="text-danger">*</span>Branch Name</label>
						<div class="form-group">
							<input type="text" name="branch_name" value="<?php echo ($this->input->post('branch_name') ? $this->input->post('branch_name') : $branch['branch_name']); ?>" class="form-control" id="branch_name" />
							<span class="text-danger"><?php echo form_error('branch_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="branch_location" class="control-label"><span class="text-danger">*</span>Branch Location</label>
						<div class="form-group">
							<input type="text" name="branch_location" value="<?php echo ($this->input->post('branch_location') ? $this->input->post('branch_location') : $branch['branch_location']); ?>" class="form-control" id="branch_location" />
							<span class="text-danger"><?php echo form_error('branch_location');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="balance" class="control-label"><span class="text-danger">*</span>Balance</label>
						<div class="form-group">
							<input type="text" name="balance" value="<?php echo ($this->input->post('balance') ? $this->input->post('balance') : $branch['balance']); ?>" class="form-control" id="balance" />
							<span class="text-danger"><?php echo form_error('balance');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="city" class="control-label"><span class="text-danger">*</span>City</label>
						<div class="form-group">
							<input type="text" name="city" value="<?php echo ($this->input->post('city') ? $this->input->post('city') : $branch['city']); ?>" class="form-control" id="city" />
							<span class="text-danger"><?php echo form_error('city');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="assets" class="control-label">Assets</label>
						<div class="form-group">
							<input type="text" name="assets" value="<?php echo ($this->input->post('assets') ? $this->input->post('assets') : $branch['assets']); ?>" class="form-control" id="assets" />
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