<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Add Costumer</h1>
</div>
    
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="<?php echo base_url().'admin/kostumer_add_act' ?>" method="post">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="nama"></div>
                <?php echo form_error('nama'); ?>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-10">
                <textarea class="form-control" name="alamat" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10 pt-2">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" value="L">
                        <label class="form-check-label">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="jk" value="P">
                        <label class="form-check-label">Female</label>
                    </div>
                </div>
                <?php echo form_error('status'); ?>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="hp"></div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">ID Card Number</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="ktp"></div>
                <?php echo form_error('ktp'); ?>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>