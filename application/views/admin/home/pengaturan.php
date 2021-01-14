<div class="card">
    <form action="<?= base_url("admin/user/aksi/ganti/password") ?>" method="POST">
        <div class="modal-body">

            <?php if ($this->session->flashdata('sukses')) { ?>
                <div class="alert alert-success">
                    <?php echo $this->session->flashdata('sukses'); ?>
                </div>
            <?php } elseif ($this->session->flashdata('failed')) { ?>
                <div class="alert alert-warning">
                    <?php echo $this->session->flashdata('failed'); ?>
                </div>
            <?php } ?>

            <div class="form-group">
                <label>Password Sebelumnya <span style="color:red">*</span></label>
                <input type="password" name="passwordlama" id="" class="form-control" required>
            </div>


            <div class="form-group">
                <label>Password Baru <span style="color:red">*</span></label>
                <input type="password" name="passwordbaru" id="" class="form-control" required>
            </div>

        </div>
        <div class="modal-footer bg-whitesmoke br">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>