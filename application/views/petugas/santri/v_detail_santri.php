<div class="main-panel">
    <div class="content-wrapper">
        <div class="card mb-3 shadow p-3 mb-5 bg-body rounded" style="max-width:1000px;margin-top:100px;margin-left:180px;">
        <div class="row g-0">
            <div class="col-md-4">
            <img style="padding-top:30px;margin-left:23px;" src="<?= base_url()?>./assets/upload/santri/<?= $santri['foto_santri'] ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div style="margin-top:10px;margin-bottom:-25px;margin-left:-12px;" class="col-8"><h5 class="card-title"><?= $santri['nama']; ?></h5></div>
                            <div class="col-3" style="margin-left:-200px;">
                                <a href="<?= base_url('santri/detail_akun_santri/'. $santri['id_santri'])?>">
                                    <button type="button" class="btn btn-dark btn-icon-text btn-sm">
                                        Akun
                                        <i class="typcn typcn-edit btn-icon-append"></i>                          
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <table>
                        <tr>
                            <th style="padding-bottom: 5px;">No Anggota</th>
                            <td>: <?= $santri['no_anggota']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding-bottom: 5px;">Alamat</th>
                            <td>: <?= $santri['alamat']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding-bottom: 5px;">No HP</th>
                            <td>: <?= $santri['no_hp']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding-bottom: 5px;">Email</th>
                            <td>: <?= $santri['email']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding-bottom: 5px;">Tanggal Lahir</th>
                            <td>: <?= $santri['ttl']; ?></td>
                        </tr>
                        <tr>
                            <th style="padding-bottom: 5px;">Madrasah</th>
                            <td>: <?= $santri['madrasah']; ?></td>
                        </tr>
                    </table>
                    <hr>
                    <p class="card-text"><small class="text-muted">Terdaftar pada : <?= $santri['tanggal_daftar']?></small></p>
                </div>
            </div>
        </div>
        </div>
    </div>
</div>