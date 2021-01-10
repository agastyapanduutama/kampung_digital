<form action="<?= base_url("admin/penduduk/update/" . $this->req->acak($data->id)) ?>" method="POST">
    <div class="modal-body">
        <div class="form-group">
            <label>Warga <span style="color:red">*</span></label>
            <select name="warga" class="form-control" required id="">
                <option value="">-- Silakan Pilih -- </option>
                <?php foreach ($rt as $r) { ?>
                    <option value="<?= $r->nama_rt ?>" <?php if ($data->warga == $r->nama_rt) { echo "selected";}?> >RT 0<?= $r->nama_rt ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label>Nama Lengkap penduduk</label>
            <input type="text" value="<?= $data->nama_lengkap ?>" name=" nama_lengkap" id="" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="" value="<?= $data->tempat_lahir ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="" value="<?= $data->tanggal_lahir ?>" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kewarganegaraan</label>
            <select name="kewarganegaraan" class="form-control" id="">
                <option value="WNA" <?php if ($data->kewarganegaraan == "WNA") {
                                        echo "selected";
                                    } ?>>WNA</option>
                <option value="WNI" <?php if ($data->kewarganegaraan == "WNI") {
                                        echo "selected";
                                    } ?>>WNI</option>
            </select>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jk" class="form-control" id="">
                <option value="0" <?php if ($data->jk == '0') {
                                        echo "selected";
                                    } ?>>Perempuan</option>
                <option value="1" <?php if ($data->jk == '1') {
                                        echo "selected";
                                    } ?>>Laki-laki</option>
            </select>
        </div>
        <div class="form-group">
            <label>Agama</label>
            <select name="id_agama" class="form-control" id="">
                <option value="">-- Silakan Pilih --</option>
                <?php foreach ($agama as $key) : ?>
                    <option value="<?= $key->id ?>" <?php if ($key->id == $data->id_agama) {
                                                        echo "selected";
                                                    } ?>><?= $key->nama_agama ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label>Pendidikan Terkahir</label>
            <select name="id_pendidikan" class="form-control" id="">
                <option value="">-- Silakan Pilih --</option>
                <?php foreach ($pendidikan as $key) : ?>
                    <option value="<?= $key->id ?>" <?php if ($key->id == $data->id_pendidikan) {
                                                        echo "selected";
                                                    } ?>><?= $key->nama_pendidikan ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label>Pekerjaan</label>
            <select name="id_pekerjaan" class="form-control" id="">
                <option value="">-- Silakan Pilih --</option>
                <?php foreach ($pekerjaan as $key) : ?>
                    <option value="<?= $key->id ?>" <?php if ($key->id == $data->id_pekerjaan) {
                                                        echo "selected";
                                                    } ?>><?= $key->nama_pekerjaan ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label>Status Pernikahan</label>
            <select name="id_pernikahan" class="form-control" id="">
                <option value="">-- Silakan Pilih --</option>
                <?php foreach ($pernikahan as $key) : ?>
                    <option value="<?= $key->id ?>" <?php if ($key->id == $data->id_pernikahan) {
                                                        echo "selected";
                                                    } ?>><?= $key->nama_pernikahan ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" id="" cols="30" rows="10"><?= $data->keterangan ?></textarea>
        </div>
    </div>
    <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>