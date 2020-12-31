<form action="<?= base_url("admin/penduduk/insert") ?>" method="POST">
    <div class="modal-body">
        <div class="form-group">
            <label>Warga</label>
            <input type="number" name="warga" id="" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama Lengkap penduduk</label>
            <input type="text" name="nama_lengkap" id="" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Kewarganegaraan</label>
            <select name="kewarganegaraan" class="form-control" id="">
                <option value="WNA">WNA</option>
                <option value="WNI">WNI</option>
            </select>
        </div>
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="jk" class="form-control" id="">
                <option value="0">Perempuan</option>
                <option value="1">Laki-laki</option>
            </select>
        </div>
        <div class="form-group">
            <label>Agama</label>
            <select name="id_agama" class="form-control" id="">
                <option value="">-- Silakan Pilih --</option>
                <?php foreach ($agama as $key) : ?>
                    <option value="<?= $key->id ?>"><?= $key->nama_agama ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label>Pendidikan Terkahir</label>
            <select name="id_pendidikan" class="form-control" id="">
                <option value="">-- Silakan Pilih --</option>
                <?php foreach ($pendidikan as $key) : ?>
                    <option value="<?= $key->id ?>"><?= $key->nama_pendidikan ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label>Pekerjaan</label>
            <select name="id_pekerjaan" class="form-control" id="">
                <option value="">-- Silakan Pilih --</option>
                <?php foreach ($pekerjaan as $key) : ?>
                    <option value="<?= $key->id ?>"><?= $key->nama_pekerjaan ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label>Status Pernikahan</label>
            <select name="id_pernikahan" class="form-control" id="">
                <option value="">-- Silakan Pilih --</option>
                <?php foreach ($pernikahan as $key) : ?>
                    <option value="<?= $key->id ?>"><?= $key->nama_pernikahan ?></option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control" id="" cols="30" rows="10"></textarea>
        </div>
    </div>
    <div class="modal-footer bg-whitesmoke br">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>