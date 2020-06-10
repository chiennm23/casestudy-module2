<div class="">
    <div class="btn btn-primary">
        <a class="btn btn-primary" href="./index.php?page=add-group">Thêm mới</a>
    </div>
    <table class="table mt-3 table-hover">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Id</th>
            <th>Class</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php foreach ($groups as $key => $group): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $group->getId() ?></td>
                <td><?php echo $group->getName() ?></td>
                <td><?php echo $group->getDescription() ?></td>
                <td><?php echo $group->getStatus() ?></td>
                <td>
                    <a href="">Delete |</a>
                    <a href="./index.php?page=edit-group&id=<?php echo $group->getId() ?>">| Update</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
