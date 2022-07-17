<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Ruangan</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</head>
<body>
    <div class="container" style="margin: 20px;">
        <div class="card">
            <div class="card-header bg-primary">
                <strong>Edit Data Ruangan</strong>
            </div>
            <div class="card-body">
                <?php foreach ($ruangan_edit as $key => $data):
                    ?>
                <form method="post" action="<?php echo base_url('C_ruangan/updateData/'.$data['id_ruangan']) ?>">
                    <div class="form-group">
                        <label for="nama">Nama Ruangan</label>
                        <input type="text" name="nama_ruangan" id="nama_ruangan" class="form-control" value="<?php echo $data['nama_ruangan'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="hobi">Kapasitas</label>
                        <input type="text" name="kapasitas" id="kapasitas" class="form-control" value="<?php echo $data['kapasitas'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="alamat">Deskripsi</label>
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control" value="<?php echo $data['deskripsi'] ?>" />
                    </div>
                    <div class="form-group">
                        <label for="alamat">Status Ruangan</label>
                        <input type="text" name="status_ruangan" id="status_ruangan" class="form-control" value="<?php echo $data['status_ruangan'] ?>" />
                    </div>
                    <button class="btn btn-success" type="submit" onclick="return confirm('Yakin data anda sudah benar?')">Submit</button>
                    <a class="btn btn-danger" href="<?php echo base_url() ?>">Batal</a>
                </form>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>