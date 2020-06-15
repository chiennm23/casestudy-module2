<div class="" style="width: 980px">
    <div class="row">
        <div class="col-12 col-md-8">
            <a class="btn btn-primary  mt-10" href="./index.php?page=add-score">ADD NEW SCORE</a>
        </div>
        <div class="col-12 col-md-4">
            <form class="form-inline my-2 my-lg-0" action="./index.php?page=search-score" method="post">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
    <table style="background: white" class="table mt-3 table-hover border border-warning">
        <thead class="thead-dark">
        <tr>
            <th>STT</th>
            <th>StudentID</th>
            <th>SubjectID</th>
            <th>Score</th>
            <th>Action</th>
        </tr>
        </thead>
        <?php foreach ($points as $key => $point): ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $point->getStudentId() ?></td>
                <td><?php echo $point->getSubjectId() ?></td>
                <td><?php echo $point->getScore() ?></td>
                <td>
                    <a class="btn btn-outline-danger delete text-decoration-none" href="./index.php?page=delete-subject&id=<?php echo $point->getStudentId() ?>">Delete</a>
                    <a class="btn btn-outline-primary update text-decoration-none" href="./index.php?page=edit-score&id=<?php echo $point->getStudentId() ?>">Update</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>