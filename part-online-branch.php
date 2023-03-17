<?php 
// get current time
$time = time();

// for testing the new date
// $time = mktime( 5, 29, 0, 4, 4, 2023 );

// time when maintenance starts and stops
$time_maintenance_start = mktime( 5, 30, 0, 4, 4, 2023 );
$time_maintenance_stop = mktime( 10, 30, 0, 4, 4, 2023 );


// if we're before the maintenance period has started
if ( $time < $time_maintenance_start ) {
?>
<div class="online-branch">
	<img src="<?php bloginfo( 'template_url' ); ?>/img/title-online-branch.png" />
	<form action="https://www.netteller.com/cuttingedge" method="post" autocomplete="off" _lpchecked="1">
		<input type="text" name="id" id="id" autocomplete="off" onfocus="if(this.value=='NetTeller ID') this.value='';" onblur="if(this.value=='') this.value='NetTeller ID';">
		<input type="hidden" name="pin" id="pin">
		<input type="submit" name="submitButton" id="submitButton" value="Login">
		<a href="https://www.netteller.com/login2008/Authentication/Views/OnlineEnrollmentAgreement.aspx?returnUrl=%2Fcuttingedge" class="new-user btn">New User</a>
	</form>
</div>
<?php
}


// if we're after the maintenance times
if ( $time > $time_maintenance_stop ) {
	?>
	<div class="online-branch">
		<img src="<?php bloginfo( 'template_url' ); ?>/img/title-online-branch.png" />
		<form method="POST" action="https://online.cuttingedgefcu.org/login" autocomplete="off">
			<input type="text" name="username" spellcheck="off" autocorrect="off" autocapitalize="off" required>
			<input type="submit" name="submitButton" id="submitButton" value="Sign in" /></button>
			<a href="https://online.cuttingedgefcu.org/enroll" class="new-user btn">New User</a>
		</form>
	</div>
	<?php
}

