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
            <a class="btn btn-success" href="<?php echo base_url('C_ruangan/index/') ?>">Data Ruangan</a>
            <a class="btn btn-success" href="<?php echo base_url('Peminjaman/index/') ?>">Data Peminjaman Ruangan</a>
            <a class="btn btn-success" href="<?php echo base_url('Penyewa/index/') ?>">Data Penyewa</a>
            <a class="btn btn-success" href="<?php echo base_url('Penyewa/tambahData/') ?>">Tambah Data Penyewa</a>
            <a class="btn btn-danger" href="<?php echo base_url('Login/logout/') ?>">Logout</a>
            <br></br>
            <div class="table-responsive">
                <table class="table table-striped table-bordered" style="border: 1px solid black;">
                    <thead>
                        <tr>
                            <th style="width: 5%;">No</th>
                            <th style="width: 10%">Nama Penyewa</th>
                            <th>Alamat</th>
                            <th>No.Telepon</th>
                            <th>Jenis Kelamin</th>
                            <th>Jabatan</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $no=0;
                            foreach ($peminjam as $key => $data):
                                $no++;
                         ?>
                         <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $data['nama_peminjam']; ?></td>
                            <td><?php echo $data['alamat']; ?></td>
                            <td><?php echo $data['notelp']; ?></td>
                            <td><?php echo $data['jk']; ?></td>
                            <td><?php echo $data['jabatan']; ?></td>
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