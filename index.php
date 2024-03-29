<!doctype html>
<?php
	include 'admin.php';
?>
<html>
<head>
	<meta charset="utf-8">

	<title>Cloud Computing PHP Project</title>
	<link href="css/redmond/jquery-ui-1.9.2.custom.min.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/flexigrid.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<script src="js/url-builder.js"></script>
	<script src="js/jquery-1.8.3.min.js"></script>
	<script src="js/jquery-ui-1.9.2.custom.min.js"></script>
	<script type="text/javascript" src="js/flexigrid.js"></script>
	<script type="text/javascript" src="js/util.js"></script>
	<script type="text/javascript" src="js/date.js"></script>
        
	<script>

	var albumSearchParam = new AlbumSearchParam();		
	var participantSearchParam = new ParticipantSearchParam();	
	var trackSearchParam = new TrackSearchParam();	
	var workSearchParam = new WorkSearchParam();	

	var urlBuilder = new DecibelUrlBuilder(<?php echo '"' . $apiAddress . '"' ?>);

	$(function() {
		$( "#tabs" ).tabs();
		initAlbumsTab();
		initParticipantsTab();
		initTracksTab();
		initAlbumInfo();
		initWorksTab();
	});
	</script>
</head>

<body>
<!-- Tabs --><h1>Cloud Computing PHP Project</h1>
Deployed in PaaS Heroku!!
<div id="tabs" style="padding-left:5px; padding-right:5px">
	<ul>
		<li><a href="#tabHome">Home</a></li>
		<li><a href="#tabApplication">Application</a></li>
		<li><a href="#tabWebService1">WebService 1</a></li>
		<li><a href="#tabWebService2">WebService 2</a></li>
	</ul>
	
	<?php
		require( "home.php"); // Include the albums-tab layout
	?>	

	<?php
		require( "Application.php"); // Include the participants-tab layout
	?>		
	
	<?php
		require(  "WebService1.php"); // Include the tracks-tab layout
	?>	
	
	<?php
		require( "WebService2.php"); // Include the works-tab layout
	?>		
</div>
</body>
</html>
