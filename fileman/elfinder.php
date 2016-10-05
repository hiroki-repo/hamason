<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>File Manager</title>
		<!-- jQuery and jQuery UI (REQUIRED) -->
		<link rel="stylesheet" type="text/css" media="screen" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/themes/smoothness/jquery-ui.css">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
		<!-- elFinder CSS (REQUIRED) -->
		<link rel="stylesheet" type="text/css" media="screen" href="css/elfinder.min.css">
		<link rel="stylesheet" type="text/css" media="screen" href="css/theme.css">
		<!-- elFinder JS (REQUIRED) -->
		<script type="text/javascript" src="js/elfinder.min.js"></script>
		<!-- elFinder translation (OPTIONAL) -->
		<script type="text/javascript" src="js/i18n/elfinder.jp.js"></script>
		<!-- elFinder initialization -->
				<script type="text/javascript" charset="utf-8">
					$().ready(function() {
						var elf = $('#elfinder').elfinder({
							url : 'php/connector.php?access=219.110.201.211_ee26d5729c5c3307d67ebe04aae79c6c1d14c4e2',
							lang: 'jp',
							resizable: false,
							width: 890,
							height: 580,
						}).elfinder('instance');
					});
				</script>		
	</head>
	<body>
		<!-- Element where elFinder will be created (REQUIRED) -->
		<div id="elfinder"></div>
	</body>
</html>