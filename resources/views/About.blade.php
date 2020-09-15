
<!DOCTYPE html>

<html lang="en">
<style type="text/css">
     #pngicon{
    left: 48%; top: 80%; 
 }

    @media (max-width: 1920px){
body header .navbar-expand .navbar-nav.toggle {
   
    display: block;
}
body header .navbar-expand .navbar-nav.contacts, body header .navbar-expand .navbar-nav.items, body header .navbar-expand .navbar-nav.icons .social{
    display: none;
}

 #footlogo{
    margin-left: -112px;
 }

}

@media(max-width: 768px){
    #pngicon{
    left: 40%; top: 80%; 
 }
 
  #footlogo{
    margin-left: -30px;
 }
 
 #based{
     margin-top:-40px;
     margin-bottom:-80px;
 }

 #team_col{
    margin-top: 50px;
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

        <!-- Hero -->
        <section id="slider" class="hero p-0 odd">
            <div class="swiper-container full-slider animation slider-h-100">
                <div class="swiper-wrapper">

                    <!-- Item 1 -->
                    <div class="swiper-slide slide-center">
                        
                         <video type="video/mp4" class="full-image" data-mask="3" src="{{url('/')}}/public/assets/videos/Brain.mp4" autoplay muted loop></video> 

                       <!-- <img src="{{url('/')}}/public/assets/images/AboutBanner.jpg" class="full-image" data-mask="3">  -->
                        <center><div id="pngicon" style="text-align: center; cursor: pointer;  position: absolute;"><a class="nav-link" href="#testimonials"><img src="{{url('/')}}/public/assets/images/easy.png"></a></div></center>
                        <div class="slide-content row">
                            <div class="col-12 d-flex inner">
                                <div class="center align-self-center text-center">
                                 <h4>GLOBALIZED OPERATIONS, LOCALIZED INNOVATIONS</h4>
                                  <!--   <a href="#about" data-aos="zoom-out-up" data-aos-delay="1200" class="smooth-anchor ml-auto mr-auto mt-5 btn primary-button"><i class="icon-cup"></i>GET STARTED</a> -->
                                </div>
                            </div>
                        </div>
                    </div>

                   
                </div>
             
            </div>
        </section>


        
                <section id="team" class="section  highlights image-center featured">
            <div class="container">
                        
                
                 <div class="row justify-content-center text-left items">
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card no-hover">                            
                            <h4 id="based">Based in Malta, with a community  that’s spread across the globe</h4>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-6 item">
                        <div class="card no-hover">
                           
                            <p>CEREBRO PALAESTRA is a global destination, that Values gamification, Embraces the journey travelled from 2D video games to esports, and delights the community with an offering that is built keeping them in focus.</p>
                             <p>A space of consciousness, that allows the room for self-reflection, so one can pursue a passion to serve a community that matters -The Gamers! <br >Our games are defined by experience, curiosity, creativity and leisure. CEREBRO PALAESTRA, in a word, is gamification.</p>
                        </div>
                    </div>
                    
                    
                </div>
                
                <hr>
            </div>
        </section>
        
        
        
        
        <section id="testimonials" class="section-8 carousel" style="margin-top:-120px;">
            <div class="overflow-holder">
                <div class="container">
                    <div class="row text-center intro">
                        <div class="col-12">
                            <h3>The Team</h3>
                            <h6>OUR PEOPLE COME FIRST  </h6>
                            <p>Although we are a well-oiled machine, our people are far from cogs. The talent we cultivate gets the importance of honing their respective crafts. It helps to better serve both each other and our partners, and it shows in everything - from the games we design and produce, to what we value and believe. </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4" style="margin-bottom:50px;">
                                <div class="#">
                                       <center> <img src="{{url('/')}}/public/assets/images/team/Pushkin.png" alt="PUSHKIN" class="person">
                                        <h5 style="margin-top: -10px">PUSHKIN</h5>
                                        </center>
                                        
                                        <p style="text-align:justify;">Curious, data-driven & decisive, Pushkin brings in a proven track record in conceptualizing, leading, maturing and delivering new businesses & multimillion-dollar deals in industries ranging from high end manufacturing & technology to real estate investments. While pursuing his MBA at Oxford, he was an active part of the university Poker Society.  
                                          <br /><br />  What tickles Pushkin on Poker goes beyond the game itself to the socio-economic dynamics which govern it. With an entrepreneurial journey that kicked off with a neighbourhood exchange library at a young age of 9, Pushkin has ploughed his way to bigger milestones with major stints with Siemens and TATA Group successfully managing key portfolios for them. Our in-house Nerd, be it about Space, Science, History, Sharks (the real ones!) or Poker, Pushkin is infatuated with all what makes people & systems sing at a fundamental level. 
                                        </p>

                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4" style="margin-bottom:50px;">
                                <div class="#">
                                       <center><center> <img src="{{url('/')}}/public/assets/images/team/Rohan.png" alt="Rohan" class="person">
                                        <h5 style="margin-top: -10px">ROHAN</h5>
                                       <c/enter>
                                        
                                        <p style="text-align:justify;">Rohan is our Moneyman, keeps things tight, blends thorough experience in finance to optimize our metrics, and his OCD makes sure that our razor-sharp focus remains on the bottom-line. His experience involves leadership roles with Citi, RBS, Tata Group & IVCA. His experience has evolved across Corporate Banking to Private Equity deal-making. At TATAs, Rohan and Pushkin, led the New Businesses; And, Capital Markets, one of their brainchild, led to a fund-raise of USD 80MM from marquee Private Equity Investors. His latest assignment was as a country lead to advocate policy tweaks for Private Equity & Venture Capital funds at IVCA. 
                                          <br /><br /> He polished his craft with an MBA from Oxford. As a kid, his interest in Math stemmed through puzzles, and his passion developed, as he could understand nature with a blend of math in physics. In his own words he is a nomad, a buddha, driven purely by passion and an urge to accomplish. Aside to his expertise, his social skills have enabled a network that helps him land key strategic accounts for business. Having been a sports enthusiast all his life, he has now found a paradigm, to build an enterprise and pursue both his passions - games and finance. 
                                        </p>
                                  
                                </div>
                            </div>
                            
                           
                            <div class="col-md-4 col-sm-4" style="margin-bottom:50px;">
                                
                                <div class="#">
                          
                                       <center> <img src="{{url('/')}}/public/assets/images/team/Tessy.png" alt="Tessy" class="person">
                                        <h5 style="margin-top: -10px">TESSY</h5>
                                       </center>
                                        
                                        <p style="text-align:justify;"> 
                                        Versatile, conscientious and spirited, Tessy is not just our Operations & Strategic Implementations Virtuoso, but an unstoppable force to be reckoned with. With her mindful spontaneity and prompt ingenuity, one would always find her on her toes utilising her multifaceted and multi-gifted persona towards every possible domain of functioning that she can get her hands on. A wonderful all-rounder, she busies herself at Superlative Gaming bringing order into the creative chaos of the organization, enabling operations across varying verticals and getting our product ready for launch. 
                                        <br />
                                       An MBA from  XLRI, Jamshedpur and previously a part of the prestigious Tata Administrative Services, Tessy has worked across sectors and functions at the likes of Cognizant technologies and the TATA group. Prior to diving into the gaming, Tessy was working with Tata International in the commodity trading domain, assisting the leadership team to plan and execute key organizational initiatives. To balance the madness at work, Tessy reconciles with her inner soul unwinding with painting, music and pursuing her inquisitiveness for a wide range of subjects  ranging from history to wildlife. 
                                        </p>
                                        
                             
                                </div>
                            </div>

                             <div class="col-md-2 col-sm-2" style="margin-top:-50px;"></div>
                            
                             <div class="col-md-4 col-sm-4" style="margin-top:50px;">
                                
                                <div class="#">
                          
                                       <center> <img src="{{url('/')}}/public/assets/images/team/Shaunak.png" alt="SHAUNAK" class="person">
                                        <h5 style="margin-top: -10px">SHAUNAK</h5>
                                        </center>
                                        
                                        <p style="text-align:justify;"> 
                                        Shaunak is a new-age strategist and a curiously creative mind. Keeping in tune with his motto of “Make great things happen”, he is always on the hunt for the latest in digital design, content and marketing innovations. He has excellent communication skills and a track record of consistent performance in key operating areas of managing diverse teams and spearheading creative executions using data-oriented planning and a strong work ethic. Having completed his post-graduate degree from MICA, he says that the biggest learning from his MBA was not from the books but from the people. He carries this perspective on to his professional life where he heavily invests in talent and interpersonal relationships.  
                                        <br />
                                       An entrepreneurial spark always kindling within him, Shaunak has been part of the early operators in the development of several startups over the years, from Foxymoron to Nojoto as well as run his own creative consultancy agency in the past. Today, he focuses on his core passions of digital media, gaming and user experiences. 
                                        
                                        </p>
                                        
                             
                                </div>
                            </div>
                           
                             <div class="col-md-4 col-sm-4" style="margin-top:50px;">
                                
                                <div class="#">
                          
                                       <center> <img src="{{url('/')}}/public/assets/images/team/Kunal.png" alt="Kunal" class="person">
                                        <h5 style="margin-top: -10px">KUNAL</h5>
                                   </center>
                                        
                                        <p style="text-align:justify;"> 
                                       Kunal is our inhouse “Pro” with over 10 years & about 10k Hours of experience in playing professional poker as well as hosting games in India & overseas. He ventured into the sport with a fervor and aim to be successful among exemplar performers in the country. With the expanding digital presence of the sport, Kunal hopped onto online gaming and never looked back.  
                                        <br />
                                       He understands the modern day dynamics of poker and has edified himself as a Subject Matter Expert by fortifying his game and its understanding in both live and online platforms. Kunal’s open minded & helpful approach towards the game & the poker community has earned him many friends & a great reputation which brings in invaluable relationships & critical alliances from the industry.  Apart from playing poker you will find Kunal sipping good scotch garnished with classic rock music and reading up on world history. 
                                        
                                        </p>
                                        
                             
                                </div>
                            </div>


                              <div class="col-md-2 col-sm-2" style="margin-top:-50px;"></div>
                              <div class="col-md-2 col-sm-2" style="margin-top:50px;"></div>
                            
                             <div class="col-md-4 col-sm-4" style="margin-top:50px;">
                                
                                <div class="#">
                          
                                       <center> <img src="{{url('/')}}/public/assets/images/team/Vishal.png" alt="VISHAL" class="person">
                                        <h5 style="margin-top: -10px">VISHAL</h5>
                                        </center>
                                        
                                        <p style="text-align:justify;"> 
                                        Our go-to-person for user experience with prime focus on ease of playing and ease of transactions for the players. A mid stake Grinder himself, Vishal brings with him more than 5000 Hours of experience in Live and online poker games making him the pivotal bridge between the user response and the tech development & the marketing team.  
                                        <br />
                                       He is our top cat when it comes down to finer aspects that make an online player tick. This is in addition to the innumerable industry relationships with affiliates, poker bloggers, merchandisers and more that compliment his distinction with user experience facets.
                                        
                                        </p>
                                        
                             
                                </div>
                            </div>
                           
                             <div class="col-md-4 col-sm-4" style="margin-top:50px;">
                                
                                <div class="#">
                          
                                       <center> <img src="{{url('/')}}/public/assets/images/team/Aditya.png" alt="ADITYA" class="person">
                                        <h5 style="margin-top: -10px">ADITYA</h5>
                                   </center>
                                        
                                        <p style="text-align:justify;"> 
                                        Aditya is our analytical pillar. An MBA from IMT Nagpur, he has had vivid exposure in Sports Management, Sports Newsroom and with one of the online poker startups, F.T.R Poker, whereby his diagnostic and interpretative business orientation took a cogent form.  
                                        <br />
                                        His vivacious interest in a plethora of sports, to both play and follow, go hand in hand with his eye for detail in underlying statistics and game sciences.  His seasoned depth of understanding of the online tournaments & their governing facets makes him an invaluable asset van guarding as our core think-tank. Adi appreciates Chess, Poker, FIFA and strums his Guitar to get into a rhythm.
                                        
                                        </p>
                                        
                             
                                </div>
                            </div>
                            

                             
                        </div>
                        
                        
                    </div>
                    
                </div>
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