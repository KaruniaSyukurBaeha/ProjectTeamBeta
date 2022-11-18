<div class="container">
    <h3>Tambah Buku</h3>

    <a href="/items" class="btn btn-sm btn-primary mb-2">List Barang</a>

    <form action="/items" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="<?= set_value('name') ?>">
            <?php if (isset($errors) and $errors->getError('name')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('name'); ?>
            </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="unit" class="form-label">Publisher</label>
            <input type="text" name="publisher" id="publisher" class="form-control"
                value="<?= set_value('publisher') ?>">
            <?php if (isset($errors) and $errors->getError('publisher')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('publisher'); ?>
            </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Book Category</label>
            <input type="text" name="book_category" id="book_category" class="form-control"
                value="<?= set_value('book_category') ?>">
            <?php if (isset($errors) and $errors->getError('book_category')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('book_category'); ?>
            </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" name="price" id="price" class="form-control" value="<?= set_value('price') ?>">
            <?php if (isset($errors) and $errors->getError('price')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('price'); ?>
            </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Qty</label>
            <input type="text" name="qty" id="qty" class="form-control" value="<?= set_value('qty') ?>">
            <?php if (isset($errors) and $errors->getError('qty')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('qty'); ?>
            </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="image_upload" class="form-label">Image</label>
            <input type="file" name="image_upload" id="image_upload" class="form-control"
                value="<?= set_value('image_upload') ?>">
            <?php if (isset($errors) and $errors->getError('image_upload')) { ?>
            <div class='text-danger mt-2'>
                <?= $error = $errors->getError('image_upload'); ?>
            </div>
            <?php } ?>
        </div>
        <div class="mb-3">
            <label for="status_id" class="form-label">Status</label>
            <select name="status_id" class="form-control">
                <option value="1">Ada</option>
                <option value="2">Habis</option>
            </select>
        </div>
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
    </form>
</div>