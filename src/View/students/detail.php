<div>
    <h2>Detail Class: <?php echo 'Class-' . $student[0]['class'] ?></h2>
</div>
<h4>Student List</h4>
<table style="background: white" class="table table-hover table-list">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Birth Day</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Grade</th>
        <th>Action</th>
    </tr>
    </thead>
    <?php foreach ($student as $key => $item): ?>
        <tr>
            <td><?php echo ++$key ?></td>
            <td><?php echo $item['name'] ?></td>
            <td><?php echo $item['birthday'] ?></td>
            <td><?php echo $item['email'] ?></td>
            <td><?php echo $item['phone'] ?></td>
            <td><?php echo $item['grade'] ?></td>
            <td>
                <a class="btn btn-outline-danger delete text-decoration-none" href="">Delete</a>
                <a class="btn btn-outline-primary update text-decoration-none" href="">Update</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
