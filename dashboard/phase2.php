<?php
include '../connection/dbconnect.php';

if(isset($_GET['u'])){
$q = $_GET['u'];
$query = "SELECT * FROM house_image WHERE house_id='$q' LIMIT 1"; 
$result = mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_array($result)){

$id = $row['id'];
$user_id = $row['user_id'];
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

<div id="acc_id"></div>

<br><br>

<div class="container">
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6" style="background: #fff; padding: 10px; margin-bottom:20px">

<div class="row">
<div class="col-sm-12">
<div class="alert alert-warning alert-left alert-dismissible fade show">
You can upload as many images as possible but it is recommended to upload at most 3 images
which are bedroom, kitchen and if neccessary living room
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
</div>
<div class="col-sm-12">
<div class="alert alert-danger alert-center alert-dismissible fade show">
Please beware, front view, side view or backview of the house should not be uploaded as 
stated in our policy.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
</div>

</div>
</div>
</div>
</div>


</div>

<script src="../tokenwiz/assets/js/jquery.bundle49f7.js" async="async"></script>
<script type="text/javascript" src="js/sidebar.js" async="async"></script>
<script type="text/javascript">

	
var _uid = "<?php echo $user_id ?>";
var _hid = "<?php echo $q ?>";

ajaxRefresh();

function ajaxRefresh(){

 var data = new FormData();
 var ajax = new XMLHttpRequest();

 data.append("uid", _uid);
 data.append("hid", _hid);

 ajax.open("post", "phase2AI.php", true);
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