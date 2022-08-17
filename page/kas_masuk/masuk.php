<?php 
include "../../index.php";
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../plugins/images/favicon.png">
    <!-- Custom CSS -->
   <link href="../../css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
    
    <!-- Preloader - style you can find in spinners.css -->
    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
            
        <div class="container-fluid">
                
            <div class="row">
                <div class="col-sm-12">
                    <div class="white-box">
                        <h3 class="box-title">Basic Table</h3>
                        <p class="text-muted">Add class <code>.table</code></p>
                        <div class="table-responsive">
                            <table class="table text-nowrap">
                                <thead align="center">
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Kode</th>
                                        <th class="border-top-0">Tanggal</th>
                                        <th class="border-top-0">Keterangan</th>
                                        <th class="border-top-0">Jumlah</th>
                                        <th class="border-top-0">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody align="center">
                                    <?php 
                                        $no = 1;
                                        $query = mysqli_query($conn, "SELECT * FROM tb_kas WHERE jenis = 'masuk'");

                                        while($row = mysqli_fetch_assoc($query)):
                                    ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $row["kode"]; ?></td>
                                        <td><?= date("d F Y", strtotime($row["tanggal"])); ?></td>
                                        <td><?= $row["keterangan"]; ?></td>
                                        <td align="right"><?= number_format($row["jumlah"]) . ",-"; ?></td>
                                        <td>
                                        <a href="" class="btn btn-warning">Edit</a>
                                        <a href="" class="btn btn-danger text-white">Hapus</a>
                                        </td>
                                    </tr>
                                    <?php 
                                        $total = $total + $row["jumlah"];
                                        endwhile; 
                                    ?>
                                </tbody>
                                <tr>
                                    <th colspan="4" style="font-size: 17px; text-align: center;">Total Kas Masuk</th>
                                    <td align="right" style="font-size: 17px;" class="fw-bold"><?= "Rp." . number_format($total) . ",-"; ?></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
        </div>
    </div>
    <script src="../../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../../bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../js/app-style-switcher.js"></script>
    <!--Wave Effects -->
    <script src="../../js/waves.js"></script>
    <!--Custom JavaScript -->
    <script src="../../js/custom.js"></script>
</body>

</html>