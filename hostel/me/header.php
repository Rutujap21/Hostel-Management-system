
<?php if($_SESSION['id'])
{ ?><div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px;">Hostel Management System</a>
		<span class="menu-btn"></i></span>
		<ul class="ts-profile-nav">
			<li class="ts-account">
				<a href="#"> Account <i class="fa fa-angle-down hidden-side"></i></a>
				<ul>
					<li><a href="my-profile.php">My Account</a></li>
					<li><a href="logout.php">Logout</a></li>
				</ul>
			</li>
		</ul>
	</div>

<?php
} else { ?>
<div class="brand clearfix">
		<a href="#" class="logo" style="font-size:16px;">Hostel Management System</a>
		<span class="menu-btn"></span>
		
	</div>
	<?php } ?>