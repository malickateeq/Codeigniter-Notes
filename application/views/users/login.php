<?php echo form_open('users/login'); ?>
    <div class="row my-5">
        <div class="col-md-4 offset-md-4">
            <h1 class="text-center"> <?= $title; ?> </h1>
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="username" placeholder="Enter Username">
                <div class="text-danger"> <?php echo form_error('username'); ?> </div>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="text" class="form-control" name="password" placeholder="Enter Password">
                <div class="text-danger"> <?php echo form_error('password'); ?> </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
    </div>
<?php echo form_close(); ?>