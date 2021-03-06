<?php include 'header.php' ?>
<div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('<?php echo base_url('assets/img/head_manfaat1.jpg') ?>')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <h1 class="title-modern">Manfaat Pangan Lokal</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="section" id="berita">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2><?php echo $dataManfaat->judul ?></h2>
                    <div class="separator separator-danger">✻</div>
                    <p>
                        <a href="#" class="btn btn-social btn-facebook btn-simple">
                            <i class="fa fa-pencil"></i> <?php echo $dataManfaat->author ?>
                        </a>
                        </a>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9">
                    <img src="<?php echo base_url('assets/img/'.$dataManfaat->foto) ?>" class="artikel" alt="">
                    <div class="card-body">
                            <?php echo $dataManfaat->deskripsi ?>
                    </div> 
                </div>
                <div class="col-md-3">
                    <?php foreach($dataManfaat as $row): ?>
                    <img src="<?php echo base_url('assets/img/'.$dataManfaat->foto) ?>" class="artikel" alt="aaaa">
                    <div class="card-body">
                        <h4 class="card-title"><?php echo $dataManfaat->judul ?></h3>
                        <a href="<?php echo site_url('Manfaat/tampil'.$dataManfaat->kode_manfaat) ?>" class="card-text">Selengkapnya..</p>
                    </div>
                    <hr>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
<?php include 'footer.php' ?>