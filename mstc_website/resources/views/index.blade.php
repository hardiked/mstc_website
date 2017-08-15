@extends('./base/header')

@section('title')
	MSTC: HOME
@endsection


@section('content')

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../img/homepage-slideshow-02.jpg" alt="Los Angeles" style="width:100%;" class="img1">
        <div class="carousel-caption" style="margin-bottom: 15%;">
              <h1 style="color: chartreuse;" class="craft">WE CRAFT AWESOME THINGS</h1>
              <h3 class="craft">Microsoft Student Technical Club</h3>
              <a href="#" class="btn btn-primary register" style="background-color: darkblue;margin-right: 5%;">REGISTER NOW</a>
              <a href="#" class="btn btn-default learn">LEARN MORE</a>
            </div>
      </div>

      <div class="item">
        <img src="../img/homepage-slideshow-02.jpg" alt="Chicago" style="width:100%;" >
        <div class="carousel-caption" style="margin-bottom: 15%;">
              <h1 style="color: chartreuse;">WE CRAFT AWESOME THINGS</h1>
              <h3>Microsoft Student Technical Club</h3>
              <a href="#" class="btn btn-primary" style="background-color: darkblue;margin-right: 5%;">REGISTER NOW</a>
              <a href="#" class="btn btn-default">LEARN MORE</a>
            </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>



<div class="row">
	<div class="col-sm-12 about">
		<h1 style="text-align: center;">About MSTC</h1>
		<div style="margin-right: 5%;margin-left: 5%;font-size: 16px;color:#777777;line-height: 1.66em;margin-bottom: 20px;">
			We are individuals who come together and share common interest putting our ideas into existence in order to contribute to the Microsoft Community. Yes, we are the <strong style="color: rgb(10,115,190);font-weight: 700;">MSTC-Microsoft Student Technical Club</strong> of <a style="color: #1e73be;" href="http://www.daiict.ac.in/" target="_blank" rel="noopener">DAIICT</a>. We try to make ‘I don’t know’ to ‘I don’t know yet’.
		</div>

		<div style="margin-right: 5%;margin-left: 5%;font-size: 16px;color:#777777;line-height: 1.66em;margin-bottom: 20px;">
		Many people have genuine ideas related to app and web development but there is no proper platform provided to them. We, as MSTC, come here and help them give the right environment to inculcate their ideas and develop for Microsoft. We aim to do this in as exciting and simplified manner as possible. If you want to find answers to your questions, share ideas, solve problems, or whatever may be your goal, MSTC is here to help you get more out of your ideas and technology. If you need help browse our club, or post a question and our community members and volunteers can help you understand the problem with advice or step by-step instructions.
		</div>


		<div style="margin-right: 5%;margin-left: 5%;font-size: 16px;color:#777777;line-height: 1.66em;margin-bottom: 20px;">
		We also come up with various events and competitions which would help you to create a strong foundation for your dream competitions like those of Imagine Cup. We are here to make you experience the windows development environment and encourage you to develop and contribute towards the same.
		</div>
	</div>
</div>

<div class="row" style="margin-bottom: 5%;height: 500px;">
	<div style="position: relative;background-attachment: fixed;background-image: url('../img/sapce.jpg');background-repeat: no-repeat;height: 100%;width: 100%;">
		<a href="#" id="logIn" class="btn btn-success register3" style="position: absolute;bottom:20%;right: 30%;box-shadow: 0px 3px 0px 0px #b12929;background-color: #dd3333; width: 200px; left: 20%; height: 40px; display: inline-block; text-align: center; max-width: 100%; padding-top: 0.6%;"><span class="glyphicon glyphicon-log-in" style="display:none;margin-right: 5px;"></span>Log In</a>

		<a href="#" class="btn btn-success register3" style="position: absolute;bottom:20%;right: 30%;box-shadow: 0px 3px 0px 0px #b12929;background-color: #dd3333; width: 200px; left: 70%; height: 40px; display: inline-block; text-align: center; max-width: 100%; padding-top: 0.6%;">Learn More</a>
	</div>
</div>

<div class="container">
	<div class="row">
		<div style="text-align: center;">
			<h1 id="fancy-title-9" class="mk-fancy-title  simple-style  color-single" style="font-family: star">
				<span class="present">Present/upcoming events&nbsp;by MSTC</span>
			</h1>
		</div>
		<h2 class="title" style="text-align: center;"><span class="title-text learn1">Hackathon</span></h2>
		<a href="#" class="btn btn-primary col-sm-offset-5 col-md-offset-5.9 register1" style="background-color: #1e73be;color: #fff!important;">Learn More</a>
		<br>

		<div class="img-responsive col-md-offset-2 col-sm-offset-1" style="display: inline;"><img class="vc_single_image-img img1" src="http://d3gnp09177mxuh.cloudfront.net/tech-page-images/unity.png" style="height: 10%;width: 10%;">
		<span style="font-family: star;font-size: 190%;" class="unity">Unity Game Development</span><br>
		<h4 class="col-md-6 col-md-offset-3 unity" style="font-family: star;font-size: 18px;color: #404040;font-weight: 600;text-align: center;">Unity is one of the world’s largest creative communities—and the number one game development platform. Unity gives you everything you need to realize your creative vision fast, and move ahead.Learn Unity Game Development with MSTC Sessions.</h4>
		</div>

		
		
	</div>
	<div class="img-responsive col-md-offset-2 col-sm-offset-1" style="display: inline;"><img class="vc_single_image-img img2" src="http://www.ocalaitpros.com/wp-content/uploads/2015/02/31dfef58-1812-4523-ab35-c8bf20fcfd83.png" style="height: 10%;width: 10%;top: -10%;">
	</div>
		<span style="font-family: star;font-size: 190%;" class="asp1">ASP.NET</span><br>
		<h4 class="col-md-6 col-md-offset-3 asp" style="font-family: star;font-size: 18px;color: #404040;font-weight: 600;text-align: center;">This workshop is intended to provide participants with a detailed introduction of basic and advance controls of AJAX, Advance concepts of Report Handling, Web services and Web.config file handling in Dot Net. This workshop will create the Professional skill of website designing in students using ASP.NET</h4>
		
</div>


@endsection


@section('script')
	<script>
		window.sr=ScrollReveal();
		sr.reveal('.navbar',{
			duration: 2000,
			origin:'bottom'
		});
		sr.reveal('.about',{
			duration: 2000,
			origin:'top',
			distance:'300px'
		});
		sr.reveal('.register',{
			duration: 2000,
			delay:3000,
			origin:'top'
		});
		sr.reveal('.learn',{
			duration: 2000,
			delay:3000,
			origin:'top'
		});
		sr.reveal('.img1',{
			duration: 3000,
			origin:'top'
		});
		sr.reveal('.craft',{
			duration: 2000,
			delay:2000,
			origin:'right'
		});
		sr.reveal('.present',{
			duration: 2000,
			origin:'top'
		});
		sr.reveal('.learn1',{
			duration: 2000,
			origin:'top'
		});
		sr.reveal('.learn3',{
			duration: 2000,
			delay:1000,
			origin:'top'
		});
		sr.reveal('.register3',{
			duration: 2000,
			delay:1000,
			origin:'top'
		});
		sr.reveal('.register1',{
			duration: 2000,
			origin:'top'
		});
		sr.reveal('.unity',{
			duration: 2000,
			delay:1000,
			origin:'right'
		});
		sr.reveal('.img2',{
			duration: 2000,
			delay:2000,
			origin:'right'
		});
		sr.reveal('.asp',{
			duration: 2000,
			delay:1000,
			origin:'right'
		});
		sr.reveal('.asp1',{
			duration: 2000,
			delay:3000,
			origin:'right'
		});
		// window.onload=function(){
		// 	document.getElementsByClassName('glyphicon-log-in')[0].style.display = "none";
		// }
		$("#logIn").mouseover(function(){
			document.getElementsByClassName('glyphicon-log-in')[0].style.display = "inline-block";

		})
		$("#logIn").mouseout(function(){
			document.getElementsByClassName('glyphicon-log-in')[0].style.display = "none";

		})
		document.getElementById("logIn").onmouseLeave
	</script>
@endsection