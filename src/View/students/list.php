<div class="">
    <div class="row">
        <div class="col-12 col-md-8">
            <a class="btn btn-primary" href="./index.php?page=add-student">ADD NEW STUDENT</a>
        </div>
        <div class="col-12 col-md-4">
            <form class="form-inline my-2 my-lg-0" action="./index.php?page=search-student" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>

    <table class="table mt-3 table-hover border border-warning">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>Id</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Grade</th>
            <th>Class</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php foreach ($students as $key => $student): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $student->getId() ?></td>
                <td><?php echo $student->getName() ?></td>
                <td><?php echo $student->getBirthday() ?></td>
                <td><?php echo $student->getEmail() ?></td>
                <td><?php echo $student->getPhone() ?></td>
                <td><?php echo $student->getGrade() ?></td>
                <td><?php echo $student->getClass() ?></td>
                <td>
                    <a class="btn btn-outline-danger delete text-decoration-none" href="">Delete</a><br>
                    <a class="btn btn-outline-primary update text-decoration-none" href="./index.php?page=edit-student&id=<?php echo $student->getId() ?>">Update</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
