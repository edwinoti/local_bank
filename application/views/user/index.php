<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">User Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('index.php/user/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Account Name</th>
						<th>User Mobile</th>
						<th>User Id</th>
						<th>User Name</th>
						<th>User Email</th>
						<th>Account Number</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($user as $u){ ?>
                    <tr>
						<td><?php echo $u['account_name']; ?></td>
						<td><?php echo $u['user_mobile']; ?></td>
						<td><?php echo $u['user_id']; ?></td>
						<td><?php echo $u['user_name']; ?></td>
						<td><?php echo $u['user_email']; ?></td>
						<td><?php echo $u['account_number']; ?></td>
						<td>
                            <a href="<?php echo site_url('index.php/user/edit/'.$u['user_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('index.php/user/remove/'.$u['user_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
