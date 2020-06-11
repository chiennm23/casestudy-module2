<div class="">
    <div class="btn btn-primary">
        <a class="btn btn-primary" href="./index.php?page=add-group">ADD NEW CLASS</a>
    </div>
    <form class="form-inline my-2 my-lg-0" action="./index.php?page=search-group" method="post">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
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
                <td><a href="#"><?php echo $group->getName() ?></a></td>
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
