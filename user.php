<!doctype html>
<html lang="en">
<head>
    <?php
$db = mysqli_connect("127.0.0.1","root","root","ads_db") ;
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 /* $fio = $_GET['fio'];
  if (isset($fio)) {
   mysqli_query("INSERT INTO `reqs` (`fio`) VALUES ('" . $fio . "')");
   var_dump($fio);
}*/

?>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
	<title>Paper Dashboard by Creative Tim</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <?
    $numberof = mysqli_query($db, "SELECT MAX(id) FROM reqs");
   $numberof = mysqli_fetch_array($numberof);  
    echo $numberof[0];
    ?>
</head>
<body>

<div class="wrapper">
	<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->


        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Zhlmsv ADS
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="dashboard.html">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="active">
                    <a href="user.html">
                        <i class="ti-user"></i>
                        <p>Заявки</p>
                    </a>
                </li>
                <li>
                    <a href="table.html">
                        <i class="ti-view-list-alt"></i>
                        <p>Записи вызовов</p>
                    </a>
                </li>
                
                <li>
                    <a href="maps.html">
                        <i class="ti-map"></i>
                        <p>Карта</p>
                    </a>
                </li>
                <li>
                    <a href="notifications.html">
                        <i class="ti-bell"></i>
                        <p>Входящие вызовы/заявки</p>
                    </a>
                </li>
                
            </ul>
        </div>
    </div>

   <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" href="#">ADS</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
                                <p>Аналiз</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
                                    <p>Заявки/Виклики</p>
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Заявка 1</a></li>
                                <li><a href="#">Заявка/Виклик 2</a></li>
                                <li><a href="#">Заявка/Виклик 3</a></li>
                                <li><a href="#">Заявка/Виклик 4</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="ti-settings"></i>
                                <p>Налаштування</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="card card-user">
                            


                            <div class="image">
                                <img src="assets/img/background.jpg" alt="...">
                            </div>
                          
                                


                            <div class="content">
                                <div class="author">
                                    <img class="avatar border-white" src="assets/img/faces/face-2.jpg" alt="...">
                                  <h4 class="title"><?

                                  //FIO
                                    $fio_head = mysqli_query($db, "SELECT `fio` FROM `reqs` WHERE `id` = ".$numberof[0]." LIMIT 0, 30");
                                    $fio_head = mysqli_fetch_array($fio_head);
                                    echo $fio_head[0];?>
<br />
                                  </h4>
                                </div>
                                <p class="description text-center">
                                    <?

                                        //Коментарий
                                    $comm = mysqli_query($db, "SELECT `comm` FROM `reqs` WHERE `id` = ".$numberof[0]." LIMIT 0, 30");
                                    $comm = mysqli_fetch_array($comm);
                                    echo $comm[0];?>
                                </p>
                            </div>
                            <hr>
                            <div class="text-center">
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-1">
                                        <h5>Scinse<br /><small><?

                                        //Дата создания заявки
                                    $dataofstart = mysqli_query($db, "SELECT `dataofstart` FROM `reqs` WHERE `id` = ".$numberof[0]." LIMIT 0, 30");
                                    $dataofstart = mysqli_fetch_array($dataofstart);
                                    echo $dataofstart[0];?>
                                        

                                    </small></h5>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <h5>Status<br /><small><?


                                        //Статус заявки
                                    $status = mysqli_query($db, "SELECT `status` FROM `reqs` WHERE `id` = ".$numberof[0]." LIMIT 0, 30");
                                    $status = mysqli_fetch_array($status);
                                    echo $status[0];?></small></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Last requests</h4>
                            </div>
                            <div class="content">
                                <ul class="list-unstyled team-members">
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="assets/img/faces/face-0.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                        <?
                                  //FIO
                                    $fio_head = mysqli_query($db, "SELECT `fio` FROM `reqs` WHERE `id` = ".($numberof[0]-1)." LIMIT 0, 30");
                                    $fio_head = mysqli_fetch_array($fio_head);
                                    echo $fio_head[0];?>
                                                        <br />
                                                        <span class="text-success"><small><?


                                        //Статус заявки
                                    $status = mysqli_query($db, "SELECT `status` FROM `reqs` WHERE `id` = ".($numberof[0]-1)." LIMIT 0, 30");
                                    $status = mysqli_fetch_array($status);
                                    echo $status[0];?></small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="assets/img/faces/face-1.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                         <?

                                  //FIO
                                    $fio_head = mysqli_query($db, "SELECT `fio` FROM `reqs` WHERE `id` = ".($numberof[0]-2)." LIMIT 0, 30");
                                    $fio_head = mysqli_fetch_array($fio_head);
                                    echo $fio_head[0];?>
                                                        <br />
                                                        <span class="text-success"><small><?


                                        //Статус заявки
                                    $status = mysqli_query($db, "SELECT `status` FROM `reqs` WHERE `id` = ".($numberof[0]-2)." LIMIT 0, 30");
                                    $status = mysqli_fetch_array($status);
                                    echo $status[0];?></small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="avatar">
                                                            <img src="assets/img/faces/face-3.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                                        </div>
                                                    </div>
                                                    <div class="col-xs-6">
                                                         <?

                                  //FIO
                                    $fio_head = mysqli_query($db, "SELECT `fio` FROM `reqs` WHERE `id` = ".($numberof[0]-3)." LIMIT 0, 30");
                                    $fio_head = mysqli_fetch_array($fio_head);
                                    echo $fio_head[0];?>
                                                        <br />
                                                        <span class="text-success"><small><?


                                        //Статус заявки
                                    $status = mysqli_query($db, "SELECT `status` FROM `reqs` WHERE `id` = ".($numberof[0]-3)." LIMIT 0, 30");
                                    $status = mysqli_fetch_array($status);
                                    echo $status[0];?></small></span>
                                                    </div>

                                                    <div class="col-xs-3 text-right">
                                                        <btn class="btn btn-sm btn-success btn-icon"><i class="fa fa-envelope"></i></btn>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Create req</h4>
                            </div>
                            <div class="content">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>FIO</label>
                                                <input id="fio" name="fio" type="text" class="form-control border-input"  placeholder="Company">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Status</label>
                                                <input id="status" name="status" class="form-control border-input"  placeholder="Status">
                                            </div>
                                        </div>
                                    </div>

                                 

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Adress</label>
                                                <input id="adress" name="adress" type="text" class="form-control border-input" placeholder="Home Address" value="">
                                            </div>
                                        </div>
                                    </div>
                                   

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Note</label>
                                                <textarea id="comm" name="comm" rows="5" class="form-control border-input" placeholder="Here can be your description" value="Mike"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class='col-sm-6'>
          
               <div class='input-group date' id='datetimepicker1' name="dateofstart">
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            
        
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <input type="button" name="Done" class="btn btn-info btn-fill btn-wd" value="Done" onclick="addreq()">

                                        
                                    </div>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>

                        <li>
                            <a href="http://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                               Blog
                            </a>
                        </li>
                        <li>
                            <a href="http://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
				<div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>   
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="assets/js/paper-dashboard.js"></script>

    <!--Main scripts-->
     <script src="assets/js/reqs.js" type="text/javascript"></script>


	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>


</html>
