<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sales</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">

    <!-- Logo -->
    <link rel="icon" href="images/Ximi Store (New Logo).png" type="image/x-icon">
</head>

<body>
    <header class="main-header">
        <h1>Customer API</h1>
        <small class="text-danger">Selamat datang di Customer App sebagai penyedia API</small>
    </header>

    <main class="container">
    <!-- row bagian bawah -->
    <div class="row">
        <div class="col">
        <section class="card" >
            <img src="images/money-transfer.svg" alt="" />
            <div>
                <h3 class="text-danger">Transaksi</h3>
                <p style="text-align:justify;">
                    <span class="text-danger">Pesanan</span> adalah permintaan hendak membeli (supaya dikirim, dibuatkan dan sebagainya).
                    Arti lainnya dari <span class="text-danger">pesanan</span>
                    adalah barang yang dipesan. Contoh: jumlah dan mutu barang itu tidak sesuai dengan pesanan.
                </p>
                <a href="api/transaksi" class="btn btn-danger">Get API</a>
                <a href="{{route('transaksi')}}" class="btn btn-danger">CRUD Action</a>
            </div>
        </section>
        </div>
        <div class="col">
        <section class="card">
            <img src="images/rating.svg" alt="" />
            <div>
                <h3 style='color: #6610f2;'>Customer</h3>
                <p style="text-align:justify;">
                    <span class="text-danger">Pesanan</span> adalah permintaan hendak membeli (supaya dikirim, dibuatkan dan sebagainya).
                    Arti lainnya dari <span class="text-danger">pesanan</span>
                    adalah barang yang dipesan. Contoh: jumlah dan mutu barang itu tidak sesuai dengan pesanan.
                </p>
                <a href="api/customer" class="btn" style="background-color:#6610f2;">Get API</a>
                <a href="{{route('customer')}}" class="btn" style="background-color:#6610f2;">CRUD Action</a>
            </div>
        </section>
        </div>
        <div class="col">
        <section class="card">
            <img src="images/review.svg" alt="" />
            <div>
                <h3 style='color: #fd7e14;'>Komplain</h3>
                <p style="text-align:justify;">
                    <span style='color: #fd7e14;'>Penjual</span> adalah Orang yang menjual barang / jasa nya ke <span style='color: #6610f2;'> Konsumen / pembeli</span>.
                    Dan <span style='color: #fd7e14;'>penjual</span> mempertemukan dengan <span style='color: #6610f2;'>pembeli</span>.
                </p>
                <a href="api/komplain" class="btn" style="background-color:#fd7e14;">Get API</a>
                <a href="{{route('komplain')}}" class="btn" style="background-color:#fd7e14;">CRUD Action</a>
            </div>
        </section>
        </div>
    </div>

    <!-- row bagian bawah -->
    <div class="row">
        <div class="col">
        <section class="card">
            <img src="images/employee.svg" alt="" />
            <div>
                <h3 class="text-success">Pegawai</h3>
                <p style="text-align:justify;">
                    <span class="text-success">Produk</span> secara umum adalah segala sesuatu yang mampu dihasilkan dari proses produksi berupa
                    <span class="text-success">barang</span> ataupun <span class="text-success">jasa</span> yang nantinya bisa diperjualbelikan di pasar.
                </p>
                <a href="api/pegawai" class="btn btn-success">Get API</a>
                <a href="{{route('pegawai')}}" class="btn btn-success">CRUD Action</a>
            </div>
        </section>
        </div>
        <div class="col">
        <section class="card">
            <img src="images/trolley.svg" width="200" alt="" />
            <div>
                <h3 class="text-warning">Barang</h3>
                <p style="text-align:justify;">
                    <span class="text-warning">Produk</span> secara umum adalah segala sesuatu yang mampu dihasilkan dari proses produksi berupa
                    <span class="text-warning">barang</span> ataupun <span class="text-warning">jasa</span> yang nantinya bisa diperjualbelikan di pasar.
                </p>
                <a href="api/barang" class="btn btn-warning">Get API</a>
                <a href="{{route('barang')}}" class="btn btn-warning">CRUD Action</a>
            </div>
        </section>
        </div>
        <div class="col">
        <section class="card">
            <img src="images/delivery-truck.svg" alt="" />
            <div>
                <h3 class="text-primary">Pengiriman</h3>
                <p style="text-align:justify;">
                    <span class="text-primary">Produk</span> secara umum adalah segala sesuatu yang mampu dihasilkan dari proses produksi berupa
                    <span class="text-primary">barang</span> ataupun <span class="text-primary">jasa</span> yang nantinya bisa diperjualbelikan di pasar.
                </p>
                <a href="api/pengiriman" class="btn btn-primary">Get API</a>
                <a href="{{route('pengiriman')}}" class="btn btn-primary">CRUD Action</a>
            </div>
        </section>
        </div>
    </div>
    </main>
    <p class="text-secondary" style="text-align:center;">author by difgam</p>
</body>

</html>