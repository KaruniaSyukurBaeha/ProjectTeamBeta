<div class="container">
    <h3>List purchase</h3>
    <hr />

    <a href="purchases/new" class="btn btn-info mb-2">Tambah Pembelian</a>

    <?php foreach (session()->getFlashdata() as $key => $flash) : ?>
    <div class="alert alert-<?= $key ?>" role="alert">
        <?= $flash ?>
    </div>
    <?php endforeach; ?>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>#</th>
                <th>Invoice No</th>
                <th>Invoice Date</th>
                <th>Supplier</th>
                <th>Grand Total</th>
            </tr>
        </thead>
        <tbody>
            <?php if (empty($purchases)) : ?>
            <tr>
                <td colspan=6>Tidak ada data</td>
            </tr>
            <?php else : ?>
            <?php foreach ($purchases as $index => $purchase) : ?>
            <tr>
                <td><?= $index + 1 ?></td>
                <td>
                    <a href="purchases/<?= $purchase->id ?>">Detail</a>
                </td>
                <td><?= $purchase->invoice_no ?></td>
                <td><?= $purchase->invoice_date ?></td>
                <td><?= $purchase->supplier_name ?></td>
                <td><?= thousand_separator($purchase->grand_total) ?></td>
            </tr>
            <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>

    <script type="text/javascript">
    </script>
</div>