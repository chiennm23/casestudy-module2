<?php
if (isset($massage))
    echo "<p class='alert-info'>$massage</p>";
?>

<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>ADD NEW CLASS</h1>
        </div>
        <div class="col-12">
            <form method="post">
                Name:
                <input type="text" name="name">
                <br>
                <br>
                <button type="submit" class="btn btn-primary">ADD</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Cancel</button>
            </form>
        </div>
    </div>
</div>