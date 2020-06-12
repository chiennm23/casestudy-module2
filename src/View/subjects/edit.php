<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>UPDATE SUBJECT</h1>
        </div>
        <div class="col-12">
            <form method="post">
                Id:
                <input type="text" name="id" value="<?php echo $subject->getId()?>">
                Name:
                <input type="text" name="name" value="<?php echo $subject->getName()?>">
                Description:
                <input type="text" name="description" value="<?php echo $subject->getDescription()?>">
                <br>
                <br>
                <button type="submit" class="btn btn-primary">UPDATE</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>
