<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Agents Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('index.php/agent/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>Agent Id</th>
						<th>Branch</th>
						<th>Agent Name</th>
						<th>Daily Transactions</th>
						<th>Photo Internal Branding</th>
						<th>Photo External Branding</th>
						<th>Photo Traffifs</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($agents as $a){ ?>
                    <tr>
						<td><?php echo $a['agent_id']; ?></td>
						<td><?php echo $a['branch_id']; ?></td>
						<td><?php echo $a['agent_name']; ?></td>
						<td><?php echo $a['daily_transactions']; ?></td>
						<td><?php echo $a['photo_internal_branding']; ?></td>
						<td><?php echo $a['photo_external_branding']; ?></td>
						<td><?php echo $a['photo_traffifs']; ?></td>
						<td>
                            <a href="<?php echo site_url('index.php/agent/edit/'.$a['agent_id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('index.php/agent/remove/'.$a['agent_id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
