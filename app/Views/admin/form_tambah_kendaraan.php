
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                         <div class="container">
    <h1>Formulir Tambah Kendaraan</h1>
    <form>
        <div class="mb-3">
            <label for="jenisKendaraan" class="form-label">Jenis Kendaraan</label>
            <div class="input-group">
              <input type="text" class="form-control" id="jenisKendaraan" name="jenisKendaraan" readonly>
              <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"></button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" onclick="selectDropdownItem('Mobil')">Mobil</a></li>
                <li><a class="dropdown-item" href="#" onclick="selectDropdownItem('Motor')">Motor</a></li>
                <li><a class="dropdown-item" href="#" onclick="selectDropdownItem('Truk')">Truk</a></li>
                <li><a class="dropdown-item" href="#" onclick="selectDropdownItem('Bus')">Bus</a></li>
              </ul>
            </div>
          </div>
      <div class="mb-3">
        <label for="namaModel" class="form-label">Nama Model</label>
        <input type="text" class="form-control" id="namaModel" name="namaModel" placeholder="Masukkan nama model kendaraan">
      </div>
      <div class="mb-3">
        <label for="noPolisi" class="form-label">Nomor Polisi</label>
        <input type="text" class="form-control" id="noPolisi" name="noPolisi" placeholder="Masukkan nomor polisi kendaraan">
      </div>
      <div class="mb-3">
        <label for="noMesin" class="form-label">Nomor Mesin</label>
        <input type="text" class="form-control" id="noMesin" name="noMesin" placeholder="Masukkan nomor mesin kendaraan">
      </div>
      <div class="mb-3">
        <label for="noRangka" class="form-label">Nomor Rangka</label>
        <input type="text" class="form-control" id="noRangka" name="noRangka" placeholder="Masukkan nomor rangka kendaraan">
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