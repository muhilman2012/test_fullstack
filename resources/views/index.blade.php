<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <title>Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Test</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Produk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Masuk</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <main>
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Selamat Datang di Toko Online Kami</h1>
                        <p>Temukan produk-produk terbaik dari kami.</p>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4" v-for="product in products" :key="product.id">
                        <div class="card">
                            <img :src="product.image" class="card-img-top" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title"> product.name </h5>
                                <p class="card-text"> product.description </p>
                                <p class="card-text"> product.price </p>
                                <a href="#" class="btn btn-primary">Tambahkan ke Keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11/dist/vue.min.js"></script>
    <script>
        new Vue({
            el: "#app",
            data: {
                products: [
                    {
                        id: 1,
                        name: "Produk 1",
                        description: "Deskripsi Produk 1",
                        price: "Rp. 100.000",
                        image: "https://via.placeholder.com/150"
                    },
                    {
                        id: 2,
                        name: "Produk 2",
                        description: "Deskripsi Produk 2",
                        price: "Rp. 200.000",
                        image: "https://via.placeholder.com/150"
                    },
                    {
                        id: 3,
                        name: "Produk 3",
                        description: "Deskripsi Produk 3",
                        price: "Rp. 300..000",
                        image: "https://via.placeholder.com/150"
                    }]
                    }
                });
    </script>
    </body>
</html>