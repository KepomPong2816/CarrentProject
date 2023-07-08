<!doctype html>
<html lang="en">

<head>
    <?php include(APPPATH . 'Views/spatial/head.php'); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Pembayaran</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
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
        <div class="container">
        <h1>Template Pembayaran</h1>
        <form id="paymentForm">
            <div class="mb-3">
                <label for="paymentMethod" class="form-label">Metode Pembayaran</label>
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Bank Transfer</h5>
                            <p class="card-text">Pilih bank untuk transfer</p>
                            <div class="list-group">
                                <div class="list-group-item">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="paymentMethod"
                                            id="bankOption">
                                        <label class="form-check-label" for="bankOption">
                                            Pilih Bank
                                        </label>
                                    </div>
                                </div>
                                <div class="list-group-item bank-options" style="display: none;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="bank" id="bankMandiri">
                                        <label class="form-check-label" for="bankMandiri">
                                            Bank Mandiri
                                        </label>
                                    </div>
                                </div>
                                <div class="list-group-item bank-options" style="display: none;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="bank" id="bankBRI">
                                        <label class="form-check-label" for="bankBRI">
                                            BRI
                                        </label>
                                    </div>
                                </div>
                                <div class="list-group-item bank-options" style="display: none;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="bank" id="bankBNI">
                                        <label class="form-check-label" for="bankBNI">
                                            BNI
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="bank-details mt-3" style="display: none;">
                                <h6>Nomor Rekening:</h6>
                                <p id="bankAccountNumber"></p>
                                <h6>Tutorial Cara Transfer:</h6>
                                <p id="transferTutorial"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sudah Bayar</button>
        </form>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('bankOption').addEventListener('click', function() {
            document.querySelectorAll('.bank-options').forEach(function(option) {
                option.style.display = 'block';
            });
            document.querySelector('.bank-details').style.display = 'none';
        });

        document.getElementById('bankMandiri').addEventListener('click', function() {
            document.querySelector('.bank-details').style.display = 'block';
            document.getElementById('bankAccountNumber').textContent = '123456789 (Bank Mandiri)';
            document.getElementById('transferTutorial').textContent = 'Cara transfer ke Bank Mandiri:\n\n1. Buka aplikasi mobile banking Bank Mandiri.\n2. Masuk ke menu Transfer.\n3. Pilih transfer ke rekening Bank Mandiri.\n4. Masukkan nomor rekening tujuan dan jumlah transfer.\n5. Konfirmasi transfer dan ikuti petunjuk selanjutnya.'; // Isi dengan tutorial cara transfer Bank Mandiri
        });

        document.getElementById('bankBRI').addEventListener('click', function() {
            document.querySelector('.bank-details').style.display = 'block';
            document.getElementById('bankAccountNumber').textContent = '987654321 (Bank BRI)';
            document.getElementById('transferTutorial').textContent = 'Cara transfer ke Bank BRI:\n\n1. Buka aplikasi mobile banking Bank BRI.\n2. Masuk ke menu Transfer.\n3. Pilih transfer ke rekening Bank BRI.\n4. Masukkan nomor rekening tujuan dan jumlah transfer.\n5. Konfirmasi transfer dan ikuti petunjuk selanjutnya.'; // Isi dengan tutorial cara transfer Bank BRI
        });

        document.getElementById('bankBNI').addEventListener('click', function() {
            document.querySelector('.bank-details').style.display = 'block';
            document.getElementById('bankAccountNumber').textContent = '654321987 (Bank BNI)';
            document.getElementById('transferTutorial').textContent = 'Cara transfer ke Bank BNI:\n\n1. Buka aplikasi mobile banking Bank BNI.\n2. Masuk ke menu Transfer.\n3. Pilih transfer ke rekening Bank BNI.\n4. Masukkan nomor rekening tujuan dan jumlah transfer.\n5. Konfirmasi transfer dan ikuti petunjuk selanjutnya.'; // Isi dengan tutorial cara transfer Bank BNI
        });

        document.getElementById('paymentForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Mencegah pengiriman formulir secara default

            var paymentMethod = document.querySelector('input[name="paymentMethod"]:checked').value;

            if (paymentMethod === 'bank') {
                var bank = document.querySelector('input[name="bank"]:checked').value;

                if (bank === 'mandiri') {
                    window.location.href = 'pembayaran-mandiri.html'; // Ganti 'pembayaran-mandiri.html' dengan URL halaman pembayaran Bank Mandiri
                } else if (bank === 'bri') {
                    window.location.href = 'pembayaran-bri.html'; // Ganti 'pembayaran-bri.html' dengan URL halaman pembayaran Bank BRI
                } else if (bank === 'bni') {
                    window.location.href = 'pembayaran-bni.html'; // Ganti 'pembayaran-bni.html' dengan URL halaman pembayaran Bank BNI
                }
            }
        });
    </script>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>