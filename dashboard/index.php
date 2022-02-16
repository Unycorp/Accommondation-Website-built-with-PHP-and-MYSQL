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
		kqlwxql
	</div>
</div>



<a href="#" data-toggle="modal" data-target="#modal-medium" class="btn btn-primary">Modal Centered</a>



<div class="modal fade" id="modal-medium" tabindex="-1">
	<div class="modal-dialog modal-dialog-md modal-dialog-centered">
		<div class="modal-content">
			<a href="#" class="modal-close" data-dismiss="modal" aria-label="Close"><em class="ti ti-close"></em></a>
			<div class="popup-body">
				<h3 class="popup-title">Medium Modal</h3>
				<p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.</p>
			</div>
		</div><!-- .modal-content -->
	</div><!-- .modal-dialog -->
</div>



<div class="alert alert-danger alert-center alert-dismissible fade show">A simple danger alert with dismissible option check it out!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
<script src="../tokenwiz/assets/js/jquery.bundle49f7.js"></script>
<script type="text/javascript" src="js/sidebar.js"></script>
<!-- 
<script src="js/sweat-alert.js"></script>
-->

<script type="text/javascript">


	function speakSweat(message){
	    // warning, error, info, success
            swal("", message, "info");
	}
	function speakSweat2(heading, message, type){
	    // warning, error, info, success
            swal(heading, message, type);
	}

	    //Advanced Alert S2
	  function speakSweat3(){
            swal({
              title: "Are you sure?",
              text: "Once deleted, you will not be able to recover this imaginary file!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                swal("Poof! Your imaginary file has been deleted!", {
                  icon: "success",
                });
              } else {
                swal("Your imaginary file is safe!");
              }
            });
	}

</script>
</body>
<!-- Mirrored from demo.themenio.com/tokenwiz/ by HTTrack Website Copier/3.x [XR&CO'2017], Sun, 15 Mar 2020 12:07:36 GMT -->
</html>
