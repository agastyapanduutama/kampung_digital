<div class="card">
    <div class="card-header">
        <h4><?= $title ?></h4>
        <div class="card-header-form">

            <a href="<?= base_url('admin/penduduk/tambah') ?>" class="btn btn-primary float-right">Tambah
                Data</a>
        </div>
    </div>
</div>

<div class="card">

    <?php if ($this->session->flashdata('success')) { ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php } elseif ($this->session->flashdata('failed')) { ?>
        <div class="alert alert-warning">
            <?php echo $this->session->flashdata('failed'); ?>
        </div>
    <?php } ?>

    <div class="card-body">
        <div class="table-responsive ">
            <table id="example1" class="tableNa table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>RT</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>Pekerjaan</th>
                        <th>Pendidikan</th>
                        <th>Agama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php $no = 1;
                    foreach ($data as $key) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $key->warga ?></td>
                            <td><?= $key->nama_lengkap ?></td>
                            <td><?php
                                $jk = ($key->jk == 1) ? "Laki-laki" : "Perempuan";
                                echo $jk;
                                ?></td>
                            <td><?= $key->nama_pekerjaan ?></td>
                            <td><?= $key->nama_pendidikan ?></td>
                            <td><?= $key->nama_agama ?></td>
                            <td>
                                <a href="<?= base_url("admin/penduduk/delete/" . $this->req->acak($key->id)) ?>" class="btn btn-danger btn-sm" id="delete" onclick="return confirm('Apakah anda yakin ingin menghapus data ini??');" title="Hapus Data"><i class="fas fa-trash-alt"></i></a>

                                <a href="<?= base_url("admin/penduduk/edit/" . $this->req->acak($key->id)) ?>" class="btn btn-warning btn-sm" id="edit" title="Edit data"><i class="fas fa-pencil-alt"></i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
</div>