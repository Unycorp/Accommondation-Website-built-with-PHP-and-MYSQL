<?php
include '../connection/dbconnect.php';



if(isset($_POST['uhouse_number']) && isset($_POST['uhouse_name']) && isset($_POST['ustreet_name']) && isset($_POST['ulga']) && isset($_POST['ustate']) && isset($_POST['ucountry']) && isset($_POST['ufull_address']) && isset($_POST['uhouse_rent']) && isset($_POST['uagent_fee']) && isset($_POST['pid'])){
$house_number = $_POST['uhouse_number'];
$house_name = $_POST['uhouse_name'];
$street_name = $_POST['ustreet_name'];
$lga = $_POST['ulga'];
$state = $_POST['ustate'];
$country = $_POST['ucountry'];
$full_address = $_POST['ufull_address'];
$house_rent = $_POST['uhouse_rent'];
$agent_fee = $_POST['uagent_fee'];
$post_id = $_POST['pid'];


$query = "UPDATE house SET house_number=\"$house_number\", house_name=\"$house_name\", street_name=\"$street_name\", lga=\"$lga\", state=\"$state\", country=\"$country\", full_address=\"$full_address\", house_rent=\"$house_rent\", agent_fee=\"$agent_fee\", status_id='pending' WHERE post_id='$post_id' LIMIT 1";
$result = mysqli_query($conn, $query);
if($result){	
echo true;
}
else{
echo false;
}

}


if(isset($_POST['house_number']) && isset($_POST['house_name']) && isset($_POST['street_name']) && isset($_POST['lga']) && isset($_POST['state']) && isset($_POST['country']) && isset($_POST['full_address']) && isset($_POST['house_rent']) && isset($_POST['agent_fee']) ){
$house_number = $_POST['house_number'];
$house_name = $_POST['house_name'];
$street_name = $_POST['street_name'];
$lga = $_POST['lga'];
$state = $_POST['state'];
$country = $_POST['country'];
$full_address = $_POST['full_address'];
$house_rent = $_POST['house_rent'];
$agent_fee = $_POST['agent_fee'];

$post_id = uniqid();

$query = "INSERT INTO house(post_id, house_number, house_name, street_name, lga, state, country, full_address, house_rent, agent_fee)
          VALUES('$post_id','$house_number',\"$house_name\", \"$street_name\",\"$lga\",\"$state\",\"$country\",\"$full_address\",'$house_rent', '$agent_fee');";
$result = mysqli_query($conn, $query);
if($result){	
echo true;
}
else{
echo false;
}

}


if(isset($_POST['ref_id'])){

$id = $_POST['ref_id'];

	refresh($id);
}


function refresh($id){

include '../connection/dbconnect.php';
echo "<div class='row'>";

$query = 'SELECT * FROM house'; 
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
$bed_room = $row['bed_room'];
$bath_room = $row['bath_room'];
$toilet = $row['toilet'];
$living_room = $row['living_room'];
$kitchen = $row['kitchen'];
$dining_room = $row['dining_room'];
$attic = $row['attic'];
$ball_room = $row['ball_room'];
$cellar = $row['cellar'];
$cloak_room = $row['cloak_room'];
$drawing_room = $row['drawing_room'];
$hall = $row['hall'];
$larder = $row['larder'];
$library = $row['library'];
$office = $row['office'];
$pantry = $row['pantry'];
$basement = $row['basement'];
$play_room = $row['play_room'];
$lightbulb = $row['lightbulb'];
$socket = $row['socket'];
$chair = $row['chair'];
$tables = $row['tables'];
$air_condition = $row['air_condition'];
$television = $row['television'];
$bed = $row['bed'];
$shelf = $row['shelf'];
$garage = $row['garage'];
$electricity = $row['electricity'];
$environment = $row['environment'];
$water = $row['water'];
$security = $row['security'];
$payment_fee = $row['payment_fee'];
$landlord_name = $row['landlord_name'];
$landlord_phone = $row['landlord_phone'];
$landlord_account_name = $row['landlord_account_name'];
$landlord_account_number = $row['landlord_account_number'];
$landlord_bank_name = $row['landlord_bank_name'];
$status_id = $row['status_id'];
$date_id = $row['date_id'];


echo "
<div class='col-sm-4'>
<div class='account-info card'>
<div class='card-innr'>
<ul class='btn-grp' style='float:right'>";
if($status_id == "accepted"){
echo "<li><a href='#'  data-toggle='modal' data-target='#modal-info' class='btn btn-auto btn-xs btn-success'>Accepted</a></li>";
}else if($status_id=="rejected"){
echo "<li><a href='#'  data-toggle='modal' data-target='#modal-info' class='btn btn-auto btn-xs btn-danger'>Rejected</a></li>";
}else{
echo "<li><a href='#'  data-toggle='modal' data-target='#modal-info' class='btn btn-auto btn-xs btn-warning'>Pending</a></li>";
}
echo "
</ul>
<h6 class='card-title card-title-sm'>$house_name</h6>

<div class='gaps-2-5x'></div>
<h6 class='card-title card-title-sm' style='font-size: 14px'>$street_name</h6>
<div class='d-flex justify-content-between'>
<span><span>$lga</span> 
<em class='fas fa-info-circle text-exlight' data-toggle='tooltip' data-placement='bottom' title='$state/$country'></em>
</span><a href='phase1.php?u=$post_id' class='link link-ucap'>Edit</a>
</div>
</div>
</div>
</div>";
}
}

echo 
"<div class='col-sm-4'>
	<div style='padding: 15px; background: #fff'>
		<div class='input-item input-with-label'>
			<label class='input-item-label'>Click the button to post accommodation</label>
			<div style='border: 1px dotted skyblue; background: #e0e8f3; border-radius: 6px;'>
				<div style='padding: 20px; text-align:center;'>
					<a href='#' data-toggle='modal' data-target='#modal-medium' class='btn btn-sm btn-primary'
					style='margin-top:30px; margin-bottom: 30px'>Start to post</a>
				</div>

			</div>
		</div>
	</div>
</div>

</div>";

}

?>