<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>ADD NEW CLASS</h1>
        </div>
        <div class="col-12">
            <form method="post" action="./index.php?page=edit-group">
                Name:
                <input type="text" name="name" value="<?php echo $group->getName()?>">
                <br>
                <br>
                <button type="submit" class="btn btn-primary">UPDATE</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</di