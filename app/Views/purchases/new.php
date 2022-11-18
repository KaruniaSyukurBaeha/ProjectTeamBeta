<div class="container">
    <h3>Tambah Sale</h3>

    <a href="/purchases" class="btn btn-sm btn-primary mb-2">List Pembelian</a>

    <form action="/purchases" method="post">
        <div class="mb-3">
            <label for="invoice_date" class="form-label">Invoice Date</label>
            <input type="text" name="invoice_date" id="invoice_date" class="form-control"
                value="<?= set_value('invoice_date') ?>">
        </div>
        <div class="mb-3">
            <label for="supplier_id" class="form-label">Supplier ID</label>
            <input type="text" name="supplier_id" id="supplier_id" class="form-control"
                value="<?= set_value('supplier_id') ?>">
        </div>
        <div class="mb-3">
            <input type="submit" value="Simpan" class="btn btn-primary">
        </div>
    </form>

    <script>
    $('#invoice_date').datetimepicker();
    </script>
</div>