
<!DOCTYPE html>

<html lang="en">
<style type="text/css">
    header .navbar-sticky{
        background-color: white !important
    }
    
 
    
  @media (max-width: 1920px){
  #footlogo{
    margin-left: -112px;
          }
     }
 
 
 @media(max-width: 768px){

  #footlogo{
    margin-left: -30px;
 }
 
}
 
</style>
 
<head>

       
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

        <title>CEREBRO PALAESTRA</title>

        <meta name="description" content="CEREBRO PALAESTRA">
        <meta name="subject" content="CEREBRO PALAESTRA">
        <meta name="author" content="CEREBRO PALAESTRA">

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" href="{{url('/')}}/public/assets/images/favicon.png">
        <link rel="apple-touch-icon" href="{{url('/')}}/public/assets/images/favicon.png">
        <link rel="apple-touch-icon" sizes="72x72" href="{{url('/')}}/public/assets/images/favicon.png">
        <link rel="apple-touch-icon" sizes="114x114" href="{{url('/')}}/public/assets/images/favicon.png">

        <!-- ==============================================
        Vendor Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="{{url('/')}}/public/assets/css/vendor/bootstrap.min.css">
        <link rel="stylesheet" href="{{url('/')}}/public/assets/css/vendor/slider.min.css">
        <link rel="stylesheet" href="{{url('/')}}/public/assets/css/main.css">
        <link rel="stylesheet" href="{{url('/')}}/public/assets/css/vendor/icons.min.css">
        <link rel="stylesheet" href="{{url('/')}}/public/assets/css/vendor/animation.min.css">
        <link rel="stylesheet" href="{{url('/')}}/public/assets/css/vendor/gallery.min.css">
        <link rel="stylesheet" href="{{url('/')}}/public/assets/css/vendor/cookie-notice.min.css">

        <!-- ==============================================
        Custom Stylesheet
        =============================================== -->
        <link rel="stylesheet" href="{{url('/')}}/public/assets/css/default.css">
        <link rel="stylesheet" href="{{url('/')}}/public/assets/css/theme-light-blue.css">

        <!-- ==============================================
        Theme Settings
        =============================================== -->
        <style>
            :root {
                --header-bg-color: #111111;
                --nav-item-color: #f5f5f5;
                --hero-bg-color: #040402;

                --section-1-bg-color: #f5f5f5;
                --section-2-bg-color: #111111;
                --section-3-bg-color: #eeeeee;
                --section-4-bg-color: #191919;
                --section-5-bg-color: #111111;
                --section-6-bg-color: #eeeeee;
                --section-7-bg-color: #111111;
                --section-8-bg-color: #eeeeee;
                --section-9-bg-color: #111111;
                --section-10-bg-color: #eeeeee;
                --section-11-bg-color: #111111;
                --section-12-bg-color: #eeeeee;

                --footer-bg-color: #111111;
            }
        </style>
        
    </head>

    <body>

        <!-- Header -->
       
        
        
         <header id="header">

            <!-- Navbar -->
            <nav data-aos="zoom-out" data-aos-delay="800" class="navbar navbar-expand">
                <div class="container-fluid header">

                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="{{route('Index')}}">
                        
                       
                            <img src="{{url('/')}}/public/assets/images/Logo_Black.png" alt="CEREBRO PALAESTRA">
                       
                    </a>

                    <!-- Nav holder -->
                    <div class="ml-auto"></div>

                    <!-- Navbar Items -->
                    <ul class="navbar-nav items">
                        <li class="nav-item dropdown">
                            <a href="{{route('Index')}}" class="nav-link">Home  </a>
                           
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{route('Index')}}">Core Vision  </a>
                                    
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{route('About')}}">About Us  </a>
                                    
                                </li>
                                 
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{route('Index')}}">Value Proposition  </a>
                                    
                                </li>
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{route('Index')}}">Team  </a>
                                    
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{route('Index')}}">Portfolio  </a>
                                    
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{route('Contact')}}">Contact Us </a>
                                    
                                </li>
                            </ul>
                        </li>
                                             
                       
                        
                    </ul>

                    

                    <!-- Navbar Toggle -->
                    <ul class="navbar-nav toggle">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                                <i class="icon-menu m-0"></i>
                            </a>
                        </li>
                    </ul>

                   
                </div>
            </nav>

        </header>
        
        
        
        
        

        
  <section id="contact" class="section-8 form">
            <div class="container">
                <form action="#" id="leverage-form" class="multi-step-form">
                    <input type="hidden" name="section" value="leverage_form">

                    <input type="hidden" name="reCAPTCHA">
                    <!-- Remove this field if you want to disable recaptcha -->

                    <div class="row">
                        <div class="col-12 col-md-6 align-self-start text-center text-md-left">

                            <!-- Success Message -->
                            <div class="row success message">
                                <div class="col-12 p-0">
                                    <div class="wait">
                                        <div class="spinner-grow" role="status">
                                            <span class="sr-only">Loading</span>
                                        </div>
                                        <h3 class="sending">SENDING</h3>
                                    </div>
                                    <div class="done">
                                        <i class="icon bigger icon-check"></i>
                                        <h3>Your message was sent successful. Thanks.</h3>                      
                                        <a href="#" class="btn mx-auto primary-button">
                                            <i class="icon-refresh"></i>
                                            REFRESH
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <!-- Steps Message -->
                            <div class="row intro form-content">
                                <div class="col-12 p-0">

                                    <!-- Step Title -->
                                    <div class="step-title">
                                        <h4 class="featured alt">GET IN TOUCH</h4>
                                        <p>We are always up for an exchange of ideas. We consider everything sent our way with just as much passion as we celebrate our pizza nights.</p>
                                    </div>

                                    

                                </div>
                            </div>

                            <!-- Steps Group -->
                            <div class="row text-center form-content">
                                <div class="col-12 p-0">
                                                                       <!-- Group 1 -->
                                    <fieldset class="step-group">
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="name" data-minlength="3" class="form-control field-name" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="email" name="email" data-minlength="3" class="form-control field-email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="phone" data-minlength="3" class="form-control field-phone" placeholder="Phone">
                                            </div>
                                        </div>
                                         <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <input type="text" name="link" data-minlength="3" class="form-control field-name" placeholder="Link to document (Google Drive, Dropbox, OneDrive etc.)">
                                            </div>
                                        </div>

                                         <div class="row">
                                            <div class="col-12 input-group p-0">
                                                <textarea name="Message" data-minlength="3" class="form-control field-name" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12 input-group p-0" style="float: right !important; text-align: right !important;">
                                            <a class="step-next btn primary-button" style="background: var(--primary-color); color:white;padding-right:40px;padding-left:40px; ">SEND<i class="icon-arrow-right-circle left"></i></a>
                                        </div>
                                    </fieldset>

                                   

                                    
                                </div>
                            </div>
                        </div>

                        <div class="content-images col-12 col-md-6 pl-md-5 d-none d-md-block" style="display: block !important">

                                    <div >
                                        <h4 class="featured alt">CONTACT DETAILS</h4>
                                        <p>We believe a human connect is one of the most important things in business.We would love for you to drop in and meet us.</p>
                                    </div>
                                    
                                     <div >
                                        <h6 class="featured alt">Registered Address:</h6>
                                        <p>Suite 5, Valley Towers, Valley Road,Birkirkara, BKR9022, Malta</p>
                                    </div>
                                    
                                     <div >
                                        <h6 class="featured alt">Game Development Centre:</h6>
                                        <p> 3rd Floor, Tower A, Tapasya Corp. Heights, Sector 126, Noida, Gautam Buddha Nagar, Uttar Pradesh 201301 India</p>
                                    </div>
                                    
                                     <div >
                                        <h6 class="featured alt">Email:</h6>
                                        <p>hello@cerebropalaestra.com</p>
                                    </div>
                                    
                                    

                            

                        </div>
                    </div>
                </form>
            </div>
        </section>



        
    

       


       

       <footer>

            <!-- Footer [links] -->
            <section id="footer" style="padding:50px" class="odd footer">
                <div class="container">
                    <div class="row items">
                        <div class="col-12 col-lg-3 p-0"></div>
                        <div class="col-12 col-lg-3 p-0">
                            <div class="row">
                                <div class="col-12 p-3 text-center text-lg-left item">
                                    <div class="brand">
                                        <a href="{{route('Index')}}" class="logo">
                                          
                                                <img src="{{url('/')}}/public/assets/images/Logo_Blue.png" alt="CEREBRO PALAESTRA" id="footlogo">
                                            
                                        </a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-6 p-0">                            
                            <div class="row">
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    
                                    <ul class="navbar-nav">
                                        <li class="nav-item" style="color:white">
                                            <a href="{{route('Index')}}" class="nav-link">
                                                Home
                                            </a>
                                        </li>
                                        <li class="nav-item" style="color:white">
                                            <a href="{{route('Index')}}" class="nav-link">
                                                Core Vision
                                            </a>
                                        </li>
                                        <li class="nav-item" style="color:white">
                                            <a href="{{route('About')}}" class="nav-link">
                                               About Us
                                            </a>
                                        </li>
                                            <li class="nav-item" style="color:white">
                                            <a href="{{route('Index')}}" class="nav-link">
                                               Value Proposition
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    
                                    <ul class="navbar-nav">
                                    
                                
                                        
                                        <li class="nav-item" style="color:white">
                                            <a href="{{route('Index')}}" class="nav-link">Portfolio</a>
                                        </li>
                                        <li class="nav-item" style="color:white">
                                            <a href="{{route('Contact')}}" class="nav-link">Contact Us</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Copyright -->
            <section id="copyright" class="p-3 odd copyright">
             <center>   <div class="container">
                    <div class="row">
                        
                        <div class="col-12 col-md-12 p-3 text-center">
                            <p style="color:white">© 2020 Cerebro Palaestra Pvt. Ltd. </p>
                        </div>
                    </div>
                </div></center>
            </section>

        </footer>

        <!-- Modal [search] -->
        

        <!-- Modal [responsive menu] -->
        <div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
            <div class="modal-dialog modal-dialog-slideout" role="document">
                <div class="modal-content full">
                    <div class="modal-header" data-dismiss="modal">
                        Menu <i class="icon-close"></i>
                    </div>
                    <div class="menu modal-body">
                        <div class="row w-100">
                            <div class="items p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                            <div class="contacts p-0 col-12 text-center">
                                <!-- Append [navbar] -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll [to top] -->
        <div id="scroll-to-top" class="scroll-to-top">
            <a href="#header" class="smooth-anchor">
                <i class="icon-arrow-up"></i>
            </a>
        </div>        
        
       
        <!-- ==============================================
        Vendor Scripts
        =============================================== -->
        <script src="{{url('/')}}/public/assets/js/vendor/jquery.min.js"></script>
        <script src="{{url('/')}}/public/assets/js/vendor/jquery.easing.min.js"></script>
        <script src="{{url('/')}}/public/assets/js/vendor/jquery.inview.min.js"></script>
        <script src="{{url('/')}}/public/assets/js/vendor/popper.min.js"></script>
        <script src="{{url('/')}}/public/assets/js/vendor/bootstrap.min.js"></script>
        <script src="{{url('/')}}/public/assets/js/vendor/ponyfill.min.js"></script>
        <script src="{{url('/')}}/public/assets/js/vendor/slider.min.js"></script>
        <script src="{{url('/')}}/public/assets/js/vendor/animation.min.js"></script>
        <script src="{{url('/')}}/public/assets/js/vendor/progress-radial.min.js"></script>
        <script src="{{url('/')}}/public/assets/js/vendor/bricklayer.min.js"></script>
        <script src="{{url('/')}}/public/assets/js/vendor/gallery.min.js"></script>
        <script src="{{url('/')}}/public/assets/js/vendor/shuffle.min.js"></script>
        
        <script src="{{url('/')}}/public/assets/js/main.js"></script>

    </body>

</html>