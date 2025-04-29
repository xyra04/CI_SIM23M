<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Dosen</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item active">Dosen</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Dosen</h3>
                <div class="card-tools">
                    <a href="<?= base_url('dosen/create'); ?>" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Create
                    </a>
                </div>
                <div class="navbar-search-block mt-2">
                    <form class="form-inline">
                        <div class="input-group input-group-sm">
                            <input id="searchInput" class="form-control form-control-navbar" type="search" placeholder="Cari dosen..." aria-label="Search">
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
                <table class="table table-bordered table-striped" id="dosenTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIDN</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Email</th>
                            <th>Telepon</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($dosen as $d): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= htmlspecialchars($d['nidn']); ?></td>
                            <td><?= htmlspecialchars($d['nama_dosen']); ?></td>
                            <td><?= htmlspecialchars($d['alamat']); ?></td>
                            <td><?= htmlspecialchars($d['jenis_kelamin']); ?></td>
                            <td><?= htmlspecialchars($d['email']); ?></td>
                            <td><?= htmlspecialchars($d['telp']); ?></td>
                            <td>
                                <a href="<?= base_url('dosen/edit/' . $d['nidn']); ?>" class="btn btn-sm btn-info" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('dosen/hapus/' . $d['nidn']); ?>" class="btn btn-sm btn-danger" title="Hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                <p>Menampilkan daftar dosen.</p>
            </div>
        </div>
    </section>
</div>
