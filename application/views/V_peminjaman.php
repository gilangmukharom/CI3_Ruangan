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
            <a class="btn btn-danger" href="<?php echo base_url('Login/logout/') ?>">logout</a>
            <br></br>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" style="border: 1px solid black;">
                    <thead>
                        <tr>
                            <th style="width: 5%;">No</th>
                            <th style="width: 10%">Nama Peminjam</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Nama Ruangan</th>
                            <th>Tanggal Keperluan/th>
                            <th>Tanggal Pengembalian</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        foreach ($peminjaman as $key => $data) :
                            $no++;
                        ?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['nama_peminjam']; ?></td>
                            <td><?php echo $data['tgl_pengajuan']; ?></td>
                            <td><?php echo $data['nama_ruangan']; ?></td>
                            <td><?php echo $data['tgl_keperluan']; ?></td>
                            <td><?php echo $data['tgl_pengembalian']; ?></td>
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