<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="row">
                        <div class="card-body">
                            <h4 class="card-title">Tambah Data Petugas</h4>
                            <hr>
                            <form class="forms-sample" action="<?php echo base_url('petugas/proses_tambah'); ?>" method="post" role="form">

                                <div class="form-group">
                                    <label for="exampleInputName1">Nama</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nama" name="nama">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputName1">Alamat</label>
                                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Alamat" name="alamat">
                                </div>

                                <div class="form-group">
                                    <label for="exampleSelectGender">Jenis Kelamun</label>
                                        <select class="form-control" id="exampleSelectGender" name="jenis_kelamin">
                                            <option selected disabled>Pilih Jenis Kelamin</option>
                                            <option value="Pria">Pria</option>
                                            <option value="Wanita">Wanita</option>
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

                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                <a href="<?= base_url('petugas')?>"class="btn btn-light">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>          