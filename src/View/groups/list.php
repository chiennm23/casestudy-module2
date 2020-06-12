<div class="" style="width: 980px">
    <div class="row">
        <div class="col-12 col-md-8">
            <a class="btn btn-primary  mt-10" href="./index.php?page=add-group">ADD NEW CLASS</a>
        </div>
        <div class="col-12 col-md-4">
            <form class="form-inline my-2 my-lg-0" action="./index.php?page=search-group" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    <table class="table mt-3 table-hover border border-warning">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Class</th>
            <th>Description</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php foreach ($groups as $key => $group): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td>
                    <a class="nav-item nav-link active" href="./index.php?page=detail-student&id=<?php echo $group->getId() ?>">
                        <?php echo $group->getName() ?>
                    </a>
                </td>
                <td><?php echo $group->getDescription() ?></td>
                <td><?php echo $group->getStatus() ?></td>
                <td>
                    <a class="btn btn-outline-danger delete text-decoration-none" href="./index.php?page=delete-group&id=<?php echo $group->getId() ?>">Delete</a>
                    <a class="btn btn-outline-primary update text-decoration-none" href="./index.php?page=edit-group&id=<?php echo $group->getId() ?>">Update</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
