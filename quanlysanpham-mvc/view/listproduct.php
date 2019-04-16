<h2>Danh sách sản phẩm</h2>
<a href="./index.php?page=add">Thêm mới</a>

<h2>Tìm kiếm sản phẩm</h2>

<table class="table">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key => $product): 
        
    ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $product->name ?></td>
        <td><?php echo number_format($product->price) ?>VND</td>
        <td><?php echo $product->description ?></td>
        <td> <a href="./index.php?page=delete&id=<?php echo $customer->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $customer->id; ?>" class="btn btn-sm">Update</a></td>
    <?php endforeach; ?>
    </tbody>
</table>