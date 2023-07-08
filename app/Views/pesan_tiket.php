
<div class="col mt-5">
    <div class="row">
        <ul class="nav nav-tabs " id="myTab" role="tablist">
            <li class="nav-item " role="presentation">
                <button class="nav-link nav-outline-primary w-100 m-8" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
            </li>
            <li class="nav-item " role="presentation">
                <button class="nav-link nav-outline-primary w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-outline-primary w-100" id="messages-tab" data-bs-toggle="tab" data-bs-target="#messages" type="button" role="tab" aria-controls="messages" aria-selected="false">Messages</button>
            </li>
        </ul>
    </div>
    <!-- Tab panes -->
    <div class="tab-content mt-2 ">
        <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="card-body">
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <div class="col-11">
                                <div class="d-block">
                                    <label for="inputState" class="form-label">Lokasi Rental</label>
                                    <select id="inputState" class="form-select">
                                        <option selected></option>
                                        <option>Jakarta</option>
                                        <option>Bandung</option>
                                        <option>Yogyakarta</option>
                                        <option>Surabaya</option>
                                        <option>Semarang</option>
                                        <option>Malang</option>
                                        <option>Bogor</option>
                                        <option>Solo</option>
                                    </select>
                                </div>
                                <div class="d-block ">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Kota Tujuan</label>
                                        <input type="text " class="form-control " id="formGroupExampleInput" placeholder="Lokasi Tempat Tujuan Anda">
                                    </div>
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="garis">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-11">
                                <div class="d-block">
                                    <label for="form-availability-from">Check-In<small class="text-danger">*</small></label>
                                    <input type="text" value="" class="form-control rounded text-left required" id="form-availability-from" name="form-availability-from" placeholder="MM/DD/YYYY">
                                </div>
                                <div class="d-block ">
                                    <div class="mb-3">
                                        <label for="formGroupExampleInput" class="form-label">Durasi</label>
                                        <input type="text " class="form-control " id="formGroupExampleInput" placeholder="Durasi">
                                    </div>
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="garis">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-block">
                                    <label for="inputState" class="form-label">Lokasi Rental</label>
                                    <select id="inputState" class="form-select">
                                        <option selected></option>
                                        <option>Jakarta</option>
                                        <option>Bandung</option>
                                        <option>Yogyakarta</option>
                                        <option>Surabaya</option>
                                        <option>Semarang</option>
                                        <option>Malang</option>
                                        <option>Bogor</option>
                                        <option>Solo</option>
                                    </select>
                                </div>
                                <div class="d-block m-4">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <a class="btn btn-primary" type="button" href="<?= base_url('pesan_mobil') ?>">Pesan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>