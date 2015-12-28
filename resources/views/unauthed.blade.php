<!DOCTYPE html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">
		<link rel="shortcut icon" href="/statics/favicon.ico">
		<link rel="stylesheet" href="/statics/styles/app.min.css">
	</head>
	<body>
		<div class="app layout-fixed-header bg-white usersession">
			<div class="full-height">
				<div class="center-wrapper">
					<div class="center-content">
						@section('content')
					</div>
				</div>
			</div>
		</div>
		<script src="/statics/app/app.min.js"></script>
    @section('addjs')
	</body>
</html>
