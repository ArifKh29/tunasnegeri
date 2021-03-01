<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-6">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>

            <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#addKategori">Add New Kategori</a>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Menu</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($kategori as $m) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= $m->nama_kategori; ?></td>
                            <td>
                                <a href="<?= base_url('berita/subkategori/') . $m->id_kategori ?>" class="badge badge-primary">detail</a>
                                <a href="" data-toggle="modal" data-target="#editKategori<?= $m->id_kategori ?>" class="badge badge-success">edit</a>
                                <a href="<?= base_url('berita/hapusKategori/') . $m->id_kategori ?>" class="badge badge-danger">delete</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>


        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal Tambah Kategori-->
<div id="addKategori" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('berita/addKategori'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="kategori" required name="kategori" placeholder="Nama Kategori">

                    </div>
                    <div class="form-group">
                        <span>Show As Menu</span>
                        <input type="radio" name="status" value="show" required>Show
                        <input type="radio" name="status" value="hide" required>Hide
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>

    </div>
</div>

<!-- Modal Edit Kategori-->
<?php foreach ($kategori as $m) : ?>
    <div class="modal fade" id="editKategori<?= $m->id_kategori ?>" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newMenuModalLabel">Edit Kategori</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('berita/editKategori'); ?>" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Menu name" value="<?= $m->nama_kategori ?>">
                            <input type="hidden" class="form-control" id="id" name="id" placeholder="Menu name" value="<?= $m->id_kategori ?>">
                        </div>
                        <div class="form-group">
                            <span>Show As Menu</span>
                            <input type="radio" name="status" <?php if (isset($m->status) && $m->status == "show") echo "checked"; ?> value="show">Show
                            <input type="radio" name="status" <?php if (isset($m->status) && $m->status == "hide") echo "checked"; ?> value="hide">Hide
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>