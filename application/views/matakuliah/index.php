<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Mata Kuliah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Mata Kuliah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Mata Kuliah</h3>
                <div class="card-tools">
                    <a href="<?= base_url('matakuliah/tambah'); ?>" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Create
                    </a>
                </div>
                <div class="navbar-search-block">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input id="searchInput" class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-navbar" type="button">
                                    <i class="fas fa-search"></i>
                                </button>
                                <button class="btn btn-navbar" type="button" id="clearSearch">
                                    <i class="fas fa-times"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped" id="matakuliahTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Mata Kuliah</th>
                            <th>Nama Mata Kuliah</th>
                            <th>Jenis</th>
                            <th>Program Studi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($matakuliah as $mk): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= htmlspecialchars($mk['kode_matakuliah']); ?></td>
                            <td><?= htmlspecialchars($mk['nama_matakuliah']); ?></td>
                            <td><?= htmlspecialchars($mk['jenis']); ?></td>
                            <td><?= htmlspecialchars($mk['prodi']); ?></td>
                            <td>
                                <a href="<?= base_url('matakuliah/view/' . $mk['kode_matakuliah']); ?>" class="btn btn-sm btn-secondary" title="View">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="<?= base_url('matakuliah/edit/' . $mk['kode_matakuliah']); ?>" class="btn btn-sm btn-info" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('matakuliah/hapus/' . $mk['kode_matakuliah']); ?>" class="btn btn-sm btn-danger" title="Delete" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="card-footer">
                <p>Menampilkan daftar mata kuliah.</p>
            </div>
        </div>
    </section>
</div>