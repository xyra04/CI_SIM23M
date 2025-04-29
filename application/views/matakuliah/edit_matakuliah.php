<div class="content-wrapper">
    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit Mata Kuliah</h3>
            </div>
            <div class="card-body">
                <form action="<?= base_url('matakuliah/update/'.$matakuliah['kode_matakuliah']); ?>" method="POST">
                    <div class="form-group">
                        <label>Kode Mata Kuliah</label>
                        <input type="text" class="form-control" name="kode_matakuliah" value="<?= $matakuliah['kode_matakuliah']; ?>" readonly>
                    </div>
                    <div class="form-group">
                        <label>Nama Mata Kuliah</label>
                        <input type="text" class="form-control" name="nama_matakuliah" value="<?= $matakuliah['nama_matakuliah']; ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Jenis</label>
                        <select class="form-control" name="jenis" required>
                            <option value="Umum" <?= ($matakuliah['jenis'] == 'Umum') ? 'selected' : ''; ?>>Umum</option>
                            <option value="Wajib" <?= ($matakuliah['jenis'] == 'Wajib') ? 'selected' : ''; ?>>Wajib</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Program Studi</label>
                        <select class="form-control" name="prodi" required>
                            <option value="Sistem Informasi" <?= ($matakuliah['prodi'] == 'Sistem Informasi') ? 'selected' : ''; ?>>Sistem Informasi</option>
                            <option value="Teknologi Informasi" <?= ($matakuliah['prodi'] == 'Teknologi Informasi') ? 'selected' : ''; ?>>Teknologi Informasi</option>
                            <option value="Kompetensi Akuntasi" <?= ($matakuliah['prodi'] == 'Kompetensi Akuntasi') ? 'selected' : ''; ?>>Kompetensi Akuntasi</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Save</button>
                    <a href="<?= base_url('matakuliah'); ?>" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>
    </section>
</div>
