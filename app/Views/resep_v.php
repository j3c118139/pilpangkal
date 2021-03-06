<?php include"header.php"?>
    <div class="section section-small section-get-started">
        <div class="parallax filter">
            <div class="image"
                style="background-image: url('<?php echo base_url('assets/img/head_resep1.jpg');?>')">
            </div>
            <div class="container">
                <div class="content">
                    <div class="title-area">
                        <h1 class="title-modern">Resep Pangan Lokal</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="section">
        <div class="container">
            <div class="row">
                <div class="title-area">
                    <h2>Resep olahan Pangan Lokal Kita</h2>
                    <div class="separator separator-danger">✻</div>
                    <p class="description">Kreasi olahan Pangan Lokal Indonesia!</p>
                    <?php 
                    if (!empty($isLogin)) 
                    {
                    ?> 
                        <a href="<?php echo site_url('Resep/add');?>" type="btn btn-primary">Upload Resep Pangan Lokal</a>
                    <?php }?>
                </div>
            </div>
            <div class="row">
                <?php foreach($dataResep as $row): ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo base_url('assets/img/'.$row->foto);?>" class="card-img-top" alt="aaaa">
                         <div class="card-body" style="padding: 10px;">
                            <h3 class="card-title"><?php echo $row->judul; ?></h3>
                            <p class="card-text" style="white-space: nowrap; width: 300px; overflow: hidden; text-overflow: ellipsis;"><?php echo $row->deskripsi; ?></p>
                            <div class="text-right">
                                <a href="<?php echo site_url('Artikel_Resep/tampil/'.$row->kode_resep) ?>"><button class="btn btn-danger btn-fill">Selengkapnya</button></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>                            
            </div>
            <nav aria-label="Page navigation example">
                  <ul class="pagination">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
        </div>
</div>

<?php include"footer.php" ?>