<?php include'admin_header.php';?>
            <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Admin</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="<?php echo site_url('Admin'); ?>">Beranda</a></li>
                            <li class="active">Admin</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <br>
                    <br>
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Data Admin</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>ID Admin</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($dataAdmin as $row): ?>
                                        <tr>
                                            <td></td>
                                            <td><?php echo $row->kode_admin ?></td>
                                            <td><?php echo $row->nama ?></td>
                                            <td><?php echo $row->email ?></td>
                                            <td><?php echo $row->username ?></td>
                                            <td><?php echo $row->password ?></td>
                                            <td>
                                                <a class="fa fa-edit btn btn-success" href="<?php echo site_url('Admin/edit/'.$row->kode_admin) ?>" ></a>
                                                <a class="fa fa-trash-o btn btn-danger" onclick="return confirm('Apakah anda yakin?')" href="<?php echo site_url('Admin/delete/'.$row->kode_admin); ?>"></a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> </footer>
        </div>
        <!-- /#page-wrapper -->

<?php include'admin_footer.php'; ?>