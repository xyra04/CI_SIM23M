<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Tambah Mata Kuliah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Tambah Mata Kuliah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Create Matakuliah</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <form action="<?= base_url('matakuliah/insert'); ?>" method="POST">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="kode_matakuliah">Kode Mata Kuliah</label>
                            <input type="text" class="form-control" name="kode_matakuliah" id="kode_matakuliah" placeholder="Kode Mata Kuliah" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_matakuliah">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" name="nama_matakuliah" id="nama_matakuliah" placeholder="Nama Mata Kuliah" required>
                        </div>
                        <div class="form-group">
                            <label for="sks">SKS</label>
                            <select class="form-control" name="sks" id="sks" required>
                                <option value="">-- Pilihan --</option>
                                <option value="1">1 SKS</option>
                                <option value="2">2 SKS</option>
                                <option value="3">3 SKS</option>
                                <option value="4">4 SKS</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select class="form-control" name="semester" id="semester" required>
                                <option value="">-- Pilihan --</option>
                                <option value="1">Semester 1</option>
                                <option value="2">Semester 2</option>
                                <option value="3">Semester 3</option>
                                <option value="4">Semester 4</option>
                                <option value="5">Semester 5</option>
                                <option value="6">Semester 6</option>
                                <option value="7">Semester 7</option>
                                <option value="8">Semester 8</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select class="form-control" name="jenis" id="jenis" required>
                                <option value="">-- Pilihan --</option>
                                <option value="Wajib">Wajib</option>
                                <option value="Umum">Umum</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="prodi">Prodi</label>
                            <select class="form-control" name="prodi" id="prodi" required>
                                <option value="">-- PILIH --</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Manajemen Informatika">Manajemen Informatika</option>
                            </select>
                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Create</button>
                            <a href="<?= base_url('matakuliah'); ?>" class="btn btn-secondary">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                Footer
            </div>
        </div>
    </section>
</div>
