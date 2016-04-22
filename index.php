<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Stylish Portfolio - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>

</style>

<body>

    <!-- Navigation -->
    <nav role="navigation" class="navbar navbar-custom" style="background-color:pink;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand"><img src="img/logo.png" height="40"></a>
            </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="index.php">หน้าหลัก</a></li>
                    <li><a href="search.php">ค้นหาข้อมูล</a></li>

                    <li><a href="maps.php">แผนที่แหล่งข้อมูลท้องถิ่น</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="administrator.php">เข้าสู้ระบบ<b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="administrator.php?ac=login">เข้าสู่ระบบ</a></li>
                            <li><a href="administrator.php?ac=login">สมัครสมาชิก</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!--หน้าเมนูด้านข้าง-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>ระบบฐานข้อมูลการท่องเที่ยวอำเภอหางดง จังหวัดเชียงใหม่</h1>
            </div>
        </div>

            <div class="row">
                <div class="col-md-12">
                    <ol class="breadcrumb breadcrumb-arrow">
                        <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> หน้าหลัก</a></li>
                        <!--<li class="active"><span><i class="glyphicon glyphicon-list-alt"></i> ผู้ดูแลระบบ </span></li>-->
                    </ol>
                </div>
            </div>

            <div class="row">
            <div class="col-md-3">
                <h4 class="content-row-title">เมนูหลัก </h4>
                <div class="list-group">
                    <a href="index.php" class="list-group-item"><i class="glyphicon glyphicon-home"></i>  หน้าหลัก</a>
                    <a href="maps.php" class="list-group-item"><i class="glyphicon glyphicon-map-marker"></i>  แผนที่พิกัดแหล่งข้อมูลท้องถิ่น</a>
                    <a href="search.php" class="list-group-item"><i class="glyphicon glyphicon-search"></i>  ค้นหาข้อมูล</a>
                </div>
                <h4 class="content-row-title"> ข้อมูลตามหมวดหมู่ </h4>
                <div class="list-group">

                        <a href="index.php" class="list-group-item">สถานที่ท่องเที่ยวเชิงวัฒนธรรม</a>
                        <a href="index.php" class="list-group-item">สถานที่ท่องเที่ยวเชิงธรรมชาติ</a>
                        <a href="index.php" class="list-group-item">สินค้าหัตถกรรมประจำหางดง</a>

                </div>
            </div>
                <div class="col-md-9">
                    <h4 class="content-row-title">รายการข้อมูลทั้งหมด </h4>
                    <?php
                      // Connects to your Database
                      include 'connect.php';

                     $sql = mysql_query(" SELECT *
                     FROM addData
                     WHERE idTypeTourism='2' ")
                      or die(mysql_error());

                      while($mn = mysql_fetch_array( $sql ))
                      {
                        echo "<div class='row'>"."<div class='col-md-7'>";
                    echo "<iframe width='600' height='300' ".$mn['video']."frameborder='0' allowfullscreen>"."</iframe>";
                    echo " </div> ";
                    echo "<div class='col-md-5'> <h3>".$mn['nameTourism']."</h3>";
                    echo "<p>".$mn['detailTourism']."</p>";
                    echo " <a class='btn btn-primary' href='post3.html'> View Project <span class='glyphicon glyphicon-chevron-right'>"."</span>"."</a>";
                    echo "</div>"."</div>"."<hr>";

                    }
                ?>
            </div>
        </div>
    </div>



    <!-- Callout -->


    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Stylish Portfolio - Start Bootstrap Theme</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/stylish-portfolio.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <style>

    </style>

    <body>

    <!-- Navigation -->
    <nav role="navigation" class="navbar navbar-custom" style="background-color:pink;">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button data-target="#bs-content-row-navbar-collapse-5" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand"><img src="img/logo.png" height="40"></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="bs-content-row-navbar-collapse-5" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">

                    <li><a href="index.php">หน้าหลัก</a></li>
                    <li><a href="search.php">ค้นหาข้อมูล</a></li>

                    <li><a href="maps.php">แผนที่แหล่งข้อมูลท้องถิ่น</a></li>
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="administrator.php">เข้าสู้ระบบ<b class="caret"></b></a>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="administrator.php?ac=login">เข้าสู่ระบบ</a></li>
                            <li><a href="administrator.php?ac=login">สมัครสมาชิก</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <!--หน้าเมนูด้านข้าง-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>ระบบฐานข้อมูลการท่องเที่ยวอำเภอหางดง จังหวัดเชียงใหม่</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb breadcrumb-arrow">
                    <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> หน้าหลัก</a></li>
                    <!--<li class="active"><span><i class="glyphicon glyphicon-list-alt"></i> ผู้ดูแลระบบ </span></li>-->
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <h4 class="content-row-title">เมนูหลัก </h4>
                <div class="list-group">
                    <a href="index.php" class="list-group-item"><i class="glyphicon glyphicon-home"></i>  หน้าหลัก</a>
                    <a href="maps.php" class="list-group-item"><i class="glyphicon glyphicon-map-marker"></i>  แผนที่พิกัดแหล่งข้อมูลท้องถิ่น</a>
                    <a href="search.php" class="list-group-item"><i class="glyphicon glyphicon-search"></i>  ค้นหาข้อมูล</a>
                </div>
                <h4 class="content-row-title"> ข้อมูลตามหมวดหมู่ </h4>
                <div class="list-group">

                    <a href="index.php" class="list-group-item">สถานที่ท่องเที่ยวเชิงวัฒนธรรม</a>
                    <a href="index.php" class="list-group-item">สถานที่ท่องเที่ยวเชิงธรรมชาติ</a>
                    <a href="index.php" class="list-group-item">สินค้าหัตถกรรมประจำหางดง</a>

                </div>
            </div>
            <div class="col-md-9">
                <h4 class="content-row-title">รายการข้อมูลทั้งหมด </h4>
                <?php
                      // Connects to your Database
                      include 'connect.php';

                     $sql = mysql_query(" SELECT *
                     FROM addData
                     WHERE idTypeTourism='2' ")
                      or die(mysql_error());

                      while($mn = mysql_fetch_array( $sql ))
                      {
                        echo "<div class='row'>"."<div class='col-md-3'>";
                echo "<iframe width='200' height='50' ".$mn['video']."frameborder='0' allowfullscreen>"."</iframe>";
                echo " </div> ";
                echo "<div class='col-md-3'> <h3>".$mn['nameTourism']."</h3>";
                echo "<p>".$mn['detailTourism']."</p>";
                echo " <a class='btn btn-primary' href='post3.html'> View Project <span class='glyphicon glyphicon-chevron-right'>"."</span>"."</a>";
                echo "</div>"."</div>"."<hr>";

            }

            ?>
        </div>
    </div>
    </div>


    <!-- Map + direction-->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <section id="contact" class="map">
                    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
                    <br />
                    <small>
                        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
                    </small>
                    </iframe>
                </section>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Start Bootstrap</strong>
                    </h4>
                    <p>3481 Melrose Place<br>Beverly Hills, CA 90210</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i>  <a href="mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script>
        // Closes the sidebar menu
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

        // Opens the sidebar menu
        $("#menu-toggle").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });

        // Scrolls to the selected menu item on the page
        $(function() {
            $('a[href*=#]:not([href=#])').click(function() {
                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    if (target.length) {
                        $('html,body').animate({
                            scrollTop: target.offset().top
                        }, 1000);
                        return false;
                    }
                }
            });
        });
    </script>

    </body>

    </html>
