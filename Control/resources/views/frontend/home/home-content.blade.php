@extends('frontend.master')
@section('title')

    Home | My Portfolio
@endsection

@section('content')

<div class="agileheaderw3ls" id="agilehomewthree">

    <!-- Navigation -->

    <div class="cd-bouncy-nav-modal">
        <nav>
            <ul class="cd-bouncy-nav">
                <li><a class="scroll" href="#agilehomewthree">HOME</a></li>
                <li><a class="scroll" href="#agileaboutaitsabout">ABOUT</a></li>
                <li><a class="scroll" href="#w3threespecialityw3ls">WORK</a></li>
                <li><a class="scroll" href="#skills">SKILLS</a></li>
                <li><a class="scroll" href="#portfolio">PORTFOLIO</a></li>
                <li><a class="scroll" href="#contact">CONTACT</a></li>
            </ul>
        </nav>
        <a href="#0" class="cd-close">Close modal</a>
    </div>
    <!-- //Navigation -->

    <!-- Slider -->
    <div class="w3slideraits">
        <div class="camera_wrap w3layouts agileits camera_magenta_skin" id="camera_wrap_2">
            <div data-src="{{asset('frontend')}}/images/zahid.jpg" class="w3layouts agileits">
                <div class="camera_caption w3layouts agileits fadeFromBottom">
                    <h3 class="w3layouts agileits">Hello, I am Zahid Hasan.</h3>
                </div>
            </div>
            <div class="w3layouts agileits" data-src="{{asset('frontend')}}/images/developer.jpg">
                <div class="camera_caption w3layouts agileits fadeFromBottom">
                    <h3 class="w3layouts agileits">I am a Web Developer</h3>
                </div>
            </div>
            <div data-src="{{asset('frontend')}}/images/peojectdemo.jpg" class="w3layouts agileits">
                <div class="camera_caption w3layouts agileits fadeFromBottom">
                    <h3 class="w3layouts agileits">I developed some project</h3>
                </div>
            </div>
            <div class="w3layouts agileits" data-src="{{asset('frontend')}}/images/programe.jpg">
                <div class="camera_caption w3layouts agileits fadeFromBottom">
                    <h3 class="w3layouts agileits">I Love programming</h3>
                </div>
            </div>
            <div data-src="{{asset('frontend')}}/images/slide-5.jpg" class="w3layouts agileits">
                <div class="camera_caption w3layouts agileits fadeFromBottom">
                    <h3 class="w3layouts agileits">Check Out My <a class="scroll" href="#portfolio">Portfolio</a> Below</h3>
                </div>
            </div>
        </div>
    </div>
    <!-- //Slider -->

</div>
<!-- //Header -->



<!-- About -->
<div class="agileaboutaitsabout" id="agileaboutaitsabout">
    <div class="agileaboutaits">
        <div class="container">

            <div class="col-md-6 col-sm-6 agileaboutaits-grid agileaboutaits-info">
                <h1>About Me</h1>
                <P>

                    To prove myself as a quick learner and highly energetic person to face any challenge and to build up myself as successful. Building up a challenging and rewarding career in the IT sector is my first mission. For this, I am looking for a promising IT Firm that provides structured career advancement within the extent of competitive, dynamic and congenial atmosphere for IT.

                   <br/>
                    My technical writing skill described in enclosed resume. I am in the last semester student from <span style="color: lawngreen;">‘AMERICAN INTERNATIONAL UNIVERSITY OF BANGLADESH’</span> with an associates  degree in computer science and engineering. My C.G.PA is 3.71.
<br/><br/>
                    I have successfully designed  and developed  some project in my academic life.  <span style="color: lawngreen;">(https://github.com/Zahid08).</span>
                </P>
                <a href="https://drive.google.com/open?id=1VXgXRPGayAmRTPfN6yKiPcOB9ADBf3jU" target="_blank"> <button class="btn btn-primary"  data-target="#myModal">DOWNLOAD MY CV<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button> </a>
            </div>

            <div class="col-md-6 col-sm-6 agileaboutaits-grid agileaboutaits-image">
                <div class="agileaboutaits-image-1">

                </div>
                <div class="agileaboutaits-image-2">
                    <img src="{{asset('frontend')}}/images/cv.jpg" alt="Couture">
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>

            <!-- Tooltip -->

            <!-- //Tooltip -->

        </div>
    </div>
</div>
<!-- //About -->



<!-- Speciality -->
<div class="w3threespecialityw3ls" id="w3threespecialityw3ls">
    <div class="container">

        <h2>What I Design and Use Language</h2>
        <div class="grid cs-style-3">
            <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid1">
                <figure>
                    <div class="w3threespecialityw3ls-info">
                        <img src="{{asset('frontend')}}/images/cloudcampus.jpg" alt="Couture" height="250px;">
                    </div>
                    <figcaption>
                        <h3>CLOUD CAMPUS(Web Base [laravel])</h3>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid2">
                <figure>
                    <div class="w3threespecialityw3ls-info">
                        <img src="{{asset('frontend')}}/images/busmanage.jpg" alt="Couture" height="250px;">
                    </div>
                    <figcaption>
                        <h3>Bus Management System(Desktop Base [C#])</h3>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid3">
                <figure>
                    <div class="w3threespecialityw3ls-info">
                        <img src="{{asset('frontend')}}/images/ecomercesite.png" alt="Couture" height="250px;">
                    </div>
                    <figcaption>
                        <h3>Ecomerce Site (Web Based [Laravel])</h3>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid4">
                <figure>
                    <div class="w3threespecialityw3ls-info">
                        <img src="{{asset('frontend')}}/images/Medicare.jpg" alt="Couture" height="250px;" >
                    </div>
                    <figcaption>
                        <h3>Medicare System(Web Based [Laravel])</h3>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid5">
                <figure>
                    <div class="w3threespecialityw3ls-info">
                        <img src="{{asset('frontend')}}/images/portfolio.jpg" alt="Couture" height="250px;">
                    </div>
                    <figcaption>
                        <h3>PORTFOLIO (Web Based [Laravel])</h3>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid6">
                <figure>
                    <div class="w3threespecialityw3ls-info">
                        <img src="{{asset('frontend')}}/images/3.jpg" alt="Couture" height="250px;">
                    </div>
                    <figcaption>
                        <h3>ONLINE HOTEL BOOKING (Web Based [Asp.net & API ])</h3>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid4">
                <figure>
                    <div class="w3threespecialityw3ls-info">
                        <img src="{{asset('frontend')}}/images/hostelmangement.jpg" alt="Couture" height="250px;" >
                    </div>
                    <figcaption>
                        <h3>University Hostel Management (Desktop Based [Java])</h3>
                    </figcaption>
                </figure>
            </div>

            <div class="col-md-4 col-sm-4 w3threespecialityw3ls-grid grid5">
                <figure>
                    <div class="w3threespecialityw3ls-info">
                        <img src="{{asset('frontend')}}/images/hsopital.jpg" alt="Couture" height="250px;">
                    </div>
                    <figcaption>
                        <h3>Hospital Patient Manage (Desktop Based [java])</h3>
                    </figcaption>
                </figure>
            </div>


            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>

    </div>
</div>
<!-- //Speciality -->

<!-- Progressive-Effects -->
<div class="progressive-effects" id="skills">
    <div class="container">

        <!-- Skills -->
        <div id="about-us" class="parallax">
            <h3>Skills</h3>

            <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                @foreach($skills as $skill)
                    <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                        <p class="lead">{{$skill->skill_name}}</p>
                        <div class="progress">
                            <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuetransitiongoal="{{$skill->percentage}}">{{$skill->percentage}}%</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- //Skills -->

        <!-- Stats -->
        <div class="stats">
            <h3>Status</h3>

            <div class="stats-info">
                <div class="col-md-3 col-sm-3 stats-grid stats-grid-2">
                    <div class="stats-img">
                        <img src="{{asset('frontend')}}/images/s2.png" alt="Corsa Racer">
                    </div>
                    <div class='numscroller counter numscroller-big-bottom' data-slno='1' data-min='0' data-max='170' data-delay='8' data-increment="1">8</div>
                    <p>Projects</p>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
        <!-- //Stats -->

    </div>
</div>
<!-- //Progressive-Effects -->


<!-- Portfolio -->
<div class="portfolio" id="portfolio">
    <h3>Portfolio</h3>

    <div class="tabs tabs-style-bar">
        <nav>
            <ul>
                <li><a href="#section-bar-1" class="icon icon-box"><span>Web Based Application</span></a></li>
                <li><a href="#section-bar-2" class="icon icon-display"><span>Desktop Based Application</span></a></li>
                <li><a href="#section-bar-3" class="icon icon-upload"><span>OTHERS</span></a></li>
            </ul>
        </nav>

        <div class="content-wrap">

            <!-- Tab-1 -->
            <section id="section-bar-1" class="agileits w3layouts">
                <h4>Web Based</h4>


                <div class="gallery-grids">
                    @foreach($portfolio as $portfol)
                    <div class="col-md-4 col-sm-4 gallery-top">
                        <a href=""  data-toggle="modal" data-target="#myModal{{$portfol->id}}">
                            <figure class="effect-bubba">
                                <img src="{{$portfol->image}}" alt="" class="img-responsive" height="250px;">
                                <figcaption>
                                    <h4>{{$portfol->project_name}}</h4>
                                </figcaption>
                            </figure>
                        </a>

                    </div>

                        <div class="tooltip-content">

                            <div class="modal fade features-modal" id="myModal{{$portfol->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">{{$portfol->project_name}}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{$portfol->image}}" alt="Hitech Info" height="400px;">
                                            <p>{{$portfol->link}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    @endforeach

                    <div class="clearfix"></div>
                </div>



            </section>
            <!-- //Tab-1 -->


            <!-- Tab-2 -->
            <section id="section-bar-2" class="agileits w3layouts">
                <h4>Desktop Based</h4>


                <div class="gallery-grids">
                    @foreach($webs as $web)
                        <div class="col-md-4 col-sm-4 gallery-top">
                            <a href=""  data-toggle="modal" data-target="#myModal{{$web->id}}">
                                <figure class="effect-bubba">
                                    <img src="{{$web->image}}" alt="" class="img-responsive" height="250px;">
                                    <figcaption>
                                        <h4>{{$web->project_name}}</h4>
                                    </figcaption>
                                </figure>
                            </a>

                        </div>

                        <div class="tooltip-content">

                            <div class="modal fade features-modal" id="myModal{{$web->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title">{{$web->project_name}}</h4>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{$web->image}}" alt="Hitech Info" height="400px;">
                                            <p>{{$web->link}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                    @endforeach

                    <div class="clearfix"></div>
                </div>


            </section>
            <!-- //Tab-2 -->

            <!-- Tab-3 -->
            <section id="section-bar-3" class="agileits w3layouts">
                <h4>Others</h4>
                <div class="gallery-grids">
                    <div class="col-md-4 col-sm-4 gallery-top">
                        <a href="{{asset('frontend')}}/images/oracle.jpg" class="swipebox">
                            <figure class="effect-bubba">
                                <img src="{{asset('frontend')}}/images/oracle.jpg" alt="" class="img-responsive" height="250px;">
                                <figcaption>
                                    <h4>ORACLE</h4>
                                </figcaption>
                            </figure>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-4 gallery-top">
                        <a href="{{asset('frontend')}}/images/designepattern.jpg" class="swipebox">
                            <figure class="effect-bubba">
                                <img src="{{asset('frontend')}}/images/designepattern.jpg" alt="" class="img-responsive" height="250px;">
                                <figcaption>
                                    <h4>Design Pattern</h4>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-4 gallery-top">
                        <a href="{{asset('frontend')}}/images/d1.png" class="swipebox">
                            <figure class="effect-bubba">
                                <img src="{{asset('frontend')}}/images/d1.png" alt="" class="img-responsive" height="250px;">
                                <figcaption>
                                    <h4>Database Design</h4>
                                </figcaption>
                            </figure>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </section>
            <!-- //Tab-3 -->


        </div><!-- //Content -->
    </div><!-- //Tabs -->
</div>
<!-- //Portfolio -->



<!-- Map -->
<div class="agileaboutaitsabout" id="agileaboutaitsabout">
    <div class="agileaboutaits">
        <h1 style="color: white;text-align: center;">Location </h1>
        <div class="container">
            <img src="{{asset('frontend')}}/images/location.jpg" alt="" class="img-responsive" height="250px;">

        </div>
    </div>
</div>
<!-- //Map -->



<!-- Booking -->
<div class="w3layoutsbooking" id="contact">
    <div class="container">

        <h3>Book Your Project</h3>

        <div class="booking-form-aits">
            <form id="infoForm" action="{{url('/comment/user-comment')}}" class="form-horizontal"  method="POST" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="text" class="margin-right" Name="name" placeholder="NAME" required="">
                <input type="email" Name="email" placeholder="email" required="">
                <input type="text" class="margin-right" Name="phoneno" placeholder="PHONE NUMBER" required="">
                <input type="text" Name="place" placeholder="place" required="">
                <textarea name="project_details" placeholder="project_details" required=""></textarea>
                <div class="send-button agileits w3layouts">
                    <button class="btn btn-primary">SEND MESSAGE<span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></button>
                </div>
            </form>
        </div>

    </div>
</div>
<!-- //Booking -->

@endsection