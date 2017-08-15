<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Photoalbum preview</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <script src="https://use.fontawesome.com/5d1b031d04.js"></script>
  <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    </head>
    <style>
    html { 
  /*box-sizing: border-box;*/ 
} 
*, *:before, *:after { 
  box-sizing: inherit; 
} 
body { 
    background: url('../img/back.jpg') 0 0 no-repeat; 
    background-size: 100%; 
} 
h2{ 
    color: #a456dd; 
    margin-top: 30px; 
    text-align: center; 
    font-family: 'Open Sans', sans-serif; 
} 
.albums-tab { 
    transform: scale(0.5); 
} 
.albums-tab-thumb { 
    margin-top: 60px; 
    width: 200px; 
    height: 200px; 
} 
.albums-tab-thumb img { 
    height: 200px; 
    width: 200px; 
    background-color: rgba(255,255,255,0.3); 
    padding: 10px;        
} 

/* Transformations */ 

.sim-anim-6 { 
    position: relative; 
    left: 50%; 
    transform: translate(-50%, 50%); 
} 

.sim-anim-6 img { 
    position: absolute; 
    -webkit-transition: all 0.8s; 
    -moz-transition: all 0.8s; 
    -o-transition: all 0.8s; 
    transition: all 1.0s; 
} 

.sim-anim-6:hover img { 
    z-index: 1; 
} 

.sim-anim-6:hover img:nth-child(1) { 
    -ms-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -moz-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -o-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -webkit-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    transform: translate(-35%, -85%) scale(1.0, 1.0) rotate(-20deg); 
} 

.sim-anim-6:hover img:nth-child(2) { 
    -ms-transform: translate(-80%, 35%) scale(0.7, 0.7) rotate(-20deg); 
    -moz-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -o-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -webkit-transform: translate(-80%, 35%) scale(0.7, 0.7) rotate(-20deg); 
    transform: translate(-80%, 35%) scale(1.0, 1.0) rotate(-20deg); 
} 

.sim-anim-6:hover img:nth-child(3) { 
    -ms-transform: translate(25%, 90%) scale(0.7, 0.7) rotate(-20deg); 
    -moz-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -o-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -webkit-transform: translate(25%, 90%) scale(0.7, 0.7) rotate(-20deg); 
    transform: translate(25%, 90%) scale(1.0, 1.0) rotate(-20deg); 
} 

.sim-anim-6:hover img:nth-child(4) { 
    -ms-transform: translate(70%, -25%) scale(0.7, 0.7) rotate(-20deg); 
    -moz-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -o-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -webkit-transform: translate(70%, -25%) scale(0.7, 0.7) rotate(-20deg); 
    transform: translate(70%, -24%) scale(1.0, 1.0) rotate(-20deg); 
} 

.sim-anim-6:hover img:nth-child(5) { 
    -ms-transform: translate(-110%, -55%) scale(0.7, 0.7) rotate(-20deg); 
    -moz-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -o-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -webkit-transform: translate(-110%, -55%) scale(0.7, 0.7) rotate(-20deg); 
    transform: translate(-110%, -55%) scale(0.7, 0.7) rotate(-20deg); 
} 

.sim-anim-6:hover img:nth-child(6) { 
    -ms-transform: translate(100%, 60%) scale(0.7, 0.7) rotate(-20deg); 
    -moz-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -o-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -webkit-transform: translate(100%, 60%) scale(0.7, 0.7) rotate(-20deg); 
    transform: translate(100%, 62%) scale(0.7, 0.7) rotate(-20deg); 
} 

.sim-anim-6:hover img:nth-child(7) { 
    -ms-transform: translate(40%, -115%) scale(0.7, 0.7) rotate(-20deg); 
    -moz-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -o-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -webkit-transform: translate(40%, -115%) scale(0.7, 0.7) rotate(-20deg); 
    transform: translate(40%, -114%) scale(0.7, 0.7) rotate(-20deg); 
} 

.sim-anim-6:hover img:nth-child(8) { 
    -ms-transform: translate(-50%, 120%) scale(0.7, 0.7) rotate(-20deg); 
    -moz-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -o-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -webkit-transform: translate(-50%, 120%) scale(0.7, 0.7) rotate(-20deg); 
    transform: translate(-50%, 120%) scale(0.7, 0.7) rotate(-20deg); 
} 

.sim-anim-6:hover img:nth-child(9) { 
    /*-ms-transform: translate(-5%, 5%) scale(0.7, 0.7) rotate(-20deg); 
    -moz-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); 
    -o-transform: translate(-35%, -85%) scale(0.7, 0.7) rotate(-20deg); */ 
    -webkit-transform: translate(-5%, 5%) scale(1.2, 1.2) rotate(10deg); 
    transform: translate(-5%, 5%) scale(1.2, 1.2) rotate(10deg); 
}


    </style>
    <body>
    <nav class="navbar navbar-default" style="">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">MSTC</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="./hackathon">HACKATHON'17</a></li>
        <li><a href="./dreamspark">DREAMSPARK</a></li>
        <li><a href="/ideoson">MS IDEOSON</a></li>
        <li><a href="/gallery">GALLERY</a></li>
        <li><a href="#">ABOUT US</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

        <!--<h2>Photoalbum preview</h2>-->
        <div class="albums">
          <div class="albums-tab">
           <div class="albums-tab-thumb sim-anim-6">
            <img src="../img/1.jpg" alt="anim-pic" />
            <img src="../img/2.jpg" alt="anim-pic" />
            <img src="../img/3.jpg" alt="anim-pic" />
            <img src="../img/4.jpg" alt="anim-pic" />
            <img src="../img/5.jpg" alt="anim-pic" />
            <img src="../img/6.jpg" alt="anim-pic" />
            <img src="../img/7.jpg" alt="anim-pic" />
            <img src="../img/8.jpg" alt="anim-pic" />
            <img src="../img/9.jpg" alt="anim-pic" />
           </div>
          </div>
        </div>
        
    </body>
</html>