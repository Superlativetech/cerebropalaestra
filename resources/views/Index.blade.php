
<!DOCTYPE html>

<html lang="en">
<style type="text/css">
 #pngicon{
    left: 48%; top: 80%; 
 }
 
 #col_padd{
     padding:50px;
 }
 
  
 #col_padd p{
     font-size:10px;
 }

    @media (max-width: 1920px){
body header .navbar-expand .navbar-nav.toggle {
   
    display: block;
}
body header .navbar-expand .navbar-nav.contacts, body header .navbar-expand .navbar-nav.items, body header .navbar-expand .navbar-nav.icons .social{
    display: none;
}




}

 #footlogo{
    margin-left: -112px;
 }

#heart2{
 display: none;
 width: 100px;
 padding-top: 50px;
 padding-bottom: 40px;
 margin:auto;
}

#heart{
    
    width: 120px;
    margin-bottom: 30px;
    margin-top: 50px

}

@media(max-width: 768px){
    #pngicon{
    left: 40%; top: 80%; 
 }

 #team_col{
    margin-top: 50px;
 }

 #gapp{
    margin-top: -50px;
    margin-bottom: -20px
 }
 
  #col_padd{
     padding:10px;
 }
 
  
 #col_padd p{
     font-size:14px;
 }

 #gapp2{
    
    margin-bottom: -20px
 }

 #heart{
    display: none;
}

 #footlogo{
    margin-left: -30px;
 }

#heart2{
 display: block;
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
        section.featured:after{
            display:none;
        }
        .offers .items .item{
            margin-bottom:0px;
        }
        .odd:not(.custom) .card:not(.no-hover):not(:hover)
{
    background:#111111;
}        
        .card:not(.no-hover):hover{
            background:#1D1D1D;
        }
        
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
                        
                       
                            <img src="{{url('/')}}/public/assets/images/Logo_White.png" alt="CEREBRO PALAESTRA">
                       
                    </a>

                    <!-- Nav holder -->
                    <div class="ml-auto"></div>

                    <!-- Navbar Items -->
                    <ul class="navbar-nav items">
                        <li class="nav-item dropdown">
                            <a href="#header" class="nav-link">Home  </a>
                           
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#core">Core Vision  </a>
                                    
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="{{route('About')}}">About Us  </a>
                                    
                                </li>
                                 
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#value">Value Proposition  </a>
                                    
                                </li>
                                
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#team">Team  </a>
                                    
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#portfolios">Portfolio  </a>
                                    
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link" href="#contact">Contact Us </a>
                                    
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

        <!-- Hero -->
        <section id="slider" class="hero p-0 odd">
            <div class="swiper-container full-slider animation slider-h-100">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        
                         <video type="video/mp4" class="full-image" data-mask="3" src="{{url('/')}}/public/assets/videos/CerebroShowcase.mp4" autoplay muted loop></video> 

                        <!--<img src="{{url('/')}}/public/assets/images/bg-4.jpg" class="full-image" data-mask="3">  -->
                        <center><div id="pngicon" style="text-align: center; cursor: pointer;  position: absolute;"><a class="nav-link" href="#core"><img src="{{url('/')}}/public/assets/images/easy.png"></a></div></center>
                        <div class="slide-content row">
                            <div class="col-12 d-flex inner">
                                <div class="center align-self-center text-center">
                                <img src="{{url('/')}}/public/assets/images/Banner_Logo.png" >
                                  <!--   <a href="#core" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto mt-5 btn primary-button"><i class="icon-cup"></i>GET STARTED</a> -->

                                </div>

                            </div>
                        </div>
                    </div>

                   
                </div>
             
            </div>
        </section>

        <!-- Features -->
        <section id="core" style="background-image:url('{{url('/')}}/public/assets/images/Banner_1.jpg') ; width:100%; background-size:cover" class="section-2 odd highlights image-center featured">
            <div class="container">
               <div class="row justify-content-center text-center items">
				
				    <div class="col-6 col-md-6 col-lg-3 item">
                        <div class="card no-hover">
                           <center> <img src="{{url('/')}}/public/assets/images/icons/Icon_4.png" width="90px"; > </center>
                            <h6>Responsibility</h6>
                        </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 item">
                        <div class="card no-hover">
                           <center> <img src="{{url('/')}}/public/assets/images/icons/Icon_1.png" width="90px"; > </center>
                            <h6>Technology</h6>
                            </div>
                    </div>
					
					<div class="col-6 col-md-6 col-lg-3 item">
                        <div class="card no-hover">
                          <center>  <img src="{{url('/')}}/public/assets/images/icons/Icon_3.png"width="90px"; > </center>
                            <h6>Gaming</h6>
                            </div>
                    </div>
                    <div class="col-6 col-md-6 col-lg-3 item">
                        <div class="card no-hover">
                           <center> <img src="{{url('/')}}/public/assets/images/icons/Icon_2.png" width="90px"; > </center>
                            <h6>Media</h6>
                            </div>
                    </div>
                    

                    
                </div>
                
                
                 <div class="row justify-content-center text-left items">
                    <div class="col-12 col-md-6 col-lg-4 item" id="gapp" >
                        <div class="card no-hover">
                            
                            <h4>We are out to create waves in an industry known for innovation</h4>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item" id="gapp2">
                        <div class="card no-hover">
                           
                            <p style="color:white">CEREBRO PALAESTRA is a global destination, that Values gamification, Embraces the journey travelled from 2D video games to esports, and delights the community with an offering that is built keeping them in focus. </p>
                             </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 item">
                        <div class="card no-hover">
                            <p style="color:white">A space of consciousness, that allows the room for self reflection, so one can pursue a passion to serve a community that matters -The Gamers!</p>
                            <p style="color:white">Our games are defined by experience, curiosity, creativity and leisure. CEREBRO PALAESTRA, in a word, is gamification. </p>
                        </div>
                    </div>
                     
                    
                </div>
                
                
            </div>
        </section>
        
        
        
         <!-- Subscribe -->
        <section id="subscribe" class="section-11 odd subscribe" style="background-image:url('{{url('/')}}/public/assets/images/ScrollBanner.jpg'); width:100%; background-size:cover">
            <div class="container smaller">
                <div class="row text-center intro">
                    <div class="col-12">
                    
                        <h4>GLOBALIZED OPERATIONS, LOCALIZED INNOVATIONS</h4>
                        
                        <br ><center> <a href="{{route('About')}}" style="background:#F8AF09; font-weight:bold; padding-left:40px; padding-right:40px" target="_blank" class="btn ml-lg-auto primary-button">GET TO KNOW US</a></center>
                    
                    </div>
                </div>
                
            </div>
        </section>
        
        <!-- Services -->
        <section id="value" class="section-5 odd offers featured" style="padding-top:0px; padding-bottom:0px">
            <div class="container" style="padding-top:10px">
                
                <div class="row justify-content-center text-center items" style="margin-bottom:5px">
                    <div class="col-12 col-md-6 col-lg-3 item">
                        <div class="card" style="padding-top:50px">
                          <center>  <img src="{{url('/')}}/public/assets/images/icons/Icon_5.png" width="60px"; > </center>
                            <h5 style="color:white">DATA-ORIENTED</h5>
                            <p style="color:white">We’ve taken the guesswork out of the products we develop and services we provide. We bank on real-time, validated data in crucial decision making, both for creating our products or generating value for our partners.</p>
                            <!-- <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a> -->
                        <br>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 item" style="margin-bottom:5px">
                        <div class="card" style="padding-top:50px">
                          <center> <img src="{{url('/')}}/public/assets/images/icons/Icon_6.png" width="60px"; > </center>
                            <h5 style="color:white">INVESTOR-FRIENDLY</h5>
                            <p style="color:white">In an incredibly competitive domain like technology, we know the importance of our investors’ time and money. Building quality is in our DNA and we ensure it gets translated into a great ROI for our investors and customers alike.</p>
                            <!-- <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a> -->
                        <br>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-3 item" style="margin-bottom:5px">
                        <div class="card" style="padding-top:50px">
                           <center> <img src="{{url('/')}}/public/assets/images/icons/Icon_7.png" width="60px"; > </center>
                            <h5 style="color:white">DOMAIN EXPERTS</h5>
                            <p style="color:white">We love to play games. We love to innovate. But while those two come together beautifully at our LAN Parties, it happens even better in our workspace. Each of our team members bring years of domain-specific expertise, academic pedigree and hands-on experience.</p>
                            <!-- <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a> -->
                        </div>
                    </div>
                    
                     <div class="col-12 col-md-6 col-lg-3 item" style="margin-bottom:5px">
                        <div class="card" style="padding-top:50px">
                           <center> <img src="{{url('/')}}/public/assets/images/icons/Icon_8.png" width="60px"; > </center>
                            <h5 style="color:white">TRANSPARENCY</h5>
                            <p style="color:white">We dream of a world based on trust and transparency. We have taken the time to build an organization that thrives on the culture of open exchange of ideas and information.</p>
                           <!-- <a href="#"><i class="btn-icon icon-arrow-right-circle"></i></a> -->
                        <br><br>
                        </div>
                    </div>
                    
                   
                   
                </div>
            </div>
        </section>
        
        <section id="team" class="section-8 carousel">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row text-center intro">
                        <div class="col-12">
                            <h3>The Team</h3>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4" >
                                <div class="#">
                                       <center> <img src="{{url('/')}}/public/assets/images/team/Pushkin.png" alt="PUSHKIN" class="person">
                                        <h5 style="margin-top: -10px">PUSHKIN</h5>
                                       </center>
                                        
                                        <p style="text-align:justify;">Curious, data-driven & decisive, Pushkin brings in a proven track record in conceptualizing, leading, maturing and delivering new businesses & multi-million dollar deals in industries ranging from high end manufacturing & technology to real estate investments. While pursuing his MBA at Oxford, he was an active part of the university Poker Society. 
                                          <br /><br />  What tickles Pushkin on Poker goes beyond the game itself to the socio-economic dynamics which govern it. With an entrepreneurial journey that kicked off with a neighborhood exchange library at a young age of 9, Pushkin has ploughed his way to bigger milestones with major stints with Siemens and TATA Group successfully managing key portfolios for them. Our in-house Nerd, be it about Space, Science, History, Sharks (the real ones!) or Poker, Pushkin is infatuated with all what makes people & systems sing at a fundamental level.
                                        </p>

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4" id="team_col">
                                <div class="#">
                                       <center> <img src="{{url('/')}}/public/assets/images/team/Rohan.png" alt="ROHAN" class="person">
                                        <h5 style="margin-top: -10px">ROHAN</h5>
                                        </center>
                                        
                                        <p style="text-align:justify;">Rohan is our Money-man, keeps things tight, blends thorough experience in finance to optimize our metrics, and his OCD makes sure that our razor-sharp focus remains on the bottom-line.
                                         His experience involves leadership roles with Citi, RBS, Tata Group & IVCA. His experience has evolved across Corporate Banking to Private Equity deal-making. At TATAs, Rohan and Pushkin, led the New Businesses; And, Capital Markets, one of their brain-child, led to a fund-raise of USD 80MM from marquee Private Equity Investors. His latest assignment was as a country lead to advocate policy tweaks for Private Equity & Venture Capital funds at IVCA. 
 
                                          <br /><br />  He polished his craft with an MBA from Oxford. As a kid, his interest in Math stemmed through puzzles, and his passion developed, as he could understand nature with a blend of math in physics. In his own words he is a nomad, a buddha, driven purely by passion and an urge to accomplish. Aside to his expertise, his social skills have enabled a network that helps him land key strategic accounts for business. Having been a sports enthusiast all his life, he has now found a paradigm, to build an enterprise and pursue both his passions - games and finance.

                                        </p>
                                  
                                </div>
                            </div>
                            
                           
                            <div class="col-md-4 col-sm-4" id="team_col">
                                
                                <div class="#">
                          
                                       <center > <img src="{{url('/')}}/public/assets/images/team/Tessy.png" alt="TESSY" class="person">
                                        <h5 style="margin-top: -10px">  TESSY</h5>
                                        </center>
                                        
                                        <p style="text-align:justify;"> 
                                        Versatile, conscientious and spirited, Tessy is not just our Operations & Strategic Implementations Virtuoso, but an unstoppable force to be reckoned with. With her mindful spontaneity and prompt ingenuity, one would always find her on her toes utilising her multifaceted and multi-gifted persona towards every possible domain of functioning that she can get her hands on. A wonderful all-rounder, she busies herself at Superlative Gaming bringing order into the creative chaos of the organization, enabling operations across varying verticals and getting our product ready for launch. 
                                        <br />
                                        An MBA from  XLRI, Jamshedpur and previously a part of the prestigious Tata Administrative Services, Tessy has worked across sectors and functions at the likes of Cognizant technologies and the TATA group. Prior to diving into the gaming, Tessy was working with Tata International in the commodity trading domain, assisting the leadership team to plan and execute key organizational initiatives.
                                        To balance the madness at work, Tessy reconciles with her inner soul unwinding with painting, music and pursuing her inquisitiveness for a wide range of subjects  ranging from history to wildlife.
                                        
                                        </p>
                                        
                             
                                </div>
                            </div>
                            
                             
                        </div>
                        
                        <br >
                        <br ><center> <a href="{{route('About')}}" style="background:#0095D7; padding-left:40px; padding-right:40px;font-weight:bold;" target="_blank" class="btn ml-lg-auto primary-button">VIEW MORE</a></center> 
                    </div>
                    
                </div>
            </div>
        </section>
        
        
        
        

        <!-- Fun Facts -->
        <section id="portfolios" class="section-4 odd counter funfacts featured" style="background-image:url('{{url('/')}}/public/assets/images/ScrollBanner_1.jpg'); width:100%; background-size:cover">
            <div class="container">
                <div class="row text-center intro">
                    <div class="col-12">
                        <h3>PORTFOLIO</h3>
                    </div>
                </div>
                <div data-aos-id="counter" data-aos="fade-up" data-aos-delay="200" class="row justify-content-center text-center items">
                   
                    <div class="col-12 col-md-6 col-lg-4 item" id="col_padd">
                        <div >
                        <a href="#" class="nav-link">   <img src="{{url('/')}}/public/assets/images/icons/Icon_9.png" style="margin-top:-20px; margin-bottom:20px"> <a>
                        </div>
                        <!--<p style="color:white">Superlative Gaming is the Game Development Centre of Cerebro Palaestra.</p>-->
                    </div>
                     
                    
                    <div class="col-12 col-md-6 col-lg-4 item" id="col_padd">
                        <div >
                         <a href="https://www.pokernxt.in/" target="_blank" class="nav-link">  <img src="{{url('/')}}/public/assets/images/icons/Icon_10.png" style="margin-top:-20px; margin-bottom:20px"> <a>
                        </div>
                        <!--<p style="color:white">A next-generation Poker playing platform madeBy Players, For Everyone.</p>-->
                    </div>
                   
                    <div class="col-12 col-md-6 col-lg-4 item" id="col_padd">
                        <div >
                         <a href="https://gamerly.io/" target="_blank" class="nav-link">  <img src="{{url('/')}}/public/assets/images/icons/Icon_11.png">  <a>
                        </div>
                        <!--<p style="color:white">A Gaming community with deep platform integration, content aggregation and direct engagement.</p>-->
                    </div>
                </div>
            </div>
        </section>

          

       

        <!-- Testimonials -->
        <section id="contact" class="section-8 carousel" style="padding-top: 10px">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row">
                         <div class="col-sm-12 col-md-12 col-12" style="text-align: right;">
                           <center>   <img src="{{url('/')}}/public/assets/images/ICON.png" id="heart"></center> 

                             <img src="{{url('/')}}/public/assets/images/ICON.png" id="heart2" >
                        </div>
                    </div>
                    <div class="row text-center intro">
                       
                        <div class="col-12">
                           
                            <h3>TAKE THE LEAP</h3>
                            <p class="text-max-800" style="color:#6f6f6f;">Your vision makes the world of a difference.</p>
                            <p class="text-max-800" style="color:#6f6f6f;">If you see synergy with your vision and ours, we’d love to hear from you.</p>
                           <br ><center> <a href="{{route('Contact')}}" style="background:#0095D7; padding-left:40px; padding-right:40px;font-weight:bold;" target="_blank" class="btn ml-lg-auto primary-button">CONTACT US</a></center>                    
                           
                        </div>
                        
                    </div>
                   
                </div>
            </div>
        </section>

       

        <!-- Footer -->
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
                                            <a href="#header" class="nav-link">
                                                Home
                                            </a>
                                        </li>
                                        <li class="nav-item" style="color:white">
                                            <a href="#core" class="nav-link">
                                                Core Vision
                                            </a>
                                        </li>
                                        <li class="nav-item" style="color:white">
                                            <a href="{{route('About')}}" class="nav-link">
                                               About Us
                                            </a>
                                        </li>
                                            <li class="nav-item" style="color:white">
                                            <a href="#value" class="nav-link">
                                               Value Proposition
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="col-12 col-lg-4 p-3 text-center text-lg-left item">
                                    
                                    <ul class="navbar-nav">
                                    
                                    <li class="nav-item" style="color:white">
                                            <a href="#team" class="nav-link">
                                               Team
                                            </a>
                                        </li>
                                        
                                        <li class="nav-item" style="color:white">
                                            <a href="#portfolios" class="nav-link">Portfolio</a>
                                        </li>
                                        <li class="nav-item" style="color:white">
                                            <a href="#contact" class="nav-link">Contact Us</a>
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