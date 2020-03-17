<h2><?php echo $post['title']; ?></h2>
<small class='post-date'>Posted on: <?php echo $post['created_at'] ?></small> <br>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>

<hr>

<div class="row">
    <a href="/posts/edit/<?php echo $post['slug'] ?>" class="btn btn-success mx-4">Edit</a>
    
    <?php echo form_open('/posts/delete/'.$post['id']); ?>
        <input type="submit" value="delete" class="btn btn-danger">
    </form>
</div>