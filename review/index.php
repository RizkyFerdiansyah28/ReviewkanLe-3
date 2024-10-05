<?php 

session_start();



if(!isset($_SESSION["login"])){
    include 'layout/header-guest.php';
} else include 'layout/header.php';


?>


<section class="py-5 text-center container">
    <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">Jelajahi Film Terbaru</h1>
            <p class="lead text-body-secondary">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                Reprehenderit perspiciatis nemo, fugit ea molestias, dolor vitae
                quae ab consectetur pariatur temporibus totam laudantium esse
                dignissimos cum recusandae commodi itaque delectus obcaecati dicta
                aliquid? Laboriosam, incidunt animi dignissimos maiores inventore
                nostrum vitae distinctio nisi fuga quibusdam placeat sit facilis
                possimus voluptatum.
            </p>
            <p>
                <a href="#" class="btn btn-primary my-2">Terbaru</a>
                <a href="#" class="btn btn-secondary my-2">Terbaik</a>
            </p>
        </div>
    </div>
</section>

<main>
    <div class="container">
        <div class="album py-3 bg-body-tertiary">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    <div class="col">
                        <div class="card shadow-sm">
                            <?php foreach ($data_review as $review) : ?>
                            <img src="./foto/foto-film/<?= $review['foto_film']; ?>"
                                class="bd-placeholder-img card-img-top" width="100%" height="225" alt="" srcset="" />
                            <div class="card-body">
                                <h1><?= $review['judul_film']; ?></h1>
                                <p class=" card-text">

                                    <?= $review['ulasan']; ?>
                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm">
                                            <a href="detail-review.php?id_review=<?= $review['id_review']; ?>">baca
                                                selengkapnya</a>
                                        </button>
                                    </div>
                                    <small
                                        class="text-body-secondary"><?= date('d F Y', strtotime($review['tanggal'])); ?></small>
                                </div>
                                <?php  endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>