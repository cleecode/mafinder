<?php include("includes/header.php");?> 
<?php include("includes/nav-top.php");?>

<div ng-app="myapp"  class="mainContainer">
	<div class="intro-start">
		<section id="intro" class="slide">
			<div class="overlay">
				<div ng-controller="TitleCtrl" class="intro-text">
					<h2>{{title.name}}</h2><hr>
					<h3>{{title.summary}}</h3>
				</div>
			</div>
		</section>
	</div>

	<div id="mapSection">
		<div class="container">
			<div class="header">
				<h3 class="text-muted">Map</h3>
			</div>
			<div class="row content">
				<!-- Google Map -->
				<div class="col-md-7">
					<div ng-controller="mapCtrl" id="map">
						<ui-gmap-google-map center='map.center' zoom='map.zoom' options="map.options">
						 <ui-gmap-markers fit="true" models="markers" coords="'self'"></ui-gmap-markers>
						</ui-gmap-google-map>	 
					<!--
					<img src="holder.js/645x645">
					-->
					
					</div>
				</div>
				<!-- Side Panel -->
				<div class="col-md-5">
					<div class="panel panel-default">
						<!-- Panel Title -->
						<div class="panel-heading">
							<h2 class="panel-title text-center">Find a school near you<span class="glyphicon glyphicon-map-marker"></span></h2>
						</div>
						<!-- Panel Body -->
						<div class="panel-body">
							<!-- Creates Form (novalidate disables HTML validation, Angular will control) -->
							<form name ="addForm" novalidate>
								<!-- Text Boxes and Other User Inputs. Note ng-model binds the values to Angular $scope -->
								<div class="form-group">
									<label for="username">Username <span class="badge">All fields required</span></label>
									<input type="text" class="form-control" id="username" placeholder="Username here" ng-model="formData.username" required>
								</div>
								<!--
								<label class="radio control-label">Gender</label>
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="radiomale" value="Male" ng-model="formData.gender">
										Male
									</label>
								</div>
								<div class="radio" required>
									<label>
										<input type="radio" name="optionsRadios" id="radiofemale" value="Female" ng-model="formData.gender">
										Female
									</label>
								</div>
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="radioother" value="What's it to ya?" ng-model="formData.gender">
										What's it to ya?
									</label>
								</div>
								-->
								<div class="form-group">
									<label for="price">Price per Month</label>
									<input type="number" class="form-control" id="price" placeholder="100" ng-model="formData.age" required>
								</div>
								<div class="form-group">
									<label for="latitude">Latitude</label>
									<input type="text" class="form-control" id="latitude" value="39.500" ng-model="formData.latitude" readonly>
								</div>
								<div class="form-group">
									<label for="longitude">Longitude</label>
									<input type="text" class="form-control" id="longitude" value="-98.350" ng-model="formData.longitude" readonly>
								</div>
								<label class="radio control-label">Free Class?</label>
								<div class="radio">
									<label>
										<input type="radio" name="optionsRadios" id="freeClassYes" value="Yes" ng-model="formData.free">
										Yes
									</label>
								</div>
								 <div class="radio" required>
									<label>
										<input type="radio" name="optionsRadios" id="freeClassNo" value="No" ng-model="formData.free">
										No
									</label>
								</div>
								<!-- Submit button. Note that its tied to createUser() function from addCtrl. Also note ng-disabled logic which prevents early submits.  -->
								<button type="submit" class="btn btn-danger btn-block" ng-disabled="addForm.$invalid">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!--
	<div class="intro-start">
	<section id="intro" class="slide">
		<div class="overlay">
			<div class="intro-text">
				<div ng-controller="TitleCtrl">
					<h1>{{title.name}}</h1>
				</div>
				<h1>Martial Arts Schools</h1><hr>
				<h3>MA School Search Tool</h3>
				<p>Find a martial arts school near you</p>
			</div>
		</div>
	</section>
	-->
	<!--
	<section class="intro-bottom">
			<div class="col-sm-4">
				<h3>Mobile Applications</h3><br>
				<i class="glyphicon glyphicon-tasks"></i><br><br>
				<p>Intuitive designs for your applications.</p>
			</div>
			<div class="col-sm-4">
				<h3>Development</h3><br>
				<i class="glyphicon glyphicon-hdd"></i><br><br>
				<p>Streamlined products with full functionality.</p>
			</div>
			<div class="col-sm-4">
				<h3>Corporate Solutions</h3><br>
				<i class="glyphicon glyphicon-list-alt"></i><br><br>
				<p>Building solutions designed to allow users to fully utilize all products efficiently.</p>
			</div>
	</section>
	-->


 

<?php include("includes/footer.php");?>




