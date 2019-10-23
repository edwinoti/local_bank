<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">User Add</h3>
            </div>
            <?php echo form_open('index.php/user/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<!--  -->
					<div class="col-md-6">
						<label for="account_name" class="control-label"><span class="text-danger">*</span>Account Name</label>
						<div class="form-group">
							<input type="text" name="account_name" value="<?php echo $this->input->post('account_name'); ?>" class="form-control" id="account_name" />
							<span class="text-danger"><?php echo form_error('account_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_mobile" class="control-label"><span class="text-danger">*</span>User Mobile</label>
						<div class="form-group">
							<input type="text" name="user_mobile" value="<?php echo $this->input->post('user_mobile'); ?>" class="form-control" id="user_mobile" />
							<span class="text-danger"><?php echo form_error('user_mobile');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_id" class="control-label">User Id</label>
						<div class="form-group">
							<input type="text" name="user_id" value="<?php echo $this->input->post('user_id'); ?>" class="form-control" id="user_id" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_name" class="control-label"><span class="text-danger">*</span>User Name</label>
						<div class="form-group">
							<input type="text" name="user_name" value="<?php echo $this->input->post('user_name'); ?>" class="form-control" id="user_name" />
							<span class="text-danger"><?php echo form_error('user_name');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="user_email" class="control-label"><span class="text-danger">*</span>User Email</label>
						<div class="form-group">
							<input type="text" name="user_email" value="<?php echo $this->input->post('user_email'); ?>" class="form-control" id="user_email" />
							<span class="text-danger"><?php echo form_error('user_email');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="account_number" class="control-label"><span class="text-danger">*</span>Account Number</label>
						<div class="form-group">
							<input type="text" name="account_number" value="<?php echo $this->input->post('account_number'); ?>" class="form-control" id="account_number" />
							<span class="text-danger"><?php echo form_error('account_number');?></span>
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