
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <div class="container">
                        <h1>Formulir Sopir</h1>
                        <form>
                          <div class="mb-3">
                            <label for="kodeTransaksi" class="form-label">Kode Transaksi</label>
                            <input type="text" class="form-control" id="kodeTransaksi" name="kodeTransaksi" placeholder="Masukkan kode transaksi">
                          </div>
                          <div class="mb-3">
                            <label for="idPelanggan" class="form-label">ID Pelanggan</label>
                            <input type="text" class="form-control" id="idPelanggan" name="idPelanggan" placeholder="Masukkan ID pelanggan">
                          </div>
                          <div class="mb-3">
                            <label for="kodeKendaraan" class="form-label">Kode Kendaraan</label>
                            <input type="text" class="form-control" id="kodeKendaraan" name="kodeKendaraan" placeholder="Masukkan kode kendaraan">
                          </div>
                          <div class="mb-3">
                            <label for="tanggalPemesanan" class="form-label">Tanggal Pemesanan</label>
                            <input type="date" class="form-control" id="tanggalPemesanan" name="tanggalPemesanan">
                          </div>
                          <div class="mb-3">
                            <label for="tanggalStart" class="form-label">Tanggal Start</label>
                            <input type="date" class="form-control" id="tanggalStart" name="tanggalStart">
                          </div>
                          <div class="mb-3">
                            <label for="tanggalEnd" class="form-label">Tanggal End</label>
                            <input type="date" class="form-control" id="tanggalEnd" name="tanggalEnd">
                          </div>
                          <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <input type="text" class="form-control" id="status" name="status" placeholder="Masukkan status">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                      </div>

                    </div>

                   
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function selectDropdownItem(item) {
          document.getElementById('jenisKendaraan').value = item;
        }
      </script>
</body>

</html>