<!DOCTYPE html>
<html>
<head>
    <title>Peminjaman Ruangan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
    <div class="container" style="margin: 20px;">
        <div class="card">
            <div class="card-header bg-primary">
                <strong>Peminjaman Ruangan</strong>
            </div>
            <div class="card-body">
                <form action="<?php echo base_url(). 'Penyewa/tambah_aksi'; ?>" method="post">
                <div class="form-group">
                    <input required="required" class="form-control" type="hidden" id="id_peminjam" name="id_peminjam" />
                </div>
                <div class="form-group">
                    <label for="noinduk">Nama Penyewa</label>
                    <input required="required" class="form-control" type="text" id="nama_peminjam" name="nama_peminjam" />
                </div>
                <div class="form-group">
                    <label for="noinduk">Alamat</label>
                    <input required="required" class="form-control" type="text" id="alamat" name="alamat" />
                </div>
                <div class="form-group">
                    <label for="noinduk">No. Telepon</label>
                    <input required="required" class="form-control" type="text" id="notelp" name="notelp" />
                </div>
                <div class="form-group">
                    <label for="noinduk">Jenis Kelamin</label>
                    <input required="required" class="form-control" type="text" id="jk" name="jk" />
                </div>
                <div class="form-group">
                    <label for="noinduk">Jabatan</label>
                    <input required="required" class="form-control" type="text" id="jabatan" name="jabatan" />
                </div>
                    <button class="btn btn-success" type="submit" onclick="return confirm('Yakin data anda sudah benar?')">Submit</button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>">Batal</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>