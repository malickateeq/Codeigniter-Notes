<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Code Igniter Basics</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">CI Basics</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>posts">Blog</a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php if(!$this->session->userdata('logged_in')) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>users/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>users/register">Register</a>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url();?>users/logout">Logout</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <div class="container">
        <!-- Flash messages -->
        <div class="row my-5">
            <div class="col-md-4 offset-md-4">
                <?php if($this->session->flashdata('user_registered')) : ?>
                    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
                <?php endif; ?>
                
                <?php if($this->session->flashdata('post_created')) : ?>
                    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>'; ?>
                <?php endif; ?>

                <?php if($this->session->flashdata('login_failed')) : ?>
                    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
                <?php endif; ?>

                <?php if($this->session->flashdata('login_success')) : ?>
                    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('login_success').'</p>'; ?>
                <?php endif; ?>

                <?php if($this->session->flashdata('logout_success')) : ?>
                    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('logout_success').'</p>'; ?>
                <?php endif; ?>
            </div>
        </div>