	<?php
		include('db_backup_library.php');
		$dbbackup = new db_backup;
		$dbbackup->connect("localhost","root","","aspp");
		$dbbackup->backup();
		$dbbackup->download();
	?>
	