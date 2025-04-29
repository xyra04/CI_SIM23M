<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit Kategori</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Form Edit Kategori</h3>

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
            <form action="<?= base_url('kategori/update/' . $kategori['idkategori']); ?>" method="POST">
                <div class="box-body">
                    <div class="form-group">
                        <label for="kategori">Nama Kategori</label>
                        <input type="text" class="form-control" name="kategori" value="<?= $kategori['kategori']; ?>" id="kategori" placeholder="Nama Kategori" required>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="<?= base_url('kategori'); ?>" class="btn btn-secondary">Batal</a>
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
