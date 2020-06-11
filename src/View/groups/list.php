<div class="">
    <div class="btn btn-primary">
        <a class="btn btn-primary" href="./index.php?page=add-group">ADD NEW CLASS</a>
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
                <td><a class="nav-item nav-link active" href="#"><?php echo $group->getName() ?></a></td>
                <td><?php echo $group->getDescription() ?></td>
                <td><?php echo $group->getStatus() ?></td>
                <td>
                    <a class="btn btn-outline-danger delete text-decoration-none" href="">Delete</a>
                    <a class="btn btn-outline-danger update text-decoration-none" href="./index.php?page=edit-group&id=<?php echo $group->getId() ?>">Update</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
