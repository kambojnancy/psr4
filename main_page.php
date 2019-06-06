<html>
<head>
	<title>shop timing</title>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.3/jquery.timepicker.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.3/jquery.timepicker.min.js"></script>
</head>

	<body>
		<form action="" method="post">

			<label>select day</label>
			<select>
				<option>Select</option>
				<option>Sunday</option>
				<option>Monday</option>
				<option>Tuesday</option>
				<option>Wednesday</option>
				<option>Thursday</option>
				<option>Friday</option>
				<option>Saturday</option>
			</select>
			<label>Open Time</label>
			<input type="text"  name="OTime" class="timepicker">
			<label>Close Time</label>
			<input type="text" name="CTime" class="timepicker"></br></br>
			<label>Lunch Time start</label>
			<input type="text" name="LTimeStart" class="timepicker">
			<label>Lunch Time finish</label>
			<input type="text" name="LTimeFinish" class="timepicker"></br></br>
			<input type="submit" name="submit">
		</form>

		<script >
		    $('.timepicker').timepicker({
                timeFormat: 'HH:mm p',
                interval: 30,
                defaultTime: '00:00',
              });
        </script>
		

	</body>
</html>