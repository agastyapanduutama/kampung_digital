<div class="card">
    <div class="card-header">
        <span>Data yang memiliki tanda bintang merah (<span style="color:red">*</span>) wajib diisi</span>
    </div>
    <form action="<?= base_url("admin/penduduk/insert") ?>" method="POST">
        <div class="modal-body">
            <?php if ($this->session->level != '4'): ?>
            <div class="form-group">
                <label>Warga <span style="color:red">*</span></label>
                <select name="warga" class="form-control" required id="">
                    <option value="">-- Silakan Pilih -- </option>
                    <?php foreach ($rt as $r) { ?>
                        <option value="<?= $r->nama_rt ?>">RT 0<?= $r->nama_rt ?></option>
                    <?php } ?>
                </select>
            </div>
            <?php endif ?>
            <div class="form-group">
                <label>Nama Lengkap penduduk <span style="color:red">*</span></label>
                <input type="text" placeholder="Misalkan : Agastya Pandu" name="nama_lengkap" id="" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Tempat Lahir <span style="color:red">*</span></label>
                <input type="text" placeholder="Misalkan : Bandung" name="tempat_lahir" id="" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Tanggal Lahir <span style="color:red">*</span></label>
                <input type="date" name="tanggal_lahir" id="" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Kewarganegaraan<span style="color:red">*</span></label>
                <select name="kewarganegaraan" class="form-control" id="">
                    <option value="WNA">WNA</option>
                    <option value="WNI">WNI</option>
                </select>
            </div>
            <div class="form-group">
                <label>Jenis Kelamin<span style="color:red">*</span></label>
                <select name="jk" class="form-control" id="">
                    <option value="0">Perempuan</option>
                    <option value="1">Laki-laki</option>
                </select>
            </div>
            <div class="form-group">
                <label>Agama<span style="color:red">*</span></label>
                <select name="id_agama" class="form-control" id="" required>
                    <option value="">-- Silakan Pilih --</option>
                    <?php foreach ($agama as $key) : ?>
                        <option value="<?= $key->id ?>"><?= $key->nama_agama ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Pendidikan Terkahir<span style="color:red">*</span></label>
                <select name="id_pendidikan" class="form-control" id="" required>
                    <option value="">-- Silakan Pilih --</option>
                    <?php foreach ($pendidikan as $key) : ?>
                        <option value="<?= $key->id ?>"><?= $key->nama_pendidikan ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Pekerjaan<span style="color:red">*</span></label>
                <select name="id_pekerjaan" class="form-control" id="" required>
                    <option value="">-- Silakan Pilih --</option>
                    <?php foreach ($pekerjaan as $key) : ?>
                        <option value="<?= $key->id ?>"><?= $key->nama_pekerjaan ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Status Pernikahan<span style="color:red">*</span></label>
                <select name="id_pernikahan" class="form-control" id="" required>
                    <option value="">-- Silakan Pilih --</option>
                    <?php foreach ($pernikahan as $key) : ?>
                        <option value="<?= $key->id ?>"><?= $key->nama_pernikahan ?></option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group">
                <label>Keterangan</label>
                <textarea name="keterangan" placeholder="Misalkan : Pindah Keluar, Meninggal, dll" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div class="modal-footer bg-whitesmoke br">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>