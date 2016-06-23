<?php 
include ('header.php');
include('action-form.php')
?>

<section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>PROPERTY CAMPAIGN</h2>

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
            
			 
                          <form name="property-campaign" action="action-form.php " method="POST">
							
							<!--
							<div class="form-group" >						  
                            <label for="PropertyCampaignId" class="sr-only">
                                Property Campaign Id</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control col-xs-4" id="PropertyCampaignId" name="PropertyCampaignId" placeholder="Property Campaign Id" required="required" /></div>
							</div>
							-->
							<!--
							<div class="form-group">
                            <label for="PropertyName" class="sr-only">
                               Property Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control col-xs-4" id="PropertyName" name="PropertyName" placeholder="Property Name" required="required" /></div>
                             </div>
						
						    <div class="form-group">
                            <label for="PropertyDescription" class="sr-only">
                               PropertyDescription</label>
								
                            <textarea name="PropertyDescription" id="PropertyDescription" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Description of Property"></textarea>
                            </div>
						
						    <div class="form-group">
                           
                            <label for="PropertTypeCode" class="sr-only">
                                PropertTypeCode</label>
                            <div class="input-group">
                                <select name="PropertTypeCode" id="PropertTypeCode">
							  <option value="Residential">Residential</option>
							  <option value="Commercial">Commercial</option>
							   </select>
							</div>
							</div>
						     <div class="form-group">
							<label for="TotalArea" class="sr-only">
                                TotalArea</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="number" class="form-control col-xs-4" id="TotalArea" name="TotalArea" placeholder="TotalArea" required="required" /></div>
                            </div>
							<div class="form-group">
							 <label for="AreaMeasurementUnitCode" class="sr-only">
                               AreaMeasurementUnitCode</label>
                            <div class="input-group">
                                <select name="AreaMeasurementUnitCode" id="AreaMeasurementUnitCode">
							  <option value="SquareFeet">SQ. FT</option>
							  <option value="Acres">Acres</option>
							   <option value="Hectares">Hectares</option>
							   <option value="SquareMetre">Square Metre</option>
							   <option value="SquareKm">Square Kilometre</option>
							  
							   </select>
							</div>
							</div>
							
						    <div class="form-group">
							<label for="Locality" class="sr-only">
                                Locality</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control col-xs-4" id="Locality" name="Locality" placeholder="Locality" required="required" /></div>
                            </div>
							<div class="form-group">
							<label for="City" class="sr-only">
                                City</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control col-xs-4" id="City" name="City" placeholder="City" required="required" /></div>
                            </div>
							<div class="form-group">
							<label for="State" class="sr-only">
                                State</label>
                            <div class="input-group">
                                <select name="State" id="State">
							  <option value="Maharashtra">Maharashtra</option>
							  <option value="Gujrat">Gujrat</option>
							   <option value="Delhi">Delhi</option>
							   <option value="MadhyaPradesh">Madhya Pradesh</option>
							   <option value="Punjab">Punjab</option>
							  <option value="Kerala">Kerala</option>
							  <option value="Karnataka">Karnataka</option>
							  <option value="Orissa">Orissa</option>
							  <option value="WestBengal">WestBengal</option>
							   </select>
								
								</div>
								<br />
						    <div class="form-group">
                            <label for="FullAddress" class="sr-only">
                               FullAddress</label>
								
                            <textarea name="FullAddress" id="FullAddress" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Full Address"></textarea>
                            </div>
						     
							 <div class="form-group">
							<label for="Locality" class="sr-only">
                                ActualPropertyCost</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="number" min="0" class="form-control col-xs-4" id="ActualPropertyCost" name="ActualPropertyCost" placeholder="ActualPropertyCost" required="required" /></div>
                            </div>
							<div class="form-group">
							<label for="ActualIRRPercentage" class="sr-only">
                                ActualIRRPercentage</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="number" min="0" max="100" step="0.01" class="form-control col-xs-4" id="ActualIRRPercentage" name="ActualIRRPercentage" placeholder="ActualIRRPercentage" required="required" /></div>
                            </div>
							<div class="form-group">
							<label for="ExpectedIRRPercentage" class="sr-only">
                                ExpectedIRRPercentage</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="number" min="0" max="100" step="0.01" class="form-control col-xs-4" id="ExpectedIRRPercentage" name="ExpectedIRRPercentage" placeholder="ExpectedIRRPercentage" required="required" /></div>
                            </div>
							
							 <div class="form-group">
                            <label for="ConstructionStatus" class="sr-only">
                               ConstructionStatus</label>
								
                            <textarea name="ConstructionStatus" id="ConstructionStatus" class="form-control" rows="9" cols="25" required="required"
                                placeholder="ConstructionStatus"></textarea>
                            </div>
							
							<div class="form-group">
							<label for="BuilderName" class="sr-only">
                                BuilderName</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control col-xs-4" id="BuilderName" name="BuilderName" placeholder="BuilderName" required="required" /></div>
                            </div>
							<div class="form-group">
							<label for="Locality" class="sr-only">
                                CampaignStartDate</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="date" class="form-control col-xs-4" id="CampaignStartDate" name="CampaignStartDate" placeholder="CampaignStartDate" required="required" /></div>
                            </div>
							<div class="form-group">
							<label for="CampaignEndDate" class="sr-only">
                                CampaignEndDate</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="date" class="form-control col-xs-4" id="CampaignEndDate" name="CampaignEndDate" placeholder="CampaignEndDate" required="required" /></div>
                            </div>
							<div class="form-group">
							<label for="CampaignGoalAmount" class="sr-only">
                                CampaignGoalAmount</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="number" class="form-control col-xs-4" id="CampaignGoalAmount" name="CampaignGoalAmount" placeholder="CampaignGoalAmount" required="required" /></div>
                            </div>
							<div class="form-group">
							<label for="FundsRaisedTillDate" class="sr-only">
                                FundsRaisedTillDate</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="number" min="0" class="form-control col-xs-4" id="FundsRaisedTillDate" name="FundsRaisedTillDate" placeholder="FundsRaisedTillDate" required="required" /></div>
                            </div>
							<div class="form-group">
							<label for="TargetedHoldPeriodInMonths" class="sr-only">
                                TargetedHoldPeriodInMonths</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="number" class="form-control col-xs-4" id="TargetedHoldPeriodInMonths" name="TargetedHoldPeriodInMonths" placeholder="TargetedHoldPeriodInMonths" required="required" /></div>
                            </div>
							  <div class="form-group">
							<label for="MinInvestmentAmount" class="sr-only">
                                MinInvestmentAmount</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="number" min="0" class="form-control col-xs-4" id="MinInvestmentAmount" name="MinInvestmentAmount" placeholder="MinInvestmentAmount" required="required" /></div>
                            </div>
							<div class="form-group">
							<label for="MaxInvestmentAmount" class="sr-only">
                                MaxInvestmentAmount</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="number" min="0" class="form-control col-xs-4" id="MaxInvestmentAmount" name="MaxInvestmentAmount" placeholder="MaxInvestmentAmount" required="required" /></div>
                            </div>
							
							  <div class="form-group">
							<label for="SPVStructureCode" class="sr-only">
                                SPVStructureCode</label>
                            <div class="input-group">
                                
                                <select name="SPVStructureCode" id="SPVStructureCode">
							  <option value="LLP">LLP</option>
							  <option value="PrivatePartnership">PrivatePartnership</option>
							   <option value="Trust">Trust</option>
							   <option value="PartnershipFirm">PartnershipFirm</option>
							   <option value="JointOwnership">JointOwnership</option>
							   <option value=" AOP"> AOP</option>
							   </select>
								</div>
							
							<div class="form-group">
							<label for="SPVIdentificationNumber" class="sr-only">
                                SPVIdentificationNumber</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control col-xs-4" id="SPVIdentificationNumber" name="SPVIdentificationNumber" placeholder="SPVIdentificationNumber" required="required" /></div>
                            </div>
							-->
							<div class="form-group">
							<label for "">Upload Due Diligence Document</label>
							<input type="file" name="DueDiligenceReportURL" id="DueDiligenceReportURL" required>
							</div>
							
							<div class="form-group">
							<label for "">Upload PDS :</label>
							<input type="file" name="ProductDisclosureStatementURL" id="ProductDisclosureStatementURL">
							</div>
							
							<div class="form-group">
							<label for "">Upload Property Brochure :</label>
							<input type="file" name="PropertyBrochureURL" id="PropertyBrochureURL"  >
							</div>
							
							<div class="form-group">
							<label for "">Upload Banner Image & FullSize Image:</label>
							<input type="file" name="ImageURL" id="ImageURL" multiple>
							</div>
							
							<div class="form-group">
							<label for="MiscellaneousDocumentsUrl" class="sr-only">
                                MiscellaneousDocumentsUrl</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                </span>
                                <input type="text" class="form-control col-xs-4" id="MiscellaneousDocumentsUrl" name="MiscellaneousDocumentsUrl" placeholder="MiscellaneousUrl"  /></div>
                            </div>
							
						     <input type="submit" id="submit" name="submit" value="Send" />
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