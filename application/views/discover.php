

	<section id="free-padding">
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
    </section>
	
	
	<!-- Advance Search -->
  <section id="aa-advance-search">
    <div class="container">
      <div class="aa-advance-search-area">
    <form action="<?php echo $_SERVER['PHP_SELF'] ; ?>"  method = "POST" name = "filter"> 
	 <div class="form" >
         <div class="aa-advance-search-top">
            <div class="row">
              <div class="col-md-4">
                <div class="aa-single-advance-search">
                  <input type="text" placeholder="Keyword" name="keyword">
                </div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <select name="locality" required>
                   <option value="0" selected>Locality</option>
                    <option value="PALGHAR">Palghar</option>
                    <option value="VIRAR">Virar</option>
                    <option value="DAHANU">DAHANU</option>
                    <option value="THANE">THANE</option>
                  </select>
                </div>
              </div>
              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select name="term" required>
                    <option value="0" selected>Term</option>
					<option value="1">12-24 months</option>
					<option value="2">24-36 months</option>
					<option value="3">36-48 months</option>
				   <option value="4">Above 40 months</option>
			      </select>
              </div>
              </div>
			  
              <div class="col-md-2">
                 <div class="aa-single-advance-search">
                  <select name="yield" required>
						<option value="0" selected>Yield</option>
						<option value="4">0-4 %</option>
						<option value="8">4 - 8%</option>
						<option value="9"> >8%</option>
				</select>
				</div>
              </div>
              <div class="col-md-2">
                <div class="aa-single-advance-search">
                  <input class="aa-search-btn btn-skin" type="submit" value="Search" name="submit">
                             
                </div>
              </div>
            </div>
          </div>
		  <!--
         <div class="aa-advance-search-bottom">
           <div class="row">
		   <!--
            <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>AREA (SQ)</span>
                <span>FROM</span>
                <span id="skip-value-lower" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper" class="example-val">100.00</span>
				<!--
                <div id="aa-sqrfeet-range" class="noUi-target noUi-ltr noUi-horizontal noUi-background">
                </div>-->
				<!--<input id="ex1" data-slider-id='ex1Slider' type="range" data-slider-min="100000" data-slider-max="10000000" data-slider-step="50000" data-slider-value="5000000"/>				
              </div>
            </div>-->
			<!--
           <div class="col-md-6">
              <div class="aa-single-filter-search">
                <span>AREA (SQ)</span>
                <span>FROM</span>
                <span id="skip-value-lower" class="example-val">30.00</span>
                <span>TO</span>
                <span id="skip-value-upper" class="example-val">100.00</span>
                               
              </div>
            </div>
			-->
          </div>
			</form>
         </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Advance Search -->
	<br />
	<br />
	
  <!-- Latest property -->
  <section id="aa-latest-property">
    <div class="container">
      <div class="aa-latest-property-area">
        <div class="aa-title">
          <h2 class="text-center">Discover Properties</h2>
          <span></span>
          <p class="text-center">Current properties under construction / development.</p>         
		  <br />
        </div>
        <div class="aa-latest-properties-content">
          <div class="row" id="id01">

<?php
/*	
	$flocality = $_POST['locality'];
	$fterm = $_POST['term'];
	$fyield = $_POST['yield'];
	$fkeyword = $_POST['keyword'];
	
	echo 'You inquired for Locality: '.$flocality.'Term Period :'.$fterm.' Yield :'.$fyield;


  $jsondata = file_get_contents('myTutorials.json');
  $data = json_decode($jsondata, true);
  foreach ($data as $property) {
	  if($property['locality']== $flocality && $property['rooms'] == $fterm)
	  {
    $property_price = $property['price'];
	$property_rooms = $property['rooms'];
	$property_beds = $property['beds'];
	$property_description = $property['description'];
	$property_apartment = $property['apartment'];
	$property_area = $property['area'];
	$property_type = $property['type'];
	
    echo '<div class="col-md-4"> <article class="aa-properties-item"> <a href="#" class="aa-properties-item-img"><img src="item/1.jpg" alt="img"></a><div class="aa-tag for-sale">'.$property_type.'</div><div class="aa-properties-item-content"><div class="aa-properties-info"><span>'.$property_rooms.' ROOMS </span><span>'.$property_beds.' BEDS</span><span>'.$property_area.' SQ. FT</span></div><div class="aa-properties-about"><h3><a href="#">'.$property_apartment. '</a></h3><p>'.$property_description.'</p>s</div><div class="aa-properties-detial"><span class="aa-price"><i class= "fa fa-inr"></i>'.$property_price.'</span><a href="#" class="aa-secondary-btn">View Details</a></div></div></article></div>';;
	  }
	}
	
*/
?>
  
  
		  
		<!-- 
		 <script>
		  
var xmlhttp = new XMLHttpRequest();
var url = "myTutorials.json";

xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        var myArr = JSON.parse(xmlhttp.responseText);
        myFunction(myArr);
    }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();

function myFunction(arr) {
    var out = "";
    var i;
    for(i = 0; i < arr.length; i++) {
	
        out += '<div class="col-md-3"> <article class="aa-properties-item"> <a href="#" class="aa-properties-item-img"><img src="item/1.jpg" alt="img"></a><div class="aa-tag for-sale">'+arr[i].type +'</div><div class="aa-properties-item-content"><div class="aa-properties-info"><span>'+ arr[i].rooms+' ROOMS </span><span>'+ arr[i].beds+' BEDS</span><span>'+arr[i].area+' SQ. FT</span></div><div class="aa-properties-about"><h3><a href="#">'+arr[i].apartment+ '</a></h3><p>'+arr[i].description+'</p>s</div><div class="aa-properties-detial"><span class="aa-price">$'+arr[i].price+'</span><a href="#" class="aa-secondary-btn">View Details</a></div></div></article></div>';
    }
    document.getElementById("id01").innerHTML = out;
}
</script>
-->
			</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Latest property -->
  <br />
  <br />
  <br />
  <br />
  
