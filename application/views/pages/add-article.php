<!DOCTYPE html>
<html lang="en">
<head>
<title>Matrix Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-db/css/bootstrap-wysihtml5.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-db/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-db/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-db/css/datepicker.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-db/css/uniform.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-db/css/select2.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-db/css/matrix-style.css" />
<link rel="stylesheet" href="<?php echo base_url(); ?>assets-db/css/matrix-media.css" />
<link href="<?php echo base_url(); ?>assets-db/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="<?php echo base_url(); ?>assets-db/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
</div>
<!--close-Header-part--> 

<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Welcome User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <!--<li><a href="#"><i class="icon-user"></i> My Profile</a></li>
        <li class="divider"></li>
        <li><a href="#"><i class="icon-check"></i> My Tasks</a></li>
        <li class="divider"></li>-->
        <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <!--<li class="dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a class="sAdd" title="" href="#"><i class="icon-plus"></i> new message</a></li>
        <li class="divider"></li>
        <li><a class="sInbox" title="" href="#"><i class="icon-envelope"></i> inbox</a></li>
        <li class="divider"></li>
        <li><a class="sOutbox" title="" href="#"><i class="icon-arrow-up"></i> outbox</a></li>
        <li class="divider"></li>
        <li><a class="sTrash" title="" href="#"><i class="icon-trash"></i> trash</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>-->
  </ul>
</div>

<!--start-top-serch-->
<!--<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>-->
<!--close-top-serch--> 

<!--sidebar-menu-->

<div id="sidebar"> <a href="#" class="visible-phone"><i class="icon icon-list"></i>Forms</a>
  <ul>
    <li><a href="<?php echo base_url(); ?>Main/dashboard"><i class="icon icon-home"></i> <span>Beranda</span></a> </li>
    <li class="active"><a href="<?php echo base_url(); ?>Main/add"><i class="icon icon-inbox"></i> <span>Tambah Artikel</span></a> </li>
  </ul>
</div>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="<?php echo base_url(); ?>Main/dashboard" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Beranda</a> <a href="<?php echo base_url(); ?>Main/dashboard" class="current">Tambah Artikel</a> </div>
    <h1>Form validation</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Form validation</h5>
          </div>
          <div class="widget-content nopadding">
            
            <?php if($article){ ?>
	        <?php foreach ($article as $a) { ?>
            <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>Main/update" name="basic_validate" id="basic_validate" novalidate="novalidate">
                <input type="hidden" name="id" id="required" value="<?php echo $a->id ?>">
                <div class="control-group">
                <label class="control-label">Judul</label>
                <div class="controls">
                  <input type="text" name="title" id="required" value="<?php echo $a->title ?>">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Dibuat oleh</label>
                <div class="controls">
                  <input type="text" name="created_by" id="required" value="<?php echo $a->created_by ?>">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Konten</label>
                <div class="controls">
                    <textarea class="span11" name="content"><?php echo $a->content ?></textarea>
                </div
              </div>
              <div class="control-group">
              <label class="control-label">File upload input</label>
              <div class="controls">
                <input type="file" name="img" />
              </div>
            </div>
              <!--<div class="control-group">
                <label class="control-label">Date (only Number)</label>
                <div class="controls">
                  <input type="text" name="date" id="date">
                </div>
              </div>-->
              <!--<div class="control-group">
                <label class="control-label">URL (Start with http://)</label>
                <div class="controls">
                    <textarea class="span11" ></textarea>
                </div>
              </div>-->
              <div class="form-actions">
                <input type="submit" value="Simpan" class="btn btn-success">
              </div>
            </form>
            <?php } ?>

        	<?php } else { ?>
            <form class="form-horizontal" method="post" action="#" name="basic_validate" id="basic_validate" novalidate="novalidate">
                <div class="control-group">
                <label class="control-label">Judul</label>
                <div class="controls">
                  <input type="text" name="title" id="required">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Dibuat oleh</label>
                <div class="controls">
                  <input type="text" name="created_by" id="required">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Konten</label>
                <div class="controls">
                    <textarea class="span11" name="content"></textarea>
                </div
              </div>
              <div class="control-group">
              <label class="control-label">File upload input</label>
              <div class="controls">
                <input type="file" name="img" />
              </div>
            </div>
              <div class="form-actions">
                <input type="submit" value="Simpan" class="btn btn-success">
              </div>
            </form>
            <?php } ?>
          </div>
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
<script src="<?php echo base_url(); ?>assets-db/js/jquery.validate.js"></script> 
<script src="<?php echo base_url(); ?>assets-db/js/matrix.js"></script> 
<script src="<?php echo base_url(); ?>assets-db/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url(); ?>assets-db/js/matrix.form_validation.js"></script>

<script src="<?php echo base_url(); ?>assets-db/js/jquery.toggle.buttons.js"></script> 
<script src="<?php echo base_url(); ?>assets-db/js/masked.js"></script> 
<script src="<?php echo base_url(); ?>assets-db/js/matrix.form_common.js"></script> 
<script src="<?php echo base_url(); ?>assets-db/js/wysihtml5-0.3.0.js"></script> 
<script src="<?php echo base_url(); ?>assets-db/js/jquery.peity.min.js"></script> 
<script src="<?php echo base_url(); ?>assets-db/js/bootstrap-wysihtml5.js"></script> 
<script>
	$('.textarea_editor').wysihtml5();
</script>
</body>
</html>