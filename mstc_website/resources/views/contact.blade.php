@extends('./base/header')
<!-- @section('style')

<style type="text/css">
	.snow{
  background-image: url('../img/snow.jpg');
  background-repeat: repeat;
  width: 100%;
  height: 650px;
  position: absolute;
  top: 0;
  left: 0;
  animation: animateOne 20s infinite linear;
}
@keyframes animateOne{
  0%{
  background-position: 0px 0px
  }
  100%{
  background-position: 100px 650px
  }
}
</style>

@endsection -->
@section('content')

<div id="map" style="height: 400px;width:100%;">
	
</div>
<script>
	function initMap(){
		var options={
			zoom:14,
			center:{lat:23.1885,lng:72.6290}
		}
		var map=new google.maps.Map(document.getElementById('map'),options);
		var marker=new google.maps.Marker({position:{lat:23.1885,lng:72.6290},
			map:map
	});
	}
</script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDsDeJ6sbWnkIcbgk-zWNz-8wNWbalCyQg&callback=initMap">
</script>
<div class="container" style="margin-top: 5%;margin-bottom: 5%;">
	<div class="row">
		 <div class="col-md-3 col-sm-3" style="position: relative;overflow: hidden;">
		 	<h4>Contact Info</h4>
			<p style="color: #777777;">
				Microsoft Student Technical Club(MSTC)<br><br>
				Dhirubhai Ambani Institute Of Information And Communication Technology<br><br>
				Near Infocity,Gandhinagar,Gujarat-382002
				Email:microsoftclub@daiict.ac.in<br>
				Phone:+91 7228899400
			</p>
		 </div>
		 <div class="col-md-8 col-sm-8">
		 	<h2>CONTACT ME</h2>
			<p style="color: #777777">Fields marked with <strong style="color: red;">*</strong> are required</p>
			<form action="{{ route('sendmail') }}" method="post">
			    <div class="form-group">
			      <label for="name">Name:</label>
			      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
			    </div>
			   <div class="form-group">
			      <label for="email">Email:</label>
			      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    			</div>
			    <div class="from-group">
			    	<label for="msg">Message:</label>
			    	<textarea class="form-control" rows="5" id="msg" name="msg"></textarea>
			    </div>
			    <button type="submit" class="btn btn-primary" style="margin-top: 5%;">Submit</button>
			    {{ csrf_field() }}
			  </form>
		 </div>
	</div>
</div>



@endsection