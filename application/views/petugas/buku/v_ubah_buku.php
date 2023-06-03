<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <h4 class="card-title">Ubah Data Buku</h4>
                            <hr>
                            <form class="forms-sample" action="<?php echo base_url('buku/proses_ubah/' . $buku['id_buku']); ?>" method="post" enctype="multipart/form-data" role="form">

                            <input type="hidden"  name="id_buku" class="form-control" id="exampleInputName1" value="<?= $buku['id_buku']; ?>">

                                <div class="form-group">
                                    <label for="exampleInputName1">No Invent</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="No Invent" name="no_invent" value="<?= $buku['no_invent']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Pengarang</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Pengarang" name="pengarang" value="<?= $buku['pengarang']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Judul</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Judul" name="judul" value="<?= $buku['judul']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Bahasa</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Bahasa" name="bahasa" value="<?= $buku['bahasa']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Harga Satuan</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Harga Satuan" name="harga_satuan" value="<?= $buku['harga_satuan']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Jumlah Buku</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Jumlah Buku" name="jumlah_buku" value="<?= $buku['jumlah_buku']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Penerbit</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Penerbit" name="penerbit" value="<?= $buku['penerbit']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Deskripsi</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="deskripsi" value="<?= $buku['deskripsi']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Upload Gambar</label>
                                        <input class="form-control" type="file" id="formFile" name="userfile" accept="/image/*"><br>
                                        <img src="<?= base_url()?>./assets/upload/buku/<?= $buku['foto_buku'] ?>" name="userfile" style="width:100%;max-width:100px">
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Asal Buku</label>
                                        <select class="form-control" id="exampleSelectGender" name="id_asal_buku">
                                            <option selected disabled>Pilih Asal Buku</option>
                                            <option value="1" <?php if ($buku['id_asal_buku'] == "1") echo "selected"; ?>>Perpus Daerah</option>
                                        </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Jenis Buku</label>
                                        <select class="form-control" id="exampleSelectGender" name="id_jenis_buku">
                                            <option selected disabled>Pilih Jenis Buku</option>
                                            <option value="1" <?php if ($buku['id_asal_buku'] == "1") echo "selected"; ?>>Buku Bacaan</option>
                                        </select>
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