<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Mobil</h1>
</div>
    
<div class="card shadow mb-4">
    <div class="card-body">
        <?php foreach($mobil as $m){ ?>
        <form action="<?php echo base_url().'admin/mobil_update' ?>" method="post">
            <input type="hidden" name="id" value="<?php echo $m->mobil_id; ?>">
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Merk Mobil</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="merk" value="<?php echo $m->mobil_merk; ?>"></div>
                <?php echo form_error('merk'); ?>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nomor Plat</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="plat" value="<?php echo $m->mobil_plat; ?>"></div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Warna Mobil</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="warna" value="<?php echo $m->mobil_warna; ?>"></div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Tahun Kendaraan</label>
                <div class="col-sm-10"><input type="text" class="form-control" name="tahun" value="<?php echo $m->mobil_tahun; ?>"></div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Status Mobil</label>
                <div class="col-sm-10">
                <select class="form-control" name="status">
                    <option value="1"<?php echo ($m->mobil_status==1)?' selected="selected"':'' ?>>Tersedia</option>
                    <option value="0"<?php echo ($m->mobil_status==1)?'':' selected="selected"' ?>>Sedang dirental</option>
                </select>
                </div>
                <?php echo form_error('status'); ?>
            </div>
            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        <?php } ?>
    </div>
</div>