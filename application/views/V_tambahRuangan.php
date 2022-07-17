<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Ruangan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</head>

<body>
    <div class="container" style="margin: 20px;">
        <div class="card">
            <div class="card-header bg-primary">
                <strong>Tambah Data Ruangan</strong>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url() . 'C_ruangan/tambah_aksi'; ?>" method="post">
                    <div class="form-group">
                        <input required="required" class="form-control" type="hidden" id="id_ruangan"
                            name="id_ruangan" />
                    </div>
                    <div class="form-group">
                        <label for="noinduk">Nama Ruangan</label>
                        <input required="required" class="form-control" type="text" id="nama_ruangan"
                            name="nama_ruangan" />
                    </div>
                    <div class="form-group">
                        <label for="noinduk">Kapasitas</label>
                        <input required="required" class="form-control" type="number" id="kapasitas" name="kapasitas" />
                    </div>
                    <div class="form-group">
                        <label for="noinduk">Deskripsi</label>
                        <input required="required" class="form-control" type="text" id="deskripsi" name="deskripsi" />
                    </div>
                    <div class="form-group">
                        <label for="noinduk">Status Ruangan</label>
                        <input required="required" class="form-control" type="text" id="status_ruangan"
                            name="status_ruangan" />
                    </div>
                    <button class="btn btn-success" type="submit"
                        onclick="return confirm('Yakin data anda sudah benar?')">Submit</button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>