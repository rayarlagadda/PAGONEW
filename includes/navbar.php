<body>

  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top" style="background: #217dbd;">
    <div class="container">

      <div class="logo float-left">
        <!-- <h1 class="text-light"><a href="#header"><span>PAGO</span></a></h1> -->
        <a href="#intro" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid lgstle"></a>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul id="myDIV">
          <li class="lit active"><a href="#intro">Home</a></li>
          <li class="lit"><a href="#about">About Us</a></li>
          <li class="lit"><a href="#services">Services</a></li>
          <li class="lit"><a href="business-intelligence.php">Business Intelligence Services</a></li>
          <li class="lit"><a href="career.php">Career</a></li>
          <li class="lit"><a href="job.php">Job</a></li>
          <li class="lit"><a href="available.php">available</a></li>

          <!-- <li><a href="#team">Team</a></li> -->
          <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li class="lit"><a href="#contact">Contact Us</a></li>
         
          <li class="sclIcn" style="background: #fff !important;"><a href="https://twitter.com/PagoAnalytics" class="twitter icns" ><i class="fa fa-twitter" style="color: #007bff ;"></i></a></li>
             <li class="sclIcn" style="background: #fff !important;"> <a href="https://www.facebook.com/Pago-Analytics-107485520954349/?ti=as" class="facebook icns"><i class="fa fa-facebook" style="color: #007bff;"></i></a></li>
              <li class="sclIcn" style="background: #fff !important;"><a href="https://www.instagram.com/pagoanalytics/?igshid=mcacy13vlw43" class="instagram icns"><i class="fa fa-instagram" style="color: #007bff;"></i></a></li>
              <!-- <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a> -->
              <li class="sclIcn" style="background: #fff !important;"><a href="https://www.linkedin.com/company/pago-analytics" class="linkedin icns" ><i class="fa fa-linkedin" style="color: #007bff;"></i></a></li>

        </ul>
      </nav><!-- .main-nav -->
      
    </div>
  </header>
  
  <!-- #header -->

  <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("lit");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>