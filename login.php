<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>MERCIA</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="#" type="imagem/x-icon" />
    <link rel="apple-touch-icon" href="#" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/cssm/bootstrap.min.css" />
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/cssm/pogo-slider.min.css" />
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/cssm/style.css" />
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/cssm/responsive.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/cssm/custom.css" />


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
    .nav-link{display:inline-block;!important}
</style>

</head>

<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="<?php echo base_url(); ?>/assets/imagesm/loader.gif" alt="#" />
        </div>
    </div>
    <!-- end loader -->
    <!-- END LOADER -->

    <!-- Start header -->
    <header class="top-header">
        <nav class="navbar header-nav navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="<?php echo base_url('/'); ?>">Home</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('user/login_view'); ?>">Login</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('blog/'); ?>">Blog</a></li>
                        <li><a class="nav-link" href="<?php echo base_url('welcome/about'); ?>">Aboutus</a></li>
            <li><a class="nav-link" href="<?php echo base_url('welcome/contact'); ?>">Contact us</a></li>
                   </ul>
                </div>
                <div class="search-box">
                    <input type="text" class="search-txt" placeholder="Search">
                  
                </div>
            </div>
        </nav>
    </header>
    <!-- End header -->

    <!-- Start Banner -->
    <div class="ulockd-home-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider" id="js-main-slider">
                    <div class="pogoSlider-slide" style="background-image:url(<?php echo base_url(); ?>/assets/imgm/banner-img.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                    
                                        <h3>MERCIA COLLEGE</h3>
                                        <h4>Bright<br>Future</h4>
                                        <br>
                                        
                                        <a class="contact_bt" href="">About us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pogoSlider-slide" style="background-image:url(<?php echo base_url(); ?>/assets/imgm/banner-img.png);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slide_text">
                                    <h3>MERCIA COLLEGE</h3>
                                        <h4>Bright<br>Future</h4>
                                        <a class="contact_bt" href="">About us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- .pogoSlider -->
            </div>
        </div>
    </div>
    <!-- End Banner -->
<center>
 <div class="container" style="margin-left:40%;margin-bottom:25px;margin-top:25px;">
    <div class="row">
        <div class="col-md-4 col-md-offset-4" style="background-color: #3FA649">
            <div class="login-panel panel panel-success">
                <div class="panel-heading" style="background-color: #0BB61C;padding-top:15px;margin-top:10px;">
                    <h3 class="panel-title">Please do Login here</h3>
                </div>
                <?php
              $success_msg= $this->session->flashdata('success_msg');
              $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg){
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg){
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>


                <div class="panel-body" style="margin-bottom:15px;">
                    <form role="form" method="post" action="<?php echo base_url('user/login_user'); ?>">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="Enter E-mail" name="user_email" required="required" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Enter Password" name="user_password"  required="required" type="password" value="">
                            </div>


                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" style="border-color:#565656">

                        </fieldset>
 


              </form>
              <!--  <center><b>forget password?</b> <br></b><a href="<?php echo base_url('user'); ?>">click here</a></center><!--for centered text-->

                </div>
            </div>
        </div>
    </div>
</div>
</center>

    <div class="footer_bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="crp">?? 2021 Mercia . All Rights Reserved.</p>
                    <ul class="bottom_menu">
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <a href="#" id="scroll-to-top" class="hvr-radial-out"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="<?php echo base_url(); ?>/assets/jsm/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/jsm/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/jsm/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo base_url(); ?>/assets/jsm/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/jsm/jquery.pogo-slider.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/jsm/slider-index.js"></script>
    <script src="<?php echo base_url(); ?>/assets/jsm/smoothscroll.js"></script>
    <script src="<?php echo base_url(); ?>/assets/jsm/form-validator.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/jsm/contact-form-script.js"></script>
    <script src="<?php echo base_url(); ?>/assets/jsm/isotope.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/jsm/images-loded.min.js"></script>
    <script src="<?php echo base_url(); ?>/assets/jsm/custom.js"></script>
  <script>
  /* counter js */

(function ($) {
  $.fn.countTo = function (options) {
    options = options || {};
    
    return $(this).each(function () {
      // set options for current element
      var settings = $.extend({}, $.fn.countTo.defaults, {
        from:            $(this).data('from'),
        to:              $(this).data('to'),
        speed:           $(this).data('speed'),
        refreshInterval: $(this).data('refresh-interval'),
        decimals:        $(this).data('decimals')
      }, options);
      
      // how many times to update the value, and how much to increment the value on each update
      var loops = Math.ceil(settings.speed / settings.refreshInterval),
        increment = (settings.to - settings.from) / loops;
      
      // references & variables that will change with each update
      var self = this,
        $self = $(this),
        loopCount = 0,
        value = settings.from,
        data = $self.data('countTo') || {};
      
      $self.data('countTo', data);
      
      // if an existing interval can be found, clear it first
      if (data.interval) {
        clearInterval(data.interval);
      }
      data.interval = setInterval(updateTimer, settings.refreshInterval);
      
      // initialize the element with the starting value
      render(value);
      
      function updateTimer() {
        value += increment;
        loopCount++;
        
        render(value);
        
        if (typeof(settings.onUpdate) == 'function') {
          settings.onUpdate.call(self, value);
        }
        
        if (loopCount >= loops) {
          // remove the interval
          $self.removeData('countTo');
          clearInterval(data.interval);
          value = settings.to;
          
          if (typeof(settings.onComplete) == 'function') {
            settings.onComplete.call(self, value);
          }
        }
      }
      
      function render(value) {
        var formattedValue = settings.formatter.call(self, value, settings);
        $self.html(formattedValue);
      }
    });
  };
  
  $.fn.countTo.defaults = {
    from: 0,               // the number the element should start at
    to: 0,                 // the number the element should end at
    speed: 1000,           // how long it should take to count between the target numbers
    refreshInterval: 100,  // how often the element should be updated
    decimals: 0,           // the number of decimal places to show
    formatter: formatter,  // handler for formatting the value before rendering
    onUpdate: null,        // callback method for every time the element is updated
    onComplete: null       // callback method for when the element finishes updating
  };
  
  function formatter(value, settings) {
    return value.toFixed(settings.decimals);
  }
}(jQuery));

jQuery(function ($) {
  // custom formatting example
  $('.count-number').data('countToOptions', {
  formatter: function (value, options) {
    return value.toFixed(options.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, ',');
  }
  });
  
  // start all the timers
  $('.timer').each(count);  
  
  function count(options) {
  var $this = $(this);
  options = $.extend({}, options || {}, $this.data('countToOptions') || {});
  $this.countTo(options);
  }
});
  </script>
</body>

</html>
