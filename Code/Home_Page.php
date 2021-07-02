<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>SAE NIT Kurukshetra</title>	
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">

   
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap'>
    <script>
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function() {
		var currentScrollPos = window.pageYOffset;
		  if (prevScrollpos > currentScrollPos) {
			document.querySelector(".navbar").style.top = "0";
		  } else {
			document.querySelector(".navbar").style.top = "-50px";
		  }
		  prevScrollpos = currentScrollPos;
		}
	</script>		
</head>
<style>

</style>
<body>
	<div class="bg_supporter"></div>
	<div class="premain">
	<div class="main">
		<nav class="navbar homepage navbar-expand-md navbar-trans navbar-dark fixed-top">
			<a class="navbar-brand" href="{{url('/home')}}">SAE<font color="#188BA3">NITKKR</font></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon" style="color:white;"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
			<ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Teams
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{url('/accelerons')}}">Accelerons</a>
                    <a class="dropdown-item" href="{{url('/nitrox')}}">Nitrox</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuEvents" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Events
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuEvents">
                    <a class="dropdown-item" href="{{url('/events/autokriti')}}">Autokriti</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('discuss') }}">Discuss</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/blogs') }}">Articles</a>
				</li>
				<li class="nav-item">
                    <a class="nav-link" href="{{ url('/sponsors') }}">Sponsors</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Others
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="{{url('/gallery')}}">Gallery</a>
					</div>
				</li>
                <li class="nav-item">
                    <a class="nav-link  nav_login_link" href="{{ route('login') }}"><button class="btn btn-outline-warning">{{ __('Login') }}</button></a>
                </li>
                @else
                @auth
                    @if(Auth::guard('admin')->check())
                        <li class="nav-item dropdown">
                            <a id="navbarDropdownMenuLink" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Admin  <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endif
                    @if(!Auth::guard('admin')->check())
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Teams
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{url('/accelerons')}}">Accelerons</a>
                            <a class="dropdown-item" href="{{url('/nitrox')}}">Nitrox</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuEvents" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Events
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuEvents">
                            <a class="dropdown-item" href="{{url('/events/autokriti')}}">Autokriti</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('discuss') }}">Discuss</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/blogs') }}">Articles</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('/sponsors') }}">Sponsors</a>
						</li>
						<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Others
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{url('/gallery')}}">Gallery</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <a class="dropdown-item" href="{{ '/user?id='.auth()->user()->id }}">Profile</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        </li>
                    @endif
                @endauth
            @endguest
			</ul>
			</div>
        </nav>
		<div class="main_tag  row">
			<div class="label col-md-7  col-12 col-lg-5">
				<div class="brand_name">SAE</div>
				<div class="brand_state">NIT Kurukshetra</div>
				<div class="motos"><span>Design.</span><span>Build.</span><span>Race.</span></div>
			</div>

			<div class="directions ml-auto col-md-5 col-sm-6 col-8 col-lg-3">
				<button class="btn btn-danger btn-block" style="cursor:default">Meet Our Teams</button>
				<div class="home_teams row" style="justify-content: center;">
					<div class="home_team_nitrox mt-3"><a href="/nitrox">Team <font color="#188BA3">Nitrox</font></a></div>
					<div class="home_team_accelerons mt-3"><a href="/accelerons">Team <font color="#188BA3">Accelerons</font></a></div>
				</div>
				<a href="{{route('blogs')}}" class="articles btn btn-primary btn-block">Read Articles</a>
			</div>
			<div class="col-lg-2 col-2 col-sm-3"></div>
		</div>
		
	</div>			<!--Main--> 
	</div>			<!--PreMain-->


	<!--AboutUs-->

	<div class="home_about_us">
		<div class="about_title container py-3" style="text-align:center;">ABOUT &nbsp;<font color="#188BA3">SAE</font></div>
		<div class="about_body container "> SAE International is a global body of scientists, engineers and practitioners that advances self-propelled vehicle and system knowledge in a neutral forum for the benefit of society. It is a globally active professional association and standards organization for engineering professionals in various industries. Principal emphasis is placed on transport industries such as automotive, aerospace, and commercial vehicles. SAE International coordinates the development of technical standards based on best practices identified and described by SAE committees and task forces. SAE International is the leader in connecting and educating engineers while promoting, developing and advancing aerospace, commercial vehicle and automotive engineering. SAE International devotes its resources to :-
			<ul style="padding-left:40px;">
				<li>Technical standardization</li>
				<li>Ground vehicle standards</li>
				<li>Aerospace standards</li>
				<li>Organization of events, conferences, meetings and symposia</li>
				<li>Professional development</li>
				<li>Publication of magazines, newsletters, journals, books, etc</li>
			</ul>
		</div>
	</div>

	<div class="faculty_section ">
		<div class="about_title py-3" style="text-align:center; margin-bottom:35px;">OUR &nbsp;<font color="#188BA3">FACULTY</font>&nbsp;ADVISORS</div>
		<div class="row " style="width:80%; margin-left:10%;">
			<div class="col-sm-6 col-lg-4 ">
				<div class="ih-item circle effect3 left_to_right ml-auto mr-auto mt-5"><a >
					<div class="img"><img src="images/angra.jpg" alt="img"></div>
					<div class="info">
					  <h3 style="text-transform: none">Dr. Surjeet Angra</h3>
					  <p>Professor<br>Mechanical Department</p>
					</div></a></div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<div class="ih-item circle effect3 left_to_right ml-auto mr-auto mt-5"><a >
					<div class="img"><img src="images/mittal.jpg" alt="img"></div>
					<div class="info">
					  <h3 style="text-transform: none">Dr. Vinod Mittal</h3>
					  <p>Professor<br>Mechanical Department</p>
					</div></a>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4">
				<div class="ih-item circle effect3 left_to_right ml-auto mr-auto mt-5"><a >
					<div class="img"><img src="images/JDSir.jpg" alt="img"></div>
					<div class="info">
					  <h3 style="text-transform: none">Mr. Jaideep Gupta</h3>
					  <p>Associate Professor<br>Mechanical Department</p>
					</div></a></div>
			</div>
		</div>
	</div>

	<div class="block_section ">
		<div class="section_title container" style="margin-bottom:30px;">ALSO &nbsp;<font color="#188BA3">VISIT</font> </div>
        <div class="block_section_container row" style="width:90%; margin-left:5%; ">
            <div class="block_section_el col-xl-4 col-md-6">
                <div class="card" >
                    <div class="face face1">
                        <div class="content">
                            <img src="{{asset('images/article.png')}}">
                            <h3>Articles</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Read articles on various topics related to recent technologies in automotive sector and much more!</p>
                                <a href="/blogs" class="btn btn-primary">Open</a>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="block_section_el col-xl-4 col-md-6">
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="{{asset('images/gallery.png')}}">
                            <h3>Gallery</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>View our gallery which shows our journey till date!</p>
                                <a href="/gallery" class="btn btn-primary">Open</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block_section_el col-xl-4 col-md-6">
                <div class="card">
                    <div class="face face1">
                        <div class="content">
                            <img src="{{asset('images/support.png')}}">
                            <h3>Support Us</h3>
                        </div>
                    </div>
                    <div class="face face2">
                        <div class="content">
                            <p>Support us and become our partner in our journey!</p>
                                <a href="/support" class="btn btn-primary">Open</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </div>
	<!--Footer-->
	{{-- <div class="footer row">
		<div class="copyright col-md-6">
			<i class="fa fa-copyright" aria-hidden="true"></i> 2020 SAE National Institute of Technology, Kurukshetra
		</div>
		<div class="social-media col-md-6">
			<a class="btn button_social" href="">
				<i class="fa fa-facebook-f"></i>
			</a>
			<a class="btn button_social" href="">
				<i class="fa fa-instagram"></i>
			</a>
			<a class="btn button_social" href="">
				<i class="fa fa-twitter"></i>
			</a>
			<a class="btn button_social" href="">
				<i class="fa fa-youtube"></i>
			</a>
		</div>
	</div> --}}
	<div class="footer">
		<div class="top" style="width:90%; margin-left:5%;">
			
		</div>
		
		<div class="footer_body row justify-content-center ">
			<div class="block first col-lg-3 col-6">
				<ul>
					<li><h2 style="font-size: 26px;">The Trinity</h2></li>
					<li style="color: #000;"> t</li>
					<li><a href="/events/autokriti">Autokriti</a></li>
					<li><a href="/accelerons">Team Accelerons</a></li>
					<li><a href="/nitrox">Team Nitrox</a></li>
				</ul>
			</div>
			<div class="block second col-lg-3 col-6">
				<ul>
					<li><h2 style="font-size: 26px;">Explore</h2></li>
					<li style="color: #000;">t</li>
					<li><a href="/gallery">Gallery</a></li>
					<li><a href="/sponsors">Sponsors</a></li>
					<li><a href="/discuss">Discuss</a></li>
					<li><a href="/blogs">Articles</a></li>
					<li><a href="/hall_of_fame">Hall of Fame</a></li>
					<li><a href="/support">Support Us</a></li>
					
				</ul>
			</div>
			<div class="block third col-lg-3 col-6">
			<dl>
					<dt><h2 style="font-size: 26px;">Our Leaders</h2></dt>
					<dd style="color: #000;">t</dd>
					<dt class="change">President</dt>
					<dd>&nbsp;&nbsp;<a href="https://www.linkedin.com/in/keshav-vats-07b624167" target="_blank">Keshav Vats  <i class="fa fa-linkedin-square" aria-hidden="true"></i></a></dd>
				
					<dt class="change"></dt>Vice President</dt>
					<dd>&nbsp;&nbsp;<a href="www.linkedin.com/in/ritik-goyal-bab617165/" target="_blank"> Ritik Goyal <i class="fa fa-linkedin-square" aria-hidden="true"></i></a></dd>
					
					<dt class="change">Marketing Chairperson</dt>
					<dd>&nbsp;&nbsp;<a href="https://www.linkedin.com/in/pavitra-jain-57b715165" target="_blank">Pavitra Jain  <i class="fa fa-linkedin-square" aria-hidden="true"></i></a></dd>
				</dl>
			</div>
			<div class="block forth col-lg-3 col-6">
				<ul>
					<li><h2 style="font-size: 26px;">Contact Us</h2></li>
					<li style="color: #000;">t</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i> +91 7999991375</li>
					<li><a href="mailto:smthng@gmail.com   " target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;saenitkurukshetra@gmail.com</a></li>
					<li style="color: #000;">t</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i> +91 8053225178</li>
					<li><a href="https://mail.google.com/mail/u/0/?tab=km1#inbox?compose=new" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;acceleronsnitkkr@gmail.com</a></li>
					<li style="color: #000;">t</li>
					<li><i class="fa fa-phone" aria-hidden="true"></i> +91 7082640201</li>
					<li><a href="https://mail.google.com/mail/u/0/?tab=km1#inbox?compose=new" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;nitroxkkr@gmail.com</a></li>
				</ul>

			</div>
		</div>

		<div class="bottom">
			<i class="fa fa-copyright" aria-hidden="true"></i> 2020 SAE National Institute of Technology, Kurukshetra
			<div class="creators">
				Designers and Developers : &nbsp;&nbsp;&nbsp;Amit Rawat &nbsp;&nbsp;&nbsp; <hr size="1" width="" color="#fff"> &nbsp;&nbsp;&nbsp;Arnav Goel
			</div>
		</div>
	</div>
	<script type="text/javascript">
		const $dropdown = $(".dropdown");
		const $dropdownToggle = $(".dropdown-toggle");
		const $dropdownMenu = $(".dropdown-menu");
		const showClass = "show";
		
		$(window).on("load resize", function() {
		if (this.matchMedia("(min-width: 768px)").matches) {
			$dropdown.hover(
			function() {
				const $this = $(this);
				$this.addClass(showClass);
				$this.find($dropdownToggle).attr("aria-expanded", "true");
				$this.find($dropdownMenu).addClass(showClass);
			},
			function() {
				const $this = $(this);
				$this.removeClass(showClass);
				$this.find($dropdownToggle).attr("aria-expanded", "false");
				$this.find($dropdownMenu).removeClass(showClass);
			}
			);
		} else {
			$dropdown.off("mouseenter mouseleave");
		}
		});
	</script>
</body>
</html>
