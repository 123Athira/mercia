<?php  if(!$this->session->has_userdata('role') ){ redirect('/');}?>
	<!DOCTYPE html>
<html lang="en-US" class="no-js">
<head>
<title>Mercia College</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel='stylesheet' href='<?php echo base_url(); ?>/assets/css/bootstrap.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='<?php echo base_url(); ?>/assets/css/animate.min.css' type='text/css' media='all'/>
<link rel='stylesheet' href='<?php echo base_url(); ?>/style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C700italic%2C300%2C400%2C700%2C800%7CMontserrat%3A300italic%2C400italic%2C700italic%2C300%2C400%2C700%7CDosis%3A400%2C700&#038;ver=4.5' type='text/css' media='all'/>
<link rel='stylesheet' href='<?php echo base_url(); ?>/icons/elegantline/style.css' type='text/css' media='all'/>
<link rel='stylesheet' href='<?php echo base_url(); ?>/assets/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' href='<?php echo base_url(); ?>/assets/css/flexslider.css' type='text/css' media='all'/>

<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body class="frontpage" style="background-image:url(../imgm/banner-img.png);">
<div class="page-loader">
	<img src="<?php echo base_url(); ?>/assets/img/loader.gif" alt="loader">
</div>

<!-- Header
================================================== -->
<header id="header">
<div id="mega-menu" class="header header2 header-sticky primary-menu icons-no default-skin zoomIn align-right">
	<nav class="navbar navbar-default redq">
	<div class="container">
		<div class="navbar-header">
			
			<a class="navbar-brand" href="">
			<span style="color:green">Mercia</span>
			</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar">
		
			<div class="menu-top-menu-container">
				<ul class="nav navbar-nav nav-list">
					<?php  if($this->session->has_userdata('role') ){?>
						<?php  if($this->session->userdata('role') == 'ADMIN'){?>
                              <li><a href="<?php echo base_url('department/'); ?>" >Department</a>  </li>
                            <li><a href="<?php echo base_url('course/'); ?>" >Course</a>  </li>
                            <li><a href="<?php echo base_url('blog/'); ?>" >Blog</a>  </li>
                        <?php } ?>
                            <li><a href="<?php echo base_url('subject/'); ?>" >Subject</a>  </li>
                           
                            <li><a href="<?php echo base_url('exam/'); ?>" >Exam</a>  </li>
                           
                              <li><a href="<?php echo base_url('student/'); ?>" >Users</a>  </li>
                              <?php  if($this->session->userdata('role') == 'STUDENT'){?>
                              	<li><a href="<?php echo base_url('user/leaverequest_student'); ?>" >Leave</a>  </li>
                              <?php } ?>
                              <?php  if($this->session->userdata('role') == 'FACULTY'){?>
                              <li><a href="<?php echo base_url('user/leaverequest_faculty'); ?>" >Leave</a>  </li>
                          <?php } ?>
                           <?php  if($this->session->userdata('role') == 'ADMIN'){?>
                              <li><a href="<?php echo base_url('user/leaverequest_faculty'); ?>" >Faculty Leave</a>  </li>
                              <li><a href="<?php echo base_url('user/leaverequest_student'); ?>" >Student Leave</a>  </li>
                          <?php } ?>
                       
                           
                           	
  <li><a href="<?php echo base_url('event/'); ?>" >Events</a></li>
  <li><a href="<?php echo base_url('event/meeting'); ?>" >Meetings</a></li>
  <?php  if($this->session->has_userdata('role') ){?>
						<?php  if($this->session->userdata('role') != 'FACULTY'){?>
  <li><a href="<?php echo base_url('student/feedback'); ?>" >Feedbacks</a></li>
<?php } } ?>

                           <li ><a href="<?php echo base_url('fee'); ?>" >Fee</a></li>
                            
                            <li ><a href="<?php echo base_url('user/user_logout'); ?>" >SignOut</a></li>                          
                         <?php } else{ ?>
                              <li ><a href="<?php echo base_url('user/login_view'); ?>" >SignIn</a></li>
                          <?php } ?>
				</ul>
			</div>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
	</nav>
</div>
<br/>
  <br/>
</header>	

<!-- INTRO
================================================== -->




<!-- SERVICES
================================================== -->		
<section id="services" class="services margintop60">
	<div class="container">
		