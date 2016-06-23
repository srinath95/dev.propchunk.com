<?php 
include ('header.php');
?>

<section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>ADMIN DASHBOARD</h2>

					<!--<i class="fa fa-2x fa-angle-down"></i>-->

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<!--<hr class="marginbot-50">-->
			</div>
		</div>
    <div class="row">
        <div class="col-lg-6">
            
			 
                          <form name="con" action="save_json.php" method="POST">
							<div class="form-group" >						  
                            <label for="apt-name" class="sr-only">
                                Apartment Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control col-xs-4" id="apt-name" name="apt-name" placeholder="Apartment name" required="required" /></div>
							</div>
						
							<div class="form-group">
                            <label for="locality" class="sr-only">
                                Locality</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control col-xs-4" id="locality" name="locality" placeholder="Locality name" required="required" /></div>
                             </div>
						
						
						    <div class="form-group">
                           
                            <label for="yield" class="sr-only">
                                Yield</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
						    <input type="text" class="form-control col-xs-4" id="yeild" name="yield" placeholder="Yield" required="required" /></div>
                            </div>
						
						     <div class="form-group">
							<label for="term" class="sr-only">
                                Term</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control col-xs-4" id="term" name="term" placeholder="Term" required="required" /></div>
                            </div>
						
						  <div class="form-group">
                            <label for="message" class="sr-only">
                                Message</label>
								
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Description of Property"></textarea>
                        </div>
					
						     <input type="submit" id="submit" value="Send" />
						</form>
				   </div>
			</div>
                <div class="row">
                    <div class="col-md-9">
					

						
            </div>
        </div>
		
		
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->
	
<?php 
include ('footer.php');
?>	