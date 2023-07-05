<!doctype html>
<html lang="en">

<head>
    <?php include(APPPATH . 'Views/spatial/head.php'); //head?>
</head>

<body>
    <main>
        <?php include(APPPATH . 'Views/spatial/navbar2.php'); //navbar?>
        <div class="container mt-5">
            <div class="row ">
                <div class="col text-center p-0">
                    <a type="button" class="w-100 btn btn-lg btn-outline-primary p-10 m-10 "
                        href="#">Pilih</a>
                </div>
                <div class="col text-center p-0">
                    <a type="button" class="w-100 btn btn-lg btn-outline-primary p-10 m-10"
                        style='cursor:not-allowed'>Pesan</a>
                </div>
                <div class="col text-center p-0">
                    <a type="button" class="w-100 btn btn-lg btn-outline-primary p-10 m-10"
                        style='cursor:not-allowed'>Bayar</a>
                </div>
            </div>
        </div>
        <!-- List Mobil -->
        <div class="row row-cols-1 row-cols-md-2 mb-2 m-2">
            <!-- FIlter grid-->
            <div class="col-3">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal text-center">Fillter</h4>
                    </div>
                    <div class="card-body p-3">
                        <h1 class="card-title pricing-card-title">Fasilitas</h1>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                AC
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Tanpa AC
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <!-- List_Mobil -->
            <div class="col-9">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                        <h4 class="my-0 fw-normal text-center">Jenis Mobil</h4>
                    </div>
                    <!-- List_Mobil -->
                    <!-- ?php for($datadatabase as $data) { ?>
                        <div>$data</div>
                    ?php } ?> -->
                    <div class="col-12">
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">CIVIC</h1>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <img src="./img/listmobil/civic.png" class="img-thumbnail" width="300px">
                                    </div>
                                    <div class="col">
                                        <ul class="list-unstyled mt-3 mb-4 ">
                                            <li>20 users included</li>
                                            <li>10 GB of storage</li>
                                            <li>Priority email support</li>
                                            <li>Help center access</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a class="btn btn-primary" type="button"
                                        href="<?= base_url('pesan_mobil') ?>">Pesan</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">CIVIC</h1>
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                        <img src="./img/listmobil/civic.png" class="img-thumbnail" width="300px">
                                    </div>
                                    <div class="col">
                                        <ul class="list-unstyled mt-3 mb-4 ">
                                            <li>20 users included</li>
                                            <li>10 GB of storage</li>
                                            <li>Priority email support</li>
                                            <li>Help center access</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <a class="btn btn-primary" type="button"
                                        href="<?= base_url('pesan_mobil') ?>">Pesan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php include(APPPATH . 'Views/spatial/footer.php'); //footer?>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>