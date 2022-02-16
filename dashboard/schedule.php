<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
<?php include 'css.php';  ?>
<link rel="stylesheet" href="plugins/fullcalendar/fullcalendar.min.css">

</head>
<body class="page-user">
<div class="topbar-wrap">
<?php include 'header.php'; ?>

<?php include 'sidebar.php'; ?>
						
<div class="page-content">
	<div class="container">
		<section class="content page-calendar">
    <div class="body_scroll">
        
        <div class="container-fluid">
            <div class="row">                
                <div class="col-md-12 col-lg-8 col-xl-8">
                    <div class="card" style="padding: 20px">
                        <div class="body">                            
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 col-xl-4">
                    <div class="card" style="padding: 20px">
                        <div class="event_list">

                            <div class="e_list" style="padding-top: 16px">
                                <h5 class="e_name">11 September <span class="badge badge-primary float-right">Conference</span></h5>
                                <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                <p class="e_details">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <hr>
                            </div>
                            <div class="e_list">
                                <h5 class="e_name">12 November <span class="badge badge-success float-right">Birthday Party</span></h5>
                                <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                <p class="e_details">It is a long established fact that a reader will be distracted</p>
                                <hr>
                            </div>
                            <div class="e_list">
                                <h5 class="e_name">16 December <span class="badge badge-danger float-right">Repeating</span></h5>
                                <address><i class="zmdi zmdi-pin"></i> 123 6th St. Melbourne, FL 32904</address>
                                <p class="e_details">Contrary to popular belief, Lorem Ipsum is not simply random text.</p>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Add New Event popup -->
<div class="modal fade" id="addNewEvent" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><strong>Add</strong> an event</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="control-label">Event Name</label>
                            <input class="form-control" placeholder="Enter name" type="text" name="category-name">
                        </div>
                        <div class="col-md-6">
                            <label class="control-label">Choose Event Color</label>
                            <select class="form-control" data-placeholder="Choose a color..." name="category-color">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success save-event" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Add Direct Event popup -->
<div class="modal fade" id="addDirectEvent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Direct Event</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Name</label>
                            <input class="form-control" name="event-name" type="text" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Type</label>
                            <select name="event-bg" class="form-control">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn save-btn btn-success">Save</button>
                <button class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Event Edit Modal popup -->
<div class="modal fade" id="eventEditModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Edit Event</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Name</label>
                            <input class="form-control" name="event-name" type="text" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Event Type</label>
                            <select name="event-bg" class="form-control">
                                <option value="success">Success</option>
                                <option value="danger">Danger</option>
                                <option value="info">Info</option>
                                <option value="primary">Primary</option>
                                <option value="warning">Warning</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn mr-auto delete-btn btn-danger">Delete</button>
                <button class="btn save-btn btn-success">Save</button>
                <button class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
	</div>
</div>

</div>

<script src="../tokenwiz/assets/js/jquery.bundle49f7.js"></script>
<script type="text/javascript" src="js/sidebar.js"></script>
<script src="plugins/fullcalendar/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts -->
<script src="plugins/calendar/calendar.js"></script>

</body>
</html>