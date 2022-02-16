<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'css.php';  ?>
</head>
<body class="page-user">
	<div class="topbar-wrap">
		<?php include 'header.php'; ?>

		<?php include 'sidebar.php'; ?>
						
<div class="page-content">
	

<div class="container">
	
			<div id="acc_id"></div>


	</div>



<div class="modal fade" id="modal-info" tabindex="-1">
	<div class="modal-dialog modal-dialog-sm modal-dialog-centered">
		<div class="modal-content">
			<a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
			<div class="popup-body">
				<h3 class="popup-title">Please Note</h3>
				<p>It is in our policy to accept, reject or pend accommodation depending on the activity that is being conducted. A <b class="text-warning">pending</b> status simply means that your accommodation has not been seen by our expert. Once seen, your accommodation will be <b class="text-success">accepted</b> or <b class="text-danger">rejected</b>. If your accommodation is rejected, kindly follow the rules and re-submit your accommodation.</p>
			</div>
		</div>
	</div>
</div>


<div class="modal fade" id="modal-medium" tabindex="-1">
	<div class="modal-dialog modal-dialog-md modal-dialog-centered">
		<div class="modal-content">
			<a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
			<div class="popup-body">
				<h3 class="popup-title">Create Accommodation</h3>
				<form class="form-validate validate-modern" method="post" onsubmit="return false">
<div class="row">
<div class="col-sm-3">
<div class="input-item input-with-label">
<label class="input-item-label text-exlight">House Number</label>
<div class="input-wrap">
<input id="house-number" name="house-number" data-msg="Required" class="input-bordered required" type="text" required="required">
</div>
</div>
</div>

<div class="col-sm-9">
<div class="input-item input-with-label">
<label for="full-name" class="input-item-label">House Name <span class="text-success">(optional) <em class="ti ti-check-box"></em></span></label>
<input class="input-bordered" type="text" id="house-name" name="house-name">
</div><!-- .input-item -->
</div>

<div class="col-sm-12">
<div class="input-item input-with-label">
<label class="input-item-label text-exlight">Street Name</label>
<div class="input-wrap">
<input id="street-name" name="street-name" data-msg="Required" class="input-bordered required" type="text">
</div><!-- .input-item -->
</div>
</div>

<div class="col-sm-4">
<div class="input-item input-with-label">
<label for="full-name" class="input-item-label">LGA <span class="text-success">(optional) <em class="ti ti-check-box"></em></span></label>
<input class="input-bordered" type="text" id="lga" name="lga">
</div><!-- .input-item -->
</div>

<div class="col-sm-4">
<div class="input-item input-with-label">
<label class="input-item-label text-exlight">State</label>
<div class="input-wrap">
<input class="input-bordered required" data-msg="Required" type="text" id="state" name="state">
</div><!-- .input-item -->
</div>
</div>


<div class="col-sm-4">
<div class="input-item input-with-label">
<label class="input-item-label text-exlight">Country</label>
<div class="input-wrap">
<input class="input-bordered required" data-msg="Required" type="text" id="country" name="country">
</div><!-- .input-item -->
</div>
</div>

<div class="col-sm-12">
<div class="input-item input-with-label">
<label class="input-item-label text-exlight">Full Address</label>
<div class="input-wrap">
<textarea id="full-address" name="full-address" data-msg="Required" class="input-bordered required input-textarea">
</textarea>
</div>
</div>
</div>

<div class="col-sm-6">
<div class="input-item input-with-label">
<label class="input-item-label text-exlight">House Rent</label>
<div class="input-wrap">
<input class="input-bordered required" type="text" id="house-rent" name="house-rent" data-msg="Required">
</div><!-- .input-item -->
</div>
</div>


<div class="col-sm-6">
<div class="input-item input-with-label">
<label class="input-item-label text-exlight">Agent Fee</label>
<div class="input-wrap">
<input class="input-bordered required" type="text" id="agent-fee" name="agent-fee" data-msg="Required">
</div><!-- .input-item -->
</div>
</div>


</div>

<div class="container" style="padding-top: 35px; text-align: right">
<button class="btn btn-primary btn-sm" onclick="butCreate()">Submit</button>
</div>




</form>
			</div>
		</div><!-- .modal-content -->
	</div><!-- .modal-dialog -->
</div>


<script src="../tokenwiz/assets/js/jquery.bundle49f7.js"></script>
<script type="text/javascript" src="js/sidebar.js"></script>
<script type="text/javascript">

ajaxRefresh();

  document.getElementsByClassName('dz-hidden-input')[0].disabled = true;


function butCreate(){


var house_number = document.getElementById("house-number").value;
var house_name = document.getElementById("house-name").value;
var street_name = document.getElementById("street-name").value;
var lga = document.getElementById("lga").value;
var state = document.getElementById("state").value;
var country = document.getElementById("country").value;
var full_address = document.getElementById("full-address").value;
var house_rent = document.getElementById("house-rent").value;
var agent_fee = document.getElementById("agent-fee").value;

// house number should contain only numbers
if(!/^[0-9]+$/.test(house_number)){
alert("Only numbers allowed in house number");
}
// only alphabet allow
else if(!/^[a-zA-Z ]+$/.test(house_name)){
alert("Only alphabet allowed in house name");
}
else if(!/^[a-zA-Z ]+$/.test(street_name)){
alert("Only alphabet allowed in street name");
}
else if(!/^[a-zA-Z ]+$/.test(lga)){
alert("Only alphabet allowed in LGA")
}
else if(!/^[a-zA-Z ]+$/.test(state)){
alert("Only alphabet allowed in state");
}
else if(!/^[a-zA-Z ]+$/.test(country)){
alert("Only alphabet allowed in country");
}
else if(!/^[a-zA-Z0-9+,.(): ]+$/.test(full_address)){
alert("Error occurs. Make sure you are not using special characters in Full Address")
}
else if(!/^[0-9 ]+$/.test(house_rent)){
alert("Only numbers allowed in house rent");
}
else if(!/^[0-9 ]+$/.test(agent_fee)){
alert("Only numbers allowed in agent fee")
}
else{
var data = new FormData();
var ajax = new XMLHttpRequest();

data.append("house_number",house_number);
data.append("house_name",house_name);
data.append("street_name",street_name);
data.append("lga",lga);
data.append("state",state);
data.append("country",country);
data.append("full_address",full_address);
data.append("house_rent",house_rent);
data.append("agent_fee",agent_fee);

ajax.open("post", "createAI.php", true);
ajax.send(data);

ajax.onreadystatechange = function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
             var result = ajax.responseText;
             if(result){
              ajaxRefresh();
             alert("Posted Sucessfully");
             }
             else{
              alert("Encounter error. Please make sure your file is not too big");
             }

             }
        }
        
  		
  }
}
  function ajaxRefresh(){
 var data = new FormData();
 var ajax = new XMLHttpRequest();

 data.append("ref_id","nothing");
 ajax.open("post", "createAI.php", true);
 ajax.send(data);

 ajax.onreadystatechange = function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
            var result = ajax.responseText;
            var div = document.getElementById("acc_id");
            div.innerHTML = result;
             }
        }
}
</script>
</body>
</html>