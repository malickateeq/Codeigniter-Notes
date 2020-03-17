<h2> <?= $title ?> </h2>

<?php echo validation_errors(); ?>

<?php echo form_open('posts/create'); ?>
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter Title">
    </div>
    <div class="form-group">
        <label>Body</label>
        <textarea class="form-control" name="body" placeholder="Enter content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>