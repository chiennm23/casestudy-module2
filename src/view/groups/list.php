<div class="">
    <div class="btn btn-primary">
        <a class="btn btn-primary" href="./index.php?page=add-group">Thêm mới</a>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Lớp</th>
            <th></th>
        </tr>
        </thead>
        <?php foreach ($groups as $key => $group): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $group->getName() ?></td>
                <td>
                    <a href="">Delete</a>
                    <a href="">Update</a>
                </td>

            </tr>
        <?php endforeach; ?>
    </table>
</div>
