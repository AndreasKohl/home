<?php
if($settings['weather_option']=="c_kms"){
    $temp = $weather['temp_celsius'];
    $wind = $weather['wind_kms'];
    $tsign = "&deg;C";
    $wsign = "km/s";
}elseif($settings['weather_option']=="k_mps"){
    $temp = $weather['temp_kelvin'];
    $wind = $weather['wind_mps'];   
    $tsign = "K";
    $wsign = "mps";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  	<title><?php echo $title;?></title>  	
    <base href="<?php echo BASE;?>"></base>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="apple-touch-icon" href="assets/icon/apple-touch-icon-57-precomposed.png">    
    <link rel="apple-touch-icon" sizes="72x72" href="assets/icon/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/icon/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/icon/apple-touch-icon-144-precomposed.png"> 
    <link rel="shortcut icon" href="assets/icon/favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700' rel='stylesheet' type='text/css'>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/bootstrap-colorpicker.min.css" rel="stylesheet">   
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/weather-icons.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>




  <div class="row">
      <!-- uncomment code for absolute positioning tweek see top comment in css -->
      <!-- <div class="absolute-wrapper"> </div> -->
      <!-- Menu -->
      <div class="side-menu">

          <nav class="navbar navbar-default" role="navigation">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                  <div class="brand-wrapper">
                      <!-- Hamburger -->
                      <button type="button" class="navbar-toggle">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                      </button>

                      <!-- Brand -->
                      <div class="brand-name-wrapper">
                          <a class="navbar-brand" href="<?php echo BASE;?>">
                              <?php echo LOGO;?>
                          </a>
                      </div>

                      <!-- Search -->
                      <a data-toggle="collapse" href="#search" class="btn btn-default" id="search-trigger">
                          <span class="glyphicon glyphicon-search"></span>
                      </a>

                      <!-- Search body -->
                      <div id="search" class="panel-collapse collapse">
                          <div class="panel-body">
                              <form class="navbar-form" role="search">
                                  <div class="form-group">
                                      <input type="text" class="form-control" placeholder="Search">
                                  </div>
                                  <button type="submit" class="btn btn-default "><span class="glyphicon glyphicon-ok"></span></button>
                              </form>
                          </div>
                      </div>
                  </div>

              </div>

              <!-- Main Menu -->
              <div class="side-menu-container">
                  <ul class="nav navbar-nav">

                      <li class="iconlist">
                          <?php if($settings['weather']=="true"){ ?><a href="#" data-toggle="modal" data-target="#myWeather"><i class="fa fa-sun-o"></i></a><?php } ?>
                          <a href="#" data-toggle="modal" data-target="#all_off" ><i class="fa fa-power-off"></i></a>
                          <a onclick="location.reload()" style="cursor: pointer;"><i class="fa fa-refresh"></i></a>
                      </li>

                      <li class="panel panel-default" id="dropdown">
                          <a data-toggle="collapse" href="#dropdown-rooms">
                              <i class="fa fa-home"></i> <?php echo NAV_rooms;?> <b class="fa fa-chevron-down"></b>
                          </a>
                          <div id="dropdown-rooms" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <ul class="nav navbar-nav">
                                  <?php foreach($rooms as $room){ ?>
                                      <li><a href="home/room/<?php echo $room['id'];?>/"><i class="fa fa-lightbulb-o"></i> <?php echo $room['room'];?></a></li>
                                  <?php } ?>
                                  </ul>
                              </div>
                          </div>
                      </li>

                      <?php if($userdata['admin']=="1"){ ?>
                      <li class="panel panel-default" id="dropdown">
                          <a data-toggle="collapse" href="#dropdown-settings">
                              <i class="fa fa-cog"></i> <?php echo NAV_settings;?> <b class="fa fa-chevron-down"></b>
                          </a>
                          <div id="dropdown-settings" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <ul class="nav navbar-nav">
                                      <li><a href="home/lamps/"><i class="fa fa-lightbulb-o"></i> <?php echo NAV_set_devices;?></a></li>
                                      <li><a href="home/rooms/"><i class="fa fa-home"></i> <?php echo NAV_set_room;?></a></li>
                                      <li><a href="home/user/"><i class="fa fa-group"></i> <?php echo NAV_set_user;?></a></li>
                                      <li><a href="home/settings/"><i class="fa fa-cog"></i> <?php echo NAV_set_settings;?></a></li>
                                  </ul>
                              </div>
                          </div>
                      </li>
                      <?php } ?>


                      <li class="panel panel-default" id="dropdown">
                          <a data-toggle="collapse" href="#dropdown-user">
                              <span class="circle_home" style="background-color:<?php echo $userdata['color'];?>;">
                                <?php echo $userdata['name']; ?>
                              </span>
                          </a>
                          <div id="dropdown-user" class="panel-collapse collapse">
                              <div class="panel-body">
                                  <ul class="nav navbar-nav">
                                      <li><a href="home/pwchange/"><i class="fa fa-pencil"></i> <?php echo NAV_edit_pass;?></a></li>
                                      <li><a href="login/logout/"><i class="fa fa-sign-out"></i> <?php echo NAV_signout;?></a></li>
                                  </ul>
                              </div>
                          </div>
                      </li>
                  </ul>
              </div><!-- /.navbar-collapse -->
          </nav>

      </div>
      <!-- Weather -->
      <div class="modal fade" id="myWeather" tabindex="-1" role="dialog" aria-labelledby="myWeatherLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                      <div class="row current-weather">
                          <div class="col-xs-5 weather_icon text-center">
                              <i class="owf owf-<?php echo $weather['weather_code'];?>"></i>
                          </div>
                          <div class="col-xs-7 weather_text text-center">
                              <h3><?php echo $settings['city']; ?> <br/> <small> <?php echo $weather['title'];?> <?php echo $weather['description'];?> </small></h3>
                          </div>
                          <div class="col-xs-12 weather_temp"><?php echo $temp." ".$tsign;?></div>
                      </div>

                      <div class="row forecast-weather">
                          <div class="col-xs-12 wdata">
                              <?php echo WEATHER_SUNRISE;?>: <?php echo date('H:i', $weather['sunrise']);?> <?php echo WEATHER_CLOCK;?><br>
                              <?php echo WEATHER_SUNSET;?>: <?php echo date('H:i', $weather['sunset']);?> <?php echo WEATHER_CLOCK;?><br>
                              <?php echo WEATHER_WIND;?>: <?php echo $wind;?> <?php echo $wsign;?>
                          </div>

                      </div>
                  </div>
              </div>
          </div>
      </div>



      <!-- All Off -->
      <div class="modal fade" id="all_off" tabindex="-1" role="dialog" aria-labelledby="alloffLabel" aria-hidden="true">
          <div class="modal-dialog">
              <div class="modal-content">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title" id="alloffLabel"><small><?php echo AO_device_off;?></small></h4>
                  </div>
                  <div class="modal-body">
                      <div class="alloff"><b><?php echo AO_question;?></b></div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> <?php echo AO_cancel;?></button>
                      <button type="button" id="alloff" class="btn btn-danger"><i class="fa fa-power-off"></i> <?php echo AO_all_off;?></button>
                  </div>
              </div>
          </div>
      </div>


      <!-- Main Content -->
      <div class="container-fluid">
          <div class="side-body">
            <div id="top"></div>




      

 
