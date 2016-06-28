<body>

<script src="<?php echo URL; ?>js/facebook.js"></script>

<?php 	
if (!isset($_SESSION["user_logged_in"])) {
	
	require_once 'modals/modal_login.php';
	
} else {
	if(isset($_SESSION["user_venue_id"])){
	
		require_once 'modals/modal_create_event.php';
		require_once 'modals/modal_edit_event.php';
		require_once 'modals/modal_album.php';
		require_once 'modals/modal_profile.php';
	}
	
	require_once 'modals/modal_social.php';
}
?>
<div class="page-wrapper">
