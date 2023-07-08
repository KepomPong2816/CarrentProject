<!doctype html>
<html lang="en">

<head>
    <?php include(APPPATH . 'Views/spatial/head.php'); ?>
</head>

<body>
    <main>
        <?php include(APPPATH . 'Views/spatial/navbar.php'); ?>

        <!--buka isi -->
        <div class="container mt-5">
            <div class="row">
                <div class="col text-center p-0">
                    <a type="button" class="w-100 btn btn-lg btn-outline-primary p-10 m-10" href="<?= base_url('sewa_mobil') ?>">Pilih</a>
                </div>
                <div class="col text-center p-0">
                    <a type="button" class="w-100 btn btn-lg btn-outline-primary p-10 m-10" href="<?= base_url('pesan_mobil') ?>">Pesan</a>
                </div>
                <div class="col text-center p-0">
                    <a type="button" class="w-100 btn btn-lg btn-outline-primary p-10 m-10" href="<?= base_url('bayar_pesanan') ?>">Bayar</a>
                </div>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-1 mb-1">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm text-center">
                    <div class="card-header py-3">
                        <h1 class="my-0 fw-normal">Formulir Data</h1>
                    </div>
                </div>
                <div class="card-body">
                    <div class="container -m-2">
                        <form>
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="name" placeholder="Masukkan nama">
                            </div>
                            <div class="mb-3">
                                <label for="nik" class="form-label">NIK</label>
                                <input type="text" class="form-control" id="nik" placeholder="Masukkan NIK">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control" id="phone" placeholder="Masukkan nomor telepon">
                            </div>
                            <div class="mb-3">
                                <label for="ktpImage" class="form-label">Upload Gambar KTP</label>
                                <input type="file" class="form-control" id="ktpImage">
                            </div>
                            <a type="button" class="btn btn-primary" href="<?= base_url('bayar_pesanan') ?>">Submit</a>
                        </form>
                    </div>

                    <!-- Bootstrap JS -->
                    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
                </div>
            </div>
        </div>

        </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>