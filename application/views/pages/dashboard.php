<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-db/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-db/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-db/css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-db/css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-db/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-db/css/matrix-media.css" />
<link href="<?php echo base_url(); ?>assets-db/fonts/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i> <span class="text">Welcome</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="<?php echo base_url(); ?>login/logout"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
  </ul>
</div>

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-th"></i>Tables</a>
  <ul>
    <li class="active"><a href="<?php echo base_url(); ?>dashboard"><i class="icon icon-home"></i> <span>Beranda</span></a> </li>
    <li><a href="<?php echo base_url(); ?>dashboard/add"><i class="icon icon-inbox"></i> <span>Tambah Artikel</span></a> </li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url(); ?>dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> </div>
    <h1>Tables</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($sql->result() as $obj){ ?>
                <tr class="gradeX">
                  <td><?php echo $obj->title; ?></td>
                  <td><?php 
                        $des = $obj->content;
                        $des = character_limiter($des,400);
                        // echo $obj->content;
                        echo $des;
                        ?></td>
                  <td><img src="<?php echo base_url(); ?>/uploads/<?php echo $obj->img; ?>" alt="Responsive image" class="img-article"></td>
                  <td class="center">
                  <a href="<?php echo base_url();?>dashboard/edit/<?php echo $obj->id ?>" class="btn btn-warning btn-mini">Edit</a>
                  <a href="<?php echo base_url();?>dashboard/hapus/<?php echo $obj->id ?>" class="btn btn-danger btn-mini">Hapus</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="<?php echo base_url(); ?>assets-db/js/jquery.min.js"></script> 
<script src="<?php echo base_url(); ?>assets-db/js/jquery.ui.custom.js"></script> 
<script src="<?php echo base_url(); ?>assets-db/js/bootstrap.min.js"></script> 
<script src="<?php echo base_url(); ?>assets-db/js/jquery.uniform.js"></script> 
<script src="<?php echo base_url(); ?>assets-db/js/select2.min.js"></script> 
<script src="<?php echo base_url(); ?>assets-db/js/jquery.dataTables.min.js"></script> 
<script src="<?php echo base_url(); ?>assets-db/js/matrix.js"></script> 
<script src="<?php echo base_url(); ?>assets-db/js/matrix.tables.js"></script>
</body>
</html>