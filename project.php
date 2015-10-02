<?php
	
	include_once 'header.php';
?>
    <div class="container">
	    <div class="row">
		    <section class="col-lg-12">
			    <h2><span class="sprite st-276"></span>Projects</h2>
		    </section>
		    <section class="col-lg-12">
			    <h3>Gallery of Projects</h3>
			    <p>These are my most recent projects.</p>
			</section>
  <!--THIS IS A CAROUSEL-->
<section class="col-lg-12">
<div id="myCarousel" class="carousel slide" data-ride="carousel" > 
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/project1.png" alt="Project1">
    </div>

    <div class="item">
      <img src="img/project2.png" alt="Project2">
    </div>

    <div class="item">
      <img src="img/project3.png" alt="Project3">
    </div>

    <div class="item">
      <img src="img/project4.png" alt="Project4">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>



	    </div>
    </div>
		<script>
			$(document).ready(function () {
			$('.dropdown-toggle').dropdown();
			});
			function check_project(){
				var query = window.location.search.substring(1);
				var project_id=query.slice(-1);
				console.log(project_id);
				
				if(project_id==1 || project_id==2 || project_id==3 || project_id==4 ){
					
					$('#myCarousel').carousel(project_id -1);
										
				}
				
				
			}
			check_project();
			 
			
		</script>
    </body>
</html>
