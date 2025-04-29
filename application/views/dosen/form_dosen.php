<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Institut Teknologi Bina Sarana Global</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Dosen</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create Dosen</h3>
            </div>
            <div class="card-body">
                <form action="<?= site_url('dosen/insert'); ?>" method="post">
                    <div class="form-group">
                        <label for="nidn">NIDN</label>
                        <input type="text" class="form-control <?= form_error('nidn') ? 'is-invalid' : ''; ?>" 
                               name="nidn" id="nidn" placeholder="Masukkan NIDN" value="<?= set_value('nidn'); ?>" required>
                        <div class="invalid-feedback"><?= form_error('nidn'); ?></div>
                    </div>
                    <div class="form-group">
                        <label for="nama_dosen">Nama Dosen</label>
                        <input type="text" class="form-control <?= form_error('nama_dosen') ? 'is-invalid' : ''; ?>" 
                               name="nama_dosen" id="nama_dosen" placeholder="Masukkan Nama Dosen" value="<?= set_value('nama_dosen'); ?>" required>
                        <div class="invalid-feedback"><?= form_error('nama_dosen'); ?></div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control <?= form_error('alamat') ? 'is-invalid' : ''; ?>" 
                                  name="alamat" id="alamat" placeholder="Masukkan Alamat" required><?= set_value('alamat'); ?></textarea>
                        <div class="invalid-feedback"><?= form_error('alamat'); ?></div>
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control <?= form_error('jenis_kelamin') ? 'is-invalid' : ''; ?>" name="jenis_kelamin" id="jenis_kelamin" required>
                            <option value="">Pilih</option>
                            <option value="Laki-laki" <?= set_select('jenis_kelamin', 'Laki-laki'); ?>>Laki-laki</option>
                            <option value="Perempuan" <?= set_select('jenis_kelamin', 'Perempuan'); ?>>Perempuan</option>
                        </select>
                        <div class="invalid-feedback"><?= form_error('jenis_kelamin'); ?></div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control <?= form_error('email') ? 'is-invalid' : ''; ?>" 
                               name="email" id="email" placeholder="Masukkan Email" value="<?= set_value('email'); ?>" required>
                        <div class="invalid-feedback"><?= form_error('email'); ?></div>
                    </div>
                    <div class="form-group">
                        <label for="telp">Telepon</label>
                        <input type="text" class="form-control <?= form_error('telp') ? 'is-invalid' : ''; ?>" 
                               name="telp" id="telp" placeholder="Masukkan Telepon" value="<?= set_value('telp'); ?>" required>
                        <div class="invalid-feedback"><?= form_error('telp'); ?></div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Create</button>
                        <a href="<?= base_url('dosen'); ?>" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
