<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Cek Transaksi | RaskiStore</title>
</head>

<body>
    <div class="container mt-3">
        <h2 class="text-center">Cek Transaksi</h2>
        <form class="col-lg-6">
            <div class="mb-3">
                <label for="keyword" class="form-label">Kata Kunci </label>
                <input type="text" class="form-control" name="keyword" id="keyword">
                <div class="mt-3">
                    <button type="button" id="btn-search">Cari</button>
                    <a href="">Ulangi</a>
                </div>

            </div>

        </form>
        <div class="mt-3 col-lg-10" id="hasil">

            <?php $this->load->view('tabel', ['trans' => $datas]);
            ?>

        </div>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <script>
        var baseurl = "<?php echo base_url("index.php/"); ?>";
    </script>
    <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script>
    <script src="<?php echo base_url("assets/trans.js"); ?>"></script>


</body>

</html>