<?php include"header.php" ;?>    
    <div class="section section-header">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('<?php echo base_url('assets/img/head.jpg'); ?>')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <p>Pil Pangkal</p>
                        <h2 class="title-modern">Pilih Pangan Lokal</h2>
                        <h3>Lebih dekat dengan Pangan Lokal Indonesia!</h3>
                        <div class="separator line-separator">♦</div>
                    </div>

                    <div class="button-get-started">
                        <a href="#berita" class="btn btn-danger btn-fill btn-lg ">
                            Lebih Dekat
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!--BERITA-->

    <div class="section" id="berita">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Berita Pangan Lokal Kita!</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">Berita terkini pangan lokal yang bisa diikuti setiap harinya!</p>
                </div>
            </div>
            <div class="row">
                <?php foreach($dataBerita as $row): ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/'.$row->foto);?>" class="card-img-top" alt="aaaa">
                         <div class="card-body" style="padding: 10px;">
                            <h3 class="card-title"><?php echo $row->judul ?></h3>
                            <p class="card-text" style="white-space: nowrap; width: 300px; overflow: hidden; text-overflow: ellipsis;"><?php echo $row->deskripsi ?></p>
                            <div class="text-right">
                                <a href="<?php echo site_url('Artikel_Berita/tampil/'.$row->kode_berita) ?>"><button class="btn btn-danger btn-fill">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>


    <div class="section section-our-team-freebie">
        <div class="parallax filter filter-color-black">
            <div class="image" style="background-image:url('<?php echo base_url('assets/img/head2.jpg'); ?>')"></div>
            <div class="container">
                <div class="content">
                    <div class="row">
                        <div class="title-area">
                            <h2>Manfaat Pangan Lokal Indonesia</h2>
                            <div class="separator separator-danger">✻</div>
                            <p class="description">Mari menjelajah berbagai manfaat hasil bumi Indonesia!</p>
                        </div>
                    </div>

                    <div class="row" style="color: black;">
                        <?php foreach($dataManfaat as $row): ?>
                        <div class="col-md-4">
                            <div class="card">
                                <img src="<?php echo base_url('assets/img/'.$row->foto); ?>" class="card-img-top" alt="aaaa">
                                <div class="card-body" style="padding: 10px;">
                                    <h3 class="card-title"><?php echo $row->judul ?></h3>
                                    <p class="card-text" style="white-space: nowrap; width: 300px; overflow: hidden; text-overflow: ellipsis;"><?php echo $row->deskripsi ?></p>
                                    <div class="text-right">
                                        <a href="<?php echo site_url('Artikel_Manfaat/tampil/'.$row->kode_manfaat) ?>"><button class="btn btn-danger btn-fill">Selengkapnya</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>     
                    </div>               
                </div>
            </div>
        </div>
    </div>


    <div class="section section-our-clients-freebie">
        <div class="container">
            <div class="title-area">
                <h5 class="subtitle text-gray">Cita rasa</h5>
                <h2>Kreasi olahan Pangan Lokal Indonesia</h2>
                <div class="separator separator-danger">∎</div>
            </div>

            <div class="row">
                <?php foreach($dataResep as $row): ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/'.$row->foto); ?>" class="card-img-top" alt="aaaa">
                         <div class="card-body" style="padding: 10px;">
                            <h3 class="card-title"><?php echo $row->judul ?></h3>
                            <p class="card-text" style="white-space: nowrap; width: 300px; overflow: hidden; text-overflow: ellipsis;"><?php echo $row->deskripsi ?></p>
                            <div class="text-right">
                                <a href="<?php echo site_url('Artikel_Resep/tampil/'.$row->kode_resep) ?>"><button class="btn btn-danger btn-fill">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>                
            </div>
        </div>
    </div>

    <?php include"footer.php"; ?>