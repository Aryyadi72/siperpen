<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <h4 class="card-title">Ubah Data Santri</h4>
                            <hr>
                            <form class="forms-sample" action="<?php echo base_url('santri/proses_ubah/'. $santri['id_santri']); ?>" method="post" role="form">

                            <input type="hidden"  name="id_santri" class="form-control" id="exampleInputName1" value="<?= $santri['id_santri']; ?>">

                                <div class="form-group">
                                    <label for="exampleInputName1">No Anggota</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="No Anggota" name="no_anggota" value="<?= $santri['no_anggota']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Bin / Binti</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Bin / Binti" name="bin_binti" value="<?= $santri['bin_binti']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama" value="<?= $santri['nama']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Alamat</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat" name="alamat" value="<?= $santri['alamat']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Jenis Kelamun</label>
                                        <select class="form-control" id="exampleSelectGender" name="jenis_kelamin">
                                            <option selected disabled>Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki" <?php if ($santri['jenis_kelamin'] == "Laki-laki") echo "selected"; ?>>Laki-laki</option>
                                            <option value="Perempuan" <?php if ($santri['jenis_kelamin'] == "Perempuan") echo "selected"; ?>>Perempuan</option>
                                        </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Nomor HP</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nomor HP" name="no_hp" value="<?= $santri['no_hp']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Email</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Email" name="email" value="<?= $santri['email']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Tanggal Lahir</label>
                                        <input type="date" class="form-control" id="exampleInputName1" placeholder="Tanggal Lahir" name="ttl" value="<?= $santri['ttl']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Madrasah</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Madrasah" name="madrasah" value="<?= $santri['madrasah']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Alamat Sekarang</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat Sekarang" name="alamat_sekarang" value="<?= $santri['alamat_sekarang']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Tanggal Daftar</label>
                                        <input type="date" class="form-control" id="exampleInputName1" placeholder="Tanggal Daftar" name="tanggal_daftar" value="<?= $santri['tanggal_daftar']; ?>">
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