<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>demotle</title>
</head>
<body>


	<style>
		input{
			width: 50px;font-weight: bold;
		}
	</style>

	<form id="form" method="POST" action="{{ url('api/demo') }}">
	<input id="token" type="hidden" name="_token" value="{{ csrf_token() }}">
		<p>lấy thông tin trang el.tdc.edu.vn</p>
		<input type="submit" id="submit" value="load">
	</form>

	@if(isset($data))

	@foreach ($data as $key=>$value)
   	<p>
   		<?php echo $key." - ".$value; ?>
   			
   		</p>
	@endforeach

	@endif




</body>
</html>