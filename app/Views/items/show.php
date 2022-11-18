<table class="table table-bordered">
    <tbody>
        <tr>
            <th width="30%">ID</th>
            <td><?= $item["id"] ?></td>
        </tr>
        <tr>
            <th width="30%">Name</th>
            <td><?= $item["name"] ?></td>
        </tr>
        <tr>
            <th width="30%">Publisher</th>
            <td><?= $item["publisher"] ?></td>
        </tr>
        <tr>
            <th width="30%">Book Category</th>
            <td><?= $item["book_category"] ?></td>
        </tr>
        <tr>
        <tr>
            <th width="30%">Price</th>
            <td><?= $item["price"] ?></td>
        </tr>
        <tr>
            <th width="30%">Qty</th>
            <td><?= $item["qty"] ?></td>
        </tr>
        <tr>
            <td colspan=2>
                <img src="/assets/images/<?= $item['image_name'] ?>" alt="Image for <?= $item['name'] ?>"
                    width="100%" />
            </td>
        </tr>
    </tbody>
</table>