<?php 
 // error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
 include "admin/koneksi/koneksi.php"

 ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E-BUKU TAMU</title>
  <style type="text/css">
    
    body{
      font-family: arial;
      font-size: 14px;
      background-color: #9fe9ad;


            
    }
    
    #canvas{
      
      margin: 0 auto;
      border: 7px solid #8b0304;
    }

     #isi{
      min-height: 480px;
      padding: 10px;
            margin-left: auto;
            margin-right: auto;
      
    }

    #isi2{
             padding: 10px;
            margin-left: auto;
            margin-right: auto;
      
    }

     #isi3{
             padding: 10px;
            margin-left: auto;
            margin-right: auto;
            height: 30px;
      
    }

    .tabel td{ font-size: 16px;  }
      .tabel th{ font-size: 16px;  }


   </style> 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <link rel="shortcut icon" type="image/png" href="logo/kemenag-ri.png"/>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
 <link rel="stylesheet" type="text/css" href="sw/dist/sweetalert.css">
  <script type="text/javascript" src="sw/dist/sweetalert.min.js"></script>
 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

 <script src="bower_components/jquery/dist/jquery.min.js"></script> 

<!-- awal refresh otomatis dengan javascript-->

<script type="text/javascript" src="jquery.min.js"></script>
<script type="text/javascript">
var otomatis = setInterval(
function ()
{
$('#div').load('isi.php').fadeIn("slow");
}, 1000);
</script>

<!-- akhir refresh otomatis dengan javascript-->

</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

 
<body class="hold-transition skin-blue layout-top-nav">

<div id="canvas">
 

 <?php 

    

    $sql = $koneksi->query("select * from tb_profile ");

    $data = $sql->fetch_assoc();

    
    

  ?>   
 

<div class="wrapper">

  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div id="isi2">
        <div class="navbar-header">
          <a href="index.php" title="">

          <img src="admin/images/<?php echo $data['foto'] ?>" alt="" style="padding: 5px; box-shadow: 2px 2px 2px #fff; " width="110" height="100">
          </a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>




        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
             
            <li><a href="index.php" class="navbar-brand" style="padding: 5px; margin-left: 20px; margin-top: 10px; margin-bottom: px; text-shadow: 4px 4px 4px #000000;"><b><br><?php echo $data['nama_perusahaan'] ?> </b> </a></li>
            
          </ul>
          
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">

<?php

        $satu_hari        = mktime(0,0,0,date("n"),date("j"),date("Y"));
       
          function tglIndonesia($str){
             $tr   = trim($str);
             $str    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
             return $str;
         }
            
       ?>

                <br>
               <b style="background-color:  #a50506; color: white; float: right; font-size: 16px; font-weight: bold; padding: 10px; text-align: center; box-shadow: 5px 5px #d45657; text-shadow: 4px 4px 4px #000000;" >

                <?php
                 
                  echo "<b>".tglIndonesia(date('D, d F Y', $satu_hari))."</b> ";
                  date_default_timezone_set('Asia/Jakarta');
                  echo "<br>";
                  echo "<strong  id='clock'></strong>";


                  

                ?> 

                </b>
              </a>
              
            </li>
            <!-- /.messages-menu -->

            <!-- Notifications Menu -->
           
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>
  <!-- Full Width Column -->


  <div class="content-wrapper">
    <div id="isi">
       <br>
      <div class="col-md-12">

              <?php include "isi.php" ?>
      
                  
                                  
    </div>
    <!-- /.container -->
  </div>
	

  

<script type="text/javascript">
    var detik = <?php echo date('s'); ?>;
    var menit = <?php echo date('i'); ?>;
    var jam   = <?php echo date('H'); ?>;
     
    function clock()
    {
        if (detik!=0 && detik%60==0) {
            menit++;
            detik=0;
        }
        second = detik;
         
        if (menit!=0 && menit%60==0) {
            jam++;
            menit=0;
        }
        minute = menit;
         
        if (jam!=0 && jam%24==0) {
            jam=0;
        }
        hour = jam;
         
        if (detik<10){
            second='0'+detik;
        }
        if (menit<10){
            minute='0'+menit;
        }
         
        if (jam<10){
            hour='0'+jam;
        }
        waktu = hour+':'+minute+':'+second;
         
        document.getElementById("clock").innerHTML = waktu;
        detik++;
    }
 
    setInterval(clock,1000);
</script>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div id="isi3">

        <div  class="col-md-1">
      <a href="?page=spk" title="Silahkan Klik Untuk Melakukan Survey"> <strong style="font-size: 16px; background-color: #a50506; color: white; padding: 10px; box-shadow: 3px 3px #d45657;">IKM</strong></a>
    </div>

      <div  class="col-md-11">
        
       </strong><marquee style="text-shadow: 4px 4px 4px #000000; font-weight: bold; font-size: 16px;">
         

         <?php 

          $berita = $koneksi->query("select * from tb_berita ");

          while ($t_berita = $berita->fetch_assoc()) {
            
        
           
          
          
          
         ?>

             <ul style="display: inline-table;">
               <li style="list-style: none;"><?php echo $t_berita['judul']; ?></li>
             </ul>

         <?php   } ?>


       </marquee>

       

       
    </div>

    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->

<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</body>
</html>