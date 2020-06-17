<!DOCTYPE html>
<!--
Template Name: Gogopo
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>Gogopo</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="gogopo/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<style type="text/css">
  .scroll{
    overflow: auto;
    height: 700px;
  }
</style>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('banner.png');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html"><img src="logo.png"> CovidLand</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="/">Home</a></li>
          <li><a class="drop" href="#">Pages</a>
           
            <ul>
              <li><a href="#">Level 2</a></li>
              <li><a class="drop" href="#">Level 2 + Drop</a>
                <ul>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                  <li><a href="#">Level 3</a></li>
                </ul>
              </li>
              <li><a href="#">Level 2</a></li>
            </ul>
          </li>
          <li><a href="#">Link Text</a></li>
          <li><a href="#">Link Text</a></li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper">
    <article id="pageintro" class="hoc clear"> 
      <!-- ################################################################################################ -->
     <center > <h4> DATA Penyebaran Virus Covid-19 Provinsi Indonesia</h4>
        <div class="scroll">
    <table class="table table-dark">
         <thead ><br>
         
            <div class="head bg-danger ">

             
              </center>
              </div><br>
                      <tr>
                          <th scope="col"><<h4>No</h4></th>
                          <th scope="col"><h4>Provinsi</h4></th>
                          <th scope="col"><h4>Positif</h4></th>
                          <th scope="col"><h4>Sembuh</h4></th>
                          <th scope="col"><h4>Meninggal</h4></th>
                          <th scope="col"><h4>kode Provinsi</h4></th>
                         
                      </tr>
                  </div>
              </div>
          </thead>

          <tbody >
             @php
              $no =0;
             @endphp
             @foreach ($data as $datas)
             @php
              $no++;
             @endphp   
               <tr>
                 <strong><b><th scope="row" class="warna">{{$no}}</th>
                 <td>{{ $datas['attributes']['Provinsi'] }}</td>
                 <td>{{ $datas['attributes']['Kasus_Posi'] }}</td>
                 <td>{{ $datas['attributes']['Kasus_Semb'] }}</td>
                 <td>{{ $datas['attributes']['Kasus_Meni'] }}</td>
                 <td>{{ $datas['attributes']['Kode_Provi'] }}</td>
                </strong></b>


             </tr>
           @endforeach 
         
        </tbody>
    </table>
    </div><br>  <br>  
    <h1><p><b>  <a href="/grafik">liat Grafik</a></b> </p></h1>
    </article>
  </div>
  <!-- ################################################################################################ -->
</div>

<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left"> create this website dzikrihuda</p>
   
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="gogopo/layout/scripts/jquery.min.js"></script>
<script src="gogopo/layout/scripts/jquery.backtotop.js"></script>
<script src="gogopo/layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>