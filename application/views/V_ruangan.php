<!DOCTYPE html>
<html>

<head>
    <title>RWEB</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
</head>

<body>
    <div class="container">

        <div class="card bg-primary">
            <div class="card-header"><strong>Sistem Peminjaman Ruangan</strong></div>
        </div>
        <div style="margin-top: 10px;">
            <a class="btn btn-success" href="<?php echo base_url('C_ruangan/tambahData/') ?>">Tambah Data Ruangan</a>
            <a class="btn btn-danger" href="<?php echo base_url('Login/logout/') ?>">logout</a>
            <br></br>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" style="border: 1px solid black;">
                    <thead>
                        <tr>
                            <th style="width: 5%;">No</th>
                            <th style="width: 10%">Nama Ruangan</th>
                            <th>Kapasitas</th>
                            <th>Deskripsi</th>
                            <th>Status Ruangan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($ruangan as $key => $data) :
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['nama_ruangan']; ?></td>
                            <td><?php echo $data['kapasitas']; ?></td>
                            <td><?php echo $data['deskripsi']; ?></td>
                            <td><?php echo $data['status_ruangan']; ?></td>
                            <td><span><a class="btn btn-primary"
                                        href="<?php echo base_url('C_ruangan/editData/' . $data['id_ruangan']) ?>">Edit</a>
                                    <a class="btn btn-danger"
                                        href="<?php echo base_url('C_ruangan/deleteData/' . $data['id_ruangan']) ?>">Delete</a>
                                </span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </form>
    </div>
    </div>
    </div>


</body>

</html>