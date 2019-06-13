<!DOCTYPE html>
<html>
<head>
  <title>TDT interior</title>
  <link rel="stylesheet" type="text/css" href="Bản-Chính.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
</head>
<style>
  body{
  width: 100%;
  padding: 0;
  margin: 0;
}
.navbar{
  background: url(images/logo.png);
}
.navbar .collapse{
  margin-left: 20%;
}
.navbar .collapse ul{
  list-style: none;
  position: relative;
}
.navbar .collapse ul li{
  float: left;
  padding: 10px;
  margin-left: 20px;
}
.navbar .collapse ul li a{
  color: black;
  font-family: bolder;
}
.navbar .collapse ul li a:hover{
  color: red;
}
.navbar .collapse ul ul{
  width: 250px;
  display: none;
  position: absolute;
  background: url(images/logo.png);
  
}
.navbar .collapse ul ul li{
  float: none;
  clear: both;
}
.navbar .collapse ul ul li a{
  margin-left: 50px;
}
.navbar .collapse ul li:hover >ul{
  display: block;
}
@media (max-width: 992px)
{
  .navbar .collapse ul ul {
    width: 1000px;
    margin-left: -10%;
  }
  .navbar .collapse{
  margin-left: 0%;
  }
  .navbar .collapse ul ul li a{
    margin-left: 10%;
  }
}

.navbar{
  z-index: 1;
}

.container-fluid .row .col p{
  font-size: 15px;
  margin-left: 20%;
}
.container-fluid .row .col h2{
  text-align: center;
  margin-left: 20%;
}
.container-fluid .row .col h5{
  text-align: center;
  font-size: 15px;
  margin-left: 20%;
}
.container-fluid .row .col img{
  margin-top: 10%;
  
}

.header{
  width: 100%;
  text-align: center;
  border-bottom: 1px solid;
  border-top: 1px solid;
  font-style: italic;
  font-family:Chiller;
}
.header a{
  font-size: 30px;
}

.content{
  width: 100%;
  border-style: outset;
  background: black;
  color: white;
}
.content a{
  font-size: 20px;
}

.whyus-wrap .container .row .item h3{
  text-align: center;
}

.container .row .panel{
  border: 1px solid #CCCCCC;
}
.container .row .panel .panel-footer{
  border-top: 1px solid #CCCCCC;
}

.middle{
  position: absolute;
  top: 90%;
  transform: translateY(-50%);
  width: 100px;
  text-align: center;
  position: fixed;
  z-index: 2;
  margin-left: 1%;
}
.btn{
  display: inline-block;
  width: 50px;
  height: 50px;
  background: #f1f1f1;
  margin: 10px;

  border: 1px solid #3498DB;
  box-shadow: 0 5px 15px -5px #00000070;
  overflow: hidden;
  position: relative;
}
.btn i{
  line-height: 40px;
  font-size: 26px;
  transition: 0.2s linear;
}
.btn:hover i{
  transform: scale(1.3);
  color: #f1f1f1;
}
.btn::before{
  content: "";
  position: absolute;
  width: 120%;
  height: 120%;
  background: white;
  transform: rotate(45deg);
  left: -110%;
  top: 90%;
}
.btn:hover::before{
  animation: aaa 0.7s 1;
  top: -10%;
  left: -10%;
}
@keyframes aaa {
  0%{
    left: -110%;
    top: 90%;
  }50%{
    left: 10%;
    top: -30%;
  }100%{
    top: -10%;
    left: -10%;
  }
}
.control h5{
  text-align: center;
  margin-top: 5%;
}
.End{
  margin-top: 5%;
  background: url(images/logo.png);
}
.End .row .col-sm-3 .end1 h4{
  text-align: center;
  margin-top: 5%;
}
.End .row .col-sm-3 .end1 p{
  margin-left: 10%;
}
.End .row .col-sm-3 .end2 h4{
  text-align: center;
  margin-top: 5%;
}
.End .row .col-sm-3 .end2 p{
  margin-left: 40%;
  margin-top: 10%;  
}
.End .row .col-sm-3 .end2 a{
  color: black;
}
.End .row .col-sm-3 .end3 h4{
  text-align: center;
  margin-top: 5%;
}
.End .row .col-sm-3 .end3 p{
  margin-left: 40%;
  margin-top: 10%;
}
.End .row .col-sm-3 .end3 a{
  color: black;
}
.End .row .col-sm-3 .end4 h4{
  text-align: center;
  margin-top: 5%;
}
.End .row .col-sm-3- .end4 {
  float: left;
}
.End .row .col-sm-3 .end4 span{
  margin-left: 20px;
  text-align: center;
  color: black;
}

.product .col-sm-4 img:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
</style>
<body>

  <!-- star menu -->
  <nav class="navbar navbar-expand-md " >
        <a class="navbar-brand" href="Bản-Chính.html">
          <img src="images/1.png" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon bg-dark"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
              
              <li class="nav-item"><a href="gioithieu.html">GIỚI THIỆU</a></li>
              <li class="nav-item"><a href="">SẢN PHẨM</a>
                <ul class="navbar-nav">
                  <li class="nav-item"><a href="tubep.html">BẾP-ĐẢO BẾP</a></li>
                  <li class="nav-item"><a href="tuquanao.html">TỦ QUẦN ÁO</a></li>
                  <li class="nav-item"><a href="sofa.html">BÀN-GHẾ-SOFA</a></li>
                  <li class="nav-item"><a href="ketivi.html">KỆ TIVI</a></li>
                  <li class="nav-item"><a href="giuongngu.html">GIƯỜNG NGỦ</a></li>
                  <li class="nav-item"><a href="sango.html">SÀN GỖ</a></li>
                  <li class="nav-item"><a href="cua.html">CỬA</a></li>
                </ul>
              </li class="nav-item">
              <li class="nav-item"><a href="">TIN TỨC</a></li>
              <li class="nav-item"><a href="">LIÊN HỆ</a></li>
              <li class="nav-item"><a href="">CÔNG TRÌNH HOÀN THÀNH</a></li>
            </ul>
        </div>  
  </nav>
  <!--end menu -->

  <!--star slides -->
  <div id="demo" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
        </ul>
  
      <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slide1.png" alt="Los Angeles" width="100%" height="50%">
            </div>
            <div class="carousel-item">
                <img src="images/slide2.png" alt="Chicago" width="100%" height="50%">
            </div>
            <div class="carousel-item">
                <img src="images/slide3.png" alt="New York" width="100%" height="50%">
            </div>
            <div class="carousel-item">
                <img src="images/slide4.png" alt="New York" width="100%" height="50%">
            </div>
        </div>
  
    <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
  </div>
  <!-- end slides -->

  <!-- star introduction -->
  <div class="container-fluid">
      <div class="row" style="background-image: url(images/logo.png);">
          <div class="col">
            <h2><font>Thông tin về</font></h2>
            <h5><font>Tâm Duy Thịnh - TDT</font></h5>
            <p><font>Tâm Duy Thịnh - TDT là đơn vị thiết kế và thi công nội thất, xây dựng chuyên nghiệp với nhiều năm kinh nghiệm. Với mong muốn mang lại sự độc đáo, tiện nghi cho khách hàng. Toàn bộ cán bộ và nhân viên công ty luôn nỗ lực hoàn thiện và gửi gắm tinh tế và từng dự án thi công.<br>
            Công ty chúng tôi chuyên thiết kế nội thất cho văn phòng, nhà hàng, quán café, showroom, căn hộ...với kinh nghiệm và đội ngũ thiết kế, thi công lành nghề, sáng tạo chúng tôi mang đến giá trị tốt nhất cho từng dự án sau khi hoàn thiện.</font></p></h4>
          </div>
          <div class="col">
              <img src="images/gioithieu.jpg" alt="" width="80%" height="60%">
          </div>
      </div>
  </div>
  <!-- end introduction -->

  <!--star slogant -->
  <div class="header">
    <a>Nếu bạn trao cho tôi 50% sự tin tưởng, tôi sẽ trao bạn 100% sự hài lòng</a>
  </div>
  <!-- end slogant -->

  <!-- star content -->
  <section class="whyus-wrap">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-4">
          <div class="item m-2">
            <font color="red">
              <i class="fab fa-whatsapp" style="font-size: 100px; margin-left: 35%;"></i>
            </font>              
            <h3>Tư vấn thiết kế</h3>
            <span>Với nhiều năm kinh nghiệm và lòng yêu nghề, chúng tôi mang lại cho khách hàng giải pháp tiết kiệm và tối ưu nhất cho ngồi nhà của bạn.</span>
           </div>
        </div>
      <div class="col-md-4">
        <div class="item m-2">
          <font color="red">
            <i class="fas fa-people-carry" style="font-size: 100px; margin-left: 35%;"></i>
          </font>
            <h3>Đội ngũ chất lượng</h3>
            <span>Với đội ngũ thợ nhiều năm kinh nghiệm,chuyên môn trong lĩnh vực thiết kế và thi công nội thất.<br> Luôn sẵn sàng đáp ứng yêu cầu của khách hàng trong quá trình thi công công trình.</span>
        </div>
      </div>
      <div class="col-md-4">
        <div class="item m-2">
          <font color="red">
            <i class="fab fa-whmcs" style="font-size: 100px; margin-left: 35%;"></i>
          </font>
          
          <h3>Thi công nhanh</h3>
          <span> Với máy móc hiện đại, quy trình gia công hợp lý giúp đẩy nhanh tiến độ thi công.<br> Thái độ vui vẽ, nhiệt tình, trung thực, thẳng thắng sẽ tạo nên phong cách làm việc chuyên nghiệp.<br> Luôn sẵn sàng thiết kế và thi công nhanh chóng và đáp ứng mọi nhu cầu của khách hàng.</span>
        </div>
      </div>
    </div>
  </section>
  <!-- end content -->

  <div class="content">
    <a>Sản phẩm dành cho bạn</a>
  </div>



  <!--list product-->
  <div class="product">
    <div class="row">
      <div class="col-sm-8" style="margin-left: 5%;">
        <div class="row">
          <div class="col-sm-4">
            <img src="images/noithat1.png" style="width: 100%; height: 80%;">
            <a href="noithatphongnho.html" style="color: black;">Cách bố trí nội thất căn phòng nhỏ</a>
          </div>
          <div class="col-sm-4">
            <img src="images/bep1.jpg" style="width: 100%; height: 80%;">
            <a href="bep.html" style="text-align: center; color: black;">Mẫu bếp tạo nên ấn tượng cho căn nhà bạn</a>
          </div>
          <div class="col-sm-4">
            <img src="images/chungcu1.jpg" style="width: 100%; height: 80%;">
            <a href="chungcu.html" style="text-align: center; color: black;">Thiết kế nội thất chung cư</a>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
            <img src="images/phonglam1.jpg" style="width: 100%; height: 80%;">
            <a href="vanphong.html" style="text-align: center; color: black;">Nội thất văn phòng làm việc</a>
          </div>
          <div class="col-sm-4">
            <img src="images/phongngu1.jpg" style="width: 100%; height: 80%;">
            <a href="phongngu.html" style="text-align: center; color: black;">Phòng nghủ hiện đại, sang trọng, đẹp mê ly</a>
          </div>
          <div class="col-sm-4">
            <img src="images/phongkhach1.jpg" style="width: 100%; height: 80%;">
            <a href="phongkhach.html" style="text-align: center; color: black;">Thiết kế phòng khách đẹp, sang trọng</a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <iframe width="99%" height="50%" src="https://www.youtube.com/embed/pYAXsbsFBC8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="control">
          <a href="https://www.facebook.com/Nội-Thất-TÂM-DUY-THỊNH-480083132406092">
            <h5>
              Hãy truy cập fanpage facebook để biết thêm chi tiết
            </h5>
          </a>
          <a href="https://www.facebook.com/Nội-Thất-TÂM-DUY-THỊNH-480083132406092">
            <i class="far fa-hand-point-down" style="margin-left: 50%; font-size: 150%"></i>
          </a>
        </div>
        <div id="fb-root"></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0';
                fjs.parentNode.insertBefore(js, fjs);
              }(document, 'script', 'facebook-jssdk'));
            </script>
            <div class="fb-page" data-href="https://www.facebook.com/N%E1%BB%99i-Th%E1%BA%A5t-T%C3%82M-DUY-TH%E1%BB%8ANH-480083132406092/" data-tabs="timeline" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
              <blockquote cite="https://www.facebook.com/N%E1%BB%99i-Th%E1%BA%A5t-T%C3%82M-DUY-TH%E1%BB%8ANH-480083132406092/" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/N%E1%BB%99i-Th%E1%BA%A5t-T%C3%82M-DUY-TH%E1%BB%8ANH-480083132406092/">  Nội Thất TÂM DUY THỊNH
                </a>
              </blockquote>
            </div>
        </div>
      </div>
  


   


  

  <div class="End">
    <div class="row">
      <div class="col-sm-3 ">
        <div class="end1">        
          <h4>GIỚI THIỆU</h4><br>
          <p>
            <strong>
              TDT interior
            </strong>
            <font style="font-size:13px;">
             Với kinh nghiệm nhiều năm trong lĩnh vực thiết kế, sản xuất và thi công lắp đặt hoàn thiện nội thất trọn gói với “ chìa khóa trao tay” đến khách hàng. Chúng tôi chuyên sâu trong lĩnh vực sản xuất nội thất và các giải pháp thi công tối ưu . Bao gồm sản xuất và cung cấp Đồ gỗ nội thất và trang trí như gỗ tự nhiên, gỗ công nghiệp… với nhà xưởng rộng và máy móc hiện đại sẽ mang lại chất lượng và tiến độ cao nhất.
            </font>
          </p>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="end2">
          <h4>DANH MỤC</h4>
          <p>
            <strong>
              <a href="">Liên Hệ</a><br> <br>
              <a href="">Sản Phẩm</a> <br> <br>
              <a href="">Tin Tức</a>
            </strong>
          </p>
        </div>
      </div>
      <div class="col-sm-3 ">
        <div class="end3">
          <h4>LIÊN KẾT</h4>
          <p>
            <strong>
              <a href="">Liên Hệ</a> <br> <br>
              <a href="gioithieu.html">Giới Thiệu</a>
            </strong>
          </p>
        </div>
      </div>
      <div class="col-sm-3 ">
        <div class="end4">
          <h4>LIÊN HỆ</h4>
          <div class="icon1">
            <a href="https://www.google.com/maps/place/Duy+Th%E1%BB%8Bnh/@16.0036519,108.2266638,81m/data=!3m1!1e3!4m18!1m12!4m11!1m3!2m2!1d108.226655!2d16.0036878!1m6!1m2!1s0x31421a0e302a5a37:0x272583c7cfa21f7f!2zRHV5IFRo4buLbmgsIEjDsmEgWHXDom4sIEPhuqltIEzhu4csIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!2m2!1d108.2266392!2d16.0036978!3m4!1s0x31421a0e302a5a37:0x272583c7cfa21f7f!8m2!3d16.0036978!4d108.2266392"><i class="fas fa-map-marked-alt" style="font-size: 20px; color: red;"></i>
            <span>Lô B1-32. KDT Sinh Thái Ven Sông Hòa Xuân, Phường Hòa Xuân, Quận Cẩm Lệ, TP Đà Nẵng</span></a>
          </div><br>
          <div class="icon2">
            <i class="fas fa-phone" style="font-size: 20px; color: red;"></i>
            <span>0905510046 / 0911455001</span>
          </div>
          <div class="icon3"> <br>
            <a href=""><i class="fas fa-envelope" style="font-size: 20px; color: red;"></i>
            <span>saletamduythinh@gmail.com</span></a>
          </div><br>
          <div class="icon4">
            <a href="#"><i class="fas fa-link" style="font-size: 20px; color: red;"></i>
            <span>tamduythinh.vn</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>

     
    <div class="middle">
      <div class="row">
      <a class="btn" href="https://www.facebook.com/messages/t/480083132406092">
        <i class="fab fa-facebook-messenger" style="color:#3498DB;"></i>
      </a>
      <a class="btn" href="#">
        <i class="fas fa-envelope" style="color:#3498DB;"></i>
      </a>
    </div>
  


   


</body>
</html>