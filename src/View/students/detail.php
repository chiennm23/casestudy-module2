<div >
    <h2>Detail Class: <?php echo 'Class-' . $student[0]['class'] ?></h2>
</div>
<h4>Student List</h4>
<table class="table table-hover table-list">
    <thead class="thead-dark">
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Birth Day</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Grade</th>
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
        </tr>
    <?php endforeach; ?>
</table>
