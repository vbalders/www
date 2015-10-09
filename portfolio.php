<?php
	session_start();
	include_once 'header.php';
?>
    <div class="container portfolio">
	    <div class="row">
		    <section class="col-xs-12">
		    <h2><span class="sprite st-538"></span>Selected Work</h2>
		    </section>
		    <section class="col-xs-12 col-md-6">
			    
			    <h3>McKay School of Education</h3>
			    <img src="img/mse.jpg" class="img-responsive" alt="Image">
			</section>
			<section class="col-xs-12 col-md-6">
				 <h3>Bridges</h3>
			     <img src="img/bridges.jpg" class="img-responsive" alt="Image">
			</section>
			<section class="endorse-section col-xs-12">
				<h3>Endorsements</h3>
				<div class="col-xs-12">
					<button id="add-endorse" href="#" class="pull-right btn btn-success" onclick="toggle_function('form-container');">Add Endorse</button>
				</div>
				<div id="form-container" class="form">
					 <div class="col-xs-3">
					 	<input type="text" name="name" class="form-control" id="name" placeholder="Name">
					 </div>
					 <div class="col-xs-3">
					 	<input type="date" name="date" class="form-control" id="date" placeholder="Date">
					 </div>
					 <div class="col-xs-3">
					 	<input type="text" name="company" class="form-control" id="company" placeholder="Company">
					 </div>
					 <div class="col-xs-3">
					 	<button class="btn btn-md btn-primary" data-toggle="modal" data-target="#myModal">Endorse</button>
					 </div>
				</div>
		
				<table  class="table">
			      
			      <thead>
			        <tr>
			          
			          <th>Name <a href="#" onclick="sort_name();" style="font-size: 12px; margin-left: 10px;">Sort by Name</a></th>
			          <th>Date <a href="#" onclick="sort_date();" style="font-size: 12px; margin-left: 10px;">Sort by Date</a></th>
			          <th>Company</th>
			        </tr>
			      </thead>
			      <tbody id="data_table">
			        
			       
			      </tbody>
			    </table>
			</section>	
	    </div>
     
    </div>
    <div id="DivToPrintOut"></div>

		<script>
		$(document).ready(function () {
			$('.dropdown-toggle').dropdown();
		  	$('#close_modal').on( "click", function() {
	
				save_data();
				$('#myModal').modal('hide');
				alert("You reuqest was submitted");
			});
		    
			
		});
	
		
		</script>
    </body>
    <!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Save Data</h4>
	      </div>
	      <div class="modal-body">
	        <h3>Are you sure you want to summit the endorsement?</h3>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
	        <button id="close_modal" type="button" class="btn btn-primary" >Yes</button>
	      </div>
	    </div>
	  </div>
	</div>

</html>
