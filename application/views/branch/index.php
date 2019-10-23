<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Branch Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('index.php/branch/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>User Id</th>
						<!-- <th>Branch Id</th> -->
						<th>Branch Name</th>
						<th>Branch Location</th>
						<th>Balance</th>
						<th>City</th>
						<th>Assets</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($branch as $b){ ?>
                    <tr>
						<td><?php echo $b['user_id']; ?></td>
						<!-- <td><?php echo $b['branch_id']; ?></td> -->
						<td><?php echo $b['branch_name']; ?></td>
						<td><?php echo $b['branch_location']; ?></td>
						<td><?php echo $b['balance']; ?></td>
						<td><?php echo $b['city']; ?></td>
						<td><?php echo $b['assets']; ?></td>
						<td>
                            <a href="<?php echo site_url('index.php/branch/edit/'.$b['branch_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('index.php/branch/remove/'.$b['branch_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
