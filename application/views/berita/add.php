<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

            <?= $this->session->flashdata('message'); ?>
            <?= form_open_multipart('berita/simpan'); ?>
            <label for="tanggal">Tanggal</label>
            <div class="form-group">
                <input type="date" class="form-control" id="tanggal" name="tanggal">
            </div>

            <label for="judul">Judul</label>
            <div class="form-group">
                <input type="text" class="form-control" id="judul" name="judul">
            </div>

            <label for="cuplikan">Cuplikan</label>
            <div class="form-group">
                <textarea class="form-control" id="cuplikan" name="cuplikan"></textarea>
            </div>

            <label for="isi">Isi</label>
            <div class="form-group">
                <textarea id="ckeditor" name="isi" height="200"></textarea>
            </div>

            <label for="kategori">Kategori</label>
            <div class="form-group">
                <select name="kategori" class="form-control">
                    <?php
                    foreach ($kategori as $k) { ?>
                        <option class="form-control" value="<?= $k->id_kategori ?>"><?= $k->nama_kategori ?> </option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <label for="kategori">Sub Kategori</label>
            <div class="form-group">
                <select name="subkategori" class="form-control">
                    <?php
                    foreach ($subkategori as $k) { ?>
                        <option class="form-control" value="<?= $k->id_subkategori ?>"><?= $k->nama_subkategori ?> </option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <label for="tag">Tag</label>
            <div class="form-group">
                <textarea class="form-control" id="tag" name="tag"></textarea>
            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
        </div>
    </div>
</div>