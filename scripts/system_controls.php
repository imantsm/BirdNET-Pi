<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  font-family: 'Arial', 'Gill Sans', 'Gill Sans MT',
  ' Calibri', 'Trebuchet MS', 'sans-serif';
  box-sizing: border-box;

	box-sizing: border-box;
}

/* Create two unequal columns that floats next to each other */
.column {
	float: left;
	padding: 10px;
}

.first {
	width: calc(50% - 70px);
}

.second {
	width: calc(50% - 30px);
}

/* Clear floats after the columns */
.row:after {
	content: "";
	display: table;
	clear: both;
}
body {
	background-color: rgb(119, 196, 135);
}

a {
	text-decoration: none;
	color: white;
}

.block {
	display: block;
	font-weight: bold;
	width:100%;
	border: none;
	background-color: #04AA6D;
	padding: 20px 20px;
	color: white;
	font-size: medium;
	cursor: pointer;
	text-align: center;
}
		@media screen and (max-width: 800px) {
			.column {
				float: none;
				width: 100%;
			}
		}
</style>
<body style="background-color: rgb(119, 196, 135);">
	<div class="row">
		<div class="column first">
			<form action="/scripts/reboot_system.php" onclick="return confirm('Are you sure you want to reboot?')">
				<button type="submit" class="block">Reboot</button>
			</form>
			<form action="/scripts/update_birdnet.php" onclick="return confirm('BE SURE TO STASH ANY LOCAL CHANGES YOU HAVE MADE TO THE SYSTEM BEFORE UPDATING!!!')">
				<button style="color:blue;" type="submit" class="block">Update</button>
			</form>
			<form action="/scripts/shutdown_system.php" onclick="return confirm('Are you sure you want to shutdown?')">
				<button style="color: red;" type="submit" class="block">Shutdown</button>
			</form>
			<form action="/scripts/clear_all_data.php" onclick="return confirm('Clear ALL Data? This cannot be undone.')">
				<button style="color: red;" type="submit" class="block">Clear ALL data</button>
			</form>	
		</div>
</body>