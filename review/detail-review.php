<?php 

session_start();

if(!isset($_SESSION["login"])){
    include 'layout/header-guest.php';
} else include 'layout/header.php';

        if (isset($_GET['id_review'])) {
            $id_review = (int)$_GET['id_review'];
        } else {
            echo "<script>
                    alert('ID review tidak ditemukan');
                    document.location.href = 'index.php';
                  </script>";
            exit;
        }

        $review = select("SELECT * FROM review_film WHERE id_review = $id_review")[0];
        
?>

<div class="container p-5 my-5">
    <h1><?= $review['judul_film']; ?></h1>
    <h3>Penulis</h3>
    <h4><?= $review['genre']; ?></h4>
    <img src="./foto/foto-film/<?= $review['foto_film']; ?>" class="my-3" alt="" />
    <p>
        <?= $review['ulasan']; ?>
    </p>
    <p>Rating: <?= $review['rating']; ?> </p>
    <button class="btn btn-primary">
        <a href="tambah-review.php" style="color: aliceblue;">Berikan Review Anda</a>
    </button>
</div>