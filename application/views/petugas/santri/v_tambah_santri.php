<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Data Santri</h4>
                            <hr>
                            <form class="forms-sample" action="<?php echo base_url('santri/proses_tambah'); ?>" method="post" enctype="multipart/form-data" role="form">

                                <div class="form-group">
                                    <label for="exampleInputName1">No Anggota</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="No Anggota" name="no_anggota">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Bin / Binti</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Bin / Binti" name="bin_binti">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Alamat</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat" name="alamat">
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Jenis Kelamin</label>
                                        <select class="form-control" id="exampleSelectGender" name="jenis_kelamin">
                                            <option selected disabled>Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Nomor HP</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nomor HP" name="no_hp">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Email</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Email" name="email">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="exampleInputName1" placeholder="Tanggal Lahir" name="ttl">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Madrasah</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Madrasah" name="madrasah">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Alamat Sekarang</label>
                                        <textarea class="form-control" id="exampleTextarea1" rows="4" name="alamat_sekarang"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Tanggal Daftar</label>
                                        <input type="date" class="form-control" id="exampleInputName1" placeholder="Tanggal Daftar" name="tanggal_daftar">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Upload Gambar</label>
                                        <input class="form-control" type="file" id="formFile" name="userfile" accept="/image/*">
                                </div>

                                <h4 class="card-title">Tambah Akun Santri</h4>
                                <hr>

                                <input type="hidden" class="form-control" id="exampleInputName1" placeholder="No Anggota" name="id_level" value="3">

                                <div class="form-group">
                                    <label for="exampleInputName1">Username</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Username" name="username">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Password</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Password" name="password">
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a href="<?= base_url('buku')?>"class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>          