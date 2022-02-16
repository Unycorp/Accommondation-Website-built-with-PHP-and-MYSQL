<?php
include '../connection/dbconnect.php';

if(isset($_GET['u'])){
$q = $_GET['u'];
$query = "SELECT * FROM house WHERE post_id='$q' LIMIT 1"; 
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_array($result)){

$id = $row['id'];
$post_id = $row['post_id'];
$house_number = $row['house_number'];
$house_name = $row['house_name'];
$street_name = $row['street_name'];
$lga = $row['lga'];
$state = $row['state'];
$country = $row['country'];
$full_address = $row['full_address'];
$house_rent = $row['house_rent'];
$agent_fee = $row['agent_fee'];
$date_id = $row['date_id'];
}
}

}


?>

<!DOCTYPE html>
<html lang="zxx" class="js">
<!-- Mirrored from demo.themenio.com/tokenwiz/ by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 15 Mar 2020 12:07:36 GMT -->
<head>
<?php include 'css.php';  ?>
</head>
<body class="page-user">
<div class="topbar-wrap">
<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>
						
<div class="page-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="content-area card">
<div class="card-innr">
<div class="card-head">

<div style="float: right">
<a href="phase2.php?u=<?php echo $post_id ?>" class="btn btn-success btn-xs">Next</a>
</div>

<h4 class="card-title">Create Accommodation</h4>
</div>


<form class="form-validate validate-modern" onsubmit="return false">
<div class="row">
<div class="col-sm-3">
<div class="input-item input-with-label">
<label class="input-item-label text-exlight">House Number</label>
<div class="input-wrap">
<input id="house_number" name="house_number" data-msg="Required" class="input-bordered required" type="text"
value="<?php echo $house_number ?>">
</div>
</div>
</div>

<div class="col-sm-9">
<div class="input-item input-with-label">
<label class="input-item-label">House Name <span class="text-success">(optional) <em class="ti ti-check-box"></em></span></label>
<input class="input-bordered" type="text" id="house_name" name="house_name" value="<?php echo $house_name ?>">
</div><!-- .input-item -->
</div>

<div class="col-sm-12">
<div class="input-item input-with-label">
<label class="input-item-label text-exlight">Street Name</label>
<div class="input-wrap">
<input id="street_name" name="street_name" data-msg="Required" class="input-bordered required" type="text"
value="<?php echo $street_name ?>">
</div><!-- .input-item -->
</div>
</div>

<div class="col-sm-4">
<div class="input-item input-with-label">
<label class="input-item-label">LGA <span class="text-success">(optional) <em class="ti ti-check-box"></em></span></label>
<input class="input-bordered" type="text" id="lga" name="lga" value="<?php echo $lga ?>">
</div><!-- .input-item -->
</div>

<div class="col-sm-4">
<div class="input-item input-with-label">
<label class="input-item-label text-exlight">State</label>
<div class="input-wrap">
<input class="input-bordered required" type="text" id="state" name="state" data-msg="Required" 
value="<?php echo $state ?>">
</div><!-- .input-item -->
</div>
</div>

<div class="col-sm-4">
<div class="input-item input-with-label">
<label class="input-item-label text-exlight">Country</label>
<div class="input-wrap">
<input class="input-bordered required" type="text" id="country" name="country" data-msg="Required"
value="<?php echo $country ?>">
</div><!-- .input-item -->
</div>
</div>

<div class="col-sm-12">
<div class="input-item input-with-label">
<label class="input-item-label text-exlight">Full Address</label>
<div class="input-wrap">
<textarea id="full_address" name="full_address" class="input-bordered required input-textarea" data-msg="Required">
	<?php echo $full_address ?>
</textarea>
</div>
</div>
</div>

<div class="col-sm-6">
<div class="input-item input-with-label">
<label class="input-item-label">House Rent</label>
<div class="input-wrap">
<input class="input-bordered required" type="text" id="house_rent" name="house_rent" data-msg="Required"
value="<?php echo $house_rent ?>">
</div><!-- .input-item -->
</div>
</div>

<div class="col-sm-6">
<div class="input-item input-with-label">
<label class="input-item-label">Agent Fee</label>
<div class="input-wrap">
<input class="input-bordered required" type="text" id="agent_fee" name="agent_fee" data-msg="Required"
value="<?php echo $agent_fee ?>">
</div><!-- .input-item -->
</div>
</div>

<div class="col-sm-12">
<div class="alert alert-warning alert-center alert-dismissible fade show">
If you re-submit, your accommodation will be place on hold untill it has been verified.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
</div>
<div class="col-sm-12">
<div class="alert alert-info alert-center alert-dismissible fade show">
Verifying your re-submitted accommodation can take at least 2 days, 2 weeks or sometimes 2 months
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
</div>

</div>

<div class="container" style="padding-top: 35px; text-align: right">
<button class="btn btn-primary btn-sm" onclick="butSubmit()">Re-submit</button>
</div>

<div style="padding-top: 100px; text-align: center;">
<a href="phase2.php?u=<?php echo $post_id ?>" class="btn btn-success btn-md">Next</a>
</div>



</form>
</div>
</div>

			</div>
			<div class="col-sm-3"></div>
		</div>
	</div>
</div>

</div>
<script src="../tokenwiz/assets/js/jquery.bundle49f7.js"></script>
<script type="text/javascript" src="js/sidebar.js"></script>

<script type="text/javascript">

var pid = "<?php echo $q ?>";

function butSubmit(){
var house_number = document.getElementById("house_number").value;
var house_name = document.getElementById("house_name").value;
var street_name = document.getElementById("street_name").value;
var lga = document.getElementById("lga").value;
var state = document.getElementById("state").value;
var country = document.getElementById("country").value;
var full_address = document.getElementById("full_address").value;
var house_rent = document.getElementById("house_rent").value;
var agent_fee = document.getElementById("agent_fee").value;

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

data.append("uhouse_number",house_number);
data.append("uhouse_name",house_name);
data.append("ustreet_name",street_name);
data.append("ulga",lga);
data.append("ustate",state);
data.append("ucountry",country);
data.append("ufull_address",full_address);
data.append("uhouse_rent",house_rent);
data.append("uagent_fee",agent_fee);
data.append("pid",pid);

ajax.open("post", "createAI.php", true);
ajax.send(data);

ajax.onreadystatechange = function() {
            if (ajax.readyState == 4 && ajax.status == 200) {
             var result = ajax.responseText;
             if(result){
             alert("Resubmittion sent Sucessfully");
             }
             else{
              alert("Encounter error. could not connect to the server");
             }

             }
        }
        
  		
  }
}

</script>
</body>
</html>