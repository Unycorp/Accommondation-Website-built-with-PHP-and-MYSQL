<?php
include '../connection/dbconnect.php';


if(isset($_POST['uid']) && isset($_POST['hid'])){

$uid = $_POST['uid'];
$hid = $_POST['hid'];

	refresh($uid, $hid);
}

function refresh($uid, $hid){

include '../connection/dbconnect.php';
echo "<div class='row'>";
$query = "SELECT * FROM house_image WHERE user_id='$uid' AND house_id='$hid'"; 
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_array($result)){
$id = $row['id'];
$post_id = $row['post_id'];
$user_id = $row['user_id'];
$photo = $row['photo'];
$date_id = $row['date_id'];

echo "<div class='col-sm-4'>
<div style='background:#fff; padding: 10px 7px 25px 7px;'>
 <a href='../images/houses/$photo' 
 data-lightbox='unyime' 
 data-title='title goes in here'>
<img src='../images/houses/$photo' style='width:100%; height:200px; background:#f9f9f9; border-radius:5px'>
</a>
<a href='#' data-toggle='modal' data-target='#edit-wallet' class='link link-ucap' style='float:right; padding-top:5px'>Edit</a>
</div>
</div>";

}
}
echo "
<div class='col-sm-4'>
	<div style='padding: 15px; background: #fff'>
		<div class='input-item input-with-label'>
			<label class='input-item-label'>Click the button to post an image</label>
			<div style='border: 1px dotted skyblue; background: #e0e8f3; border-radius: 6px;'>
				<div style='padding: 20px; text-align:center;'>
					<a href='#' data-toggle='modal' data-target='#modal-medium' class='btn btn-sm btn-primary'
					style='margin-top:30px; margin-bottom: 30px'>Start to upload</a>
				</div>

			</div>
		</div>
	</div>
</div>

</div>";

}
?>