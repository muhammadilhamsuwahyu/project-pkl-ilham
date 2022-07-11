<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Menampilkan Data Berdasarkan Tanggal</title>

    <!-- Include file CSS Bootstrap -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Include library Bootstrap Datepicker -->
    <link href="<?php echo base_url('assets/libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css') ?>" rel="stylesheet">

    <!-- Include File jQuery -->
    <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div style="padding: 15px;">
    <h3 style="margin-top: 0;"><b>Laporan PDF Plus Filter Periode Tanggal</b></h3>
        <hr />
        <form method="get" action="<?php echo base_url('index.php/transaksi/index') ?>">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label>Filter Tanggal</label>
                        <div class="input-group">
                            <input type="text" name="tgl_awal" value="<?= @$_GET['tgl_awal'] ?>" class="form-control tgl_awal" placeholder="Tanggal Awal" autocomplete="off">
                            <span class="input-group-addon">s/d</span>
                            <input type="text" name="tgl_akhir" value="<?= @$_GET['tgl_akhir'] ?>" class="form-control tgl_akhir" placeholder="Tanggal Akhir" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" name="filter" value="true" class="btn btn-primary">TAMPILKAN</button>
            <?php
            if(isset($_GET['filter'])) // Jika user mengisi filter tanggal, maka munculkan tombol untuk reset filter
                echo '<a href="'.base_url('index.php/transaksi/index').'" class="btn btn-default">RESET</a>';
            ?>
        </form>

        <hr />
        <h4 style="margin-bottom: 5px;"><b>Data Perizinan</b></h4>
        <?php echo $label ?><br />

        <div class="table-responsive" style="margin-top: 10px;">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No. Register</th>
                        <th>Tanggal Register</th>
                        <th>Nama Lengkap</th>
                        <th>No. Handphone</th>
                        <th>Alamat</th>
                        <th>Nama Perusahaan</th>
                        <th>Lokasi Usaha</th>
                        <th>Kecamatan</th>
                        <th>Kelurahan</th>
                        <th>No. Izin</th>
                        <th>Tanggal Terbit</th>
                        <th>Jenis Perizinan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    if(empty($perizinan)){ // Jika data tidak ada
                        echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
                    }else{ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        foreach($transaksi as $data){ // Looping hasil data transaksi
                            $tgl = date('d-m-Y', strtotime($data->tgl)); // Ubah format tanggal jadi dd-mm-yyyy
                            echo "<tr>";
                            echo "<td>".$no.register."</td>";
                            echo "<td>".$data->tanggal register."</td>";
                            echo "<td>".$data->nama lengkap."</td>";
                            echo "<td>".$data->no.handpone."</td>";
                            echo "<td>".$data->alamat."</td>";
                            echo "<td>".$data->nama perusahaan."</td>";
                            echo "<td>".$data->lokasi usaha."</td>";
                            echo "<td>".$data->nama perusahaan."</td>";
                            echo "<td>".$data->kecamatan."</td>";
                            echo "<td>".$data->kelurahan."</td>";
                            echo "<td>".$data->no. izin."</td>";
                            echo "<td>".$data->tanggal terbit."</td>";
                            echo "<td>".$data->jenis perizinan."</td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

     <!-- Include File JS Bootstrap -->
     <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- Include library Bootstrap Datepicker -->
    <script src="<?php echo base_url('assets/libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js') ?>"></script>
    <!-- Include File JS Custom (untuk fungsi Datepicker) -->
    <script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
    <script>
    $(document).ready(function(){
        setDateRangePicker(".tgl_awal", ".tgl_akhir")
    })
    </script>
</body>
</html>