<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><?= $title ?></h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form class="mt-4" action="<?= base_url('rule/update/') . $rule['id'] ?>" method="POST">
                    <h5 class="card-title">Gejala</h5>
                    <div class="form-group mb-4">
                        <select class="form-control col-sm-4" name="gejala_id">
                            <option value="">Pilih Gejala</option>
                            <option hidden selected value="<?= $rule['id_gejala'] ?>"><?= $rule['kode_gejala'] . ' - ' . $rule['gejala'] ?></option>
                            <?php foreach ($gejala as $g) : ?>
                                <option value="<?= $g['id_gejala'] ?>"><?= $g['kode_gejala'] . ' - ' . $g['gejala'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <h5 class="card-title">Gejala Sebelumnya</h5>
                    <div class="form-group mb-4">
                        <select class="form-control col-sm-4" name="gejala_parent">
                            <option value="">Pilih Gejala</option>
                            <option hidden selected value="<?= $rule['kode_gejala'] ?>"><?= $parent ?></option>
                            <?php foreach ($gejala as $g) : ?>
                                <option value="<?= $g['kode_gejala'] ?>"><?= $g['kode_gejala'] . ' - ' . $g['gejala'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <h5 class="card-title">Gejala Ya</h5>
                    <div class="form-group mb-4">
                        <select class="form-control col-sm-4" name="gejala_ya">
                            <option value="">Pilih Gejala</option>
                            <option hidden selected value="<?= $rule['kode_gejala'] ?>"><?= $ya ?></option>
                            <?php foreach ($gejala as $g) : ?>
                                <option value="<?= $g['kode_gejala'] ?>"><?= $g['kode_gejala'] . ' - ' . $g['gejala'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <h5 class="card-title">Gejala Tidak</h5>
                    <div class="form-group mb-4">
                        <select class="form-control col-sm-4" name="gejala_tidak">
                            <option value="">Pilih Gejala</option>
                            <option hidden selected value="<?= $rule['kode_gejala'] ?>"><?= $tidak ?></option>
                            <?php foreach ($gejala as $g) : ?>
                                <option value="<?= $g['kode_gejala'] ?>"><?= $g['kode_gejala'] . ' - ' . $g['gejala'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <h5 class="card-title">Kerusakan</h5>
                    <div class="form-group mb-4">
                        <select class="form-control col-sm-4" name="kerusakan_id">
                            <option value="">Pilih Kerusakan</option>
                            <option hidden selected value="<?= $rule['id_kerusakan'] ?>"><?= $rule['kode_kerusakan'] . ' - ' . $rule['kerusakan'] ?></option>
                            <?php foreach ($kerusakan as $k) : ?>
                                <option value="<?= $k['id_kerusakan'] ?>"><?= $k['kode_kerusakan'] . ' - ' . $k['kerusakan'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="float-right">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> Simpan</button>
                    </div>
                </form>
            </div>
        </div>