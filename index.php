<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
    .product-card {
        text-decoration: none;
        color: inherit;
    }

    .product-card:hover {
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        transform: translateY(-2px);
        transition: 0.3s;
    }

    .location-icon {
        color: #00b14f;
    }

    .star-icon {
        color: #fbbc05;
    }

    .card-img-top {
        height: 160px;
        object-fit: cover;
    }
    </style>
</head>

<body>

    <?php require "layouts/header.php" ?>

    <div class="container mt-4">
        <div class="row g-3">

            <!-- Card 1 -->
            <div class="col-md-4">
                <a href="detailProduk.php" class="product-card">
                    <div class="card h-100  shadow">
                        <img src="https://via.placeholder.com/400x300" class="card-img-top" alt="Produk 1">
                        <div class="card-body">
                            <h6 class="card-title mb-1">Lanyard Tali Paragon - Lanyard Tactical - ...</h6>
                            <p class="fw-bold text-danger mb-1">Rp262.500</p>
                            <p class="mb-1"><i class="bi bi-geo-alt-fill location-icon"></i> Kota Depok</p>
                            <p class="mb-1">
                                <i class="bi bi-star-fill star-icon"></i> 5.0 | 11 terjual
                            </p>
                            <small class="text-muted">Tiba 25 - 28 Jun</small>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>

    <?php require "layouts/footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>