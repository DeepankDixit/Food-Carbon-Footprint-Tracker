<!DOCTYPE html>
<html>
<head>
<title>Multistep Registration Form- Demo Preview</title>
<meta content="noindex, nofollow" name="robots">
<!-- Including CSS File Here -->
<link href="style.css" rel="stylesheet" type="text/css">
<!-- Including JS File Here -->
<script src="multi_step_form.js" type="text/javascript"></script>
</head>

<body>
<div class="content">
<!-- Multistep Form -->
<div class="main">
<!-- Progressbar -->
<ul id="progressbar">
<li id="active1">Results</li>
</ul>
<!-- Fieldsets -->

<fieldset id="first">
<h2 class="title">Result Details</h2>
<p class="subtitle">Step Final</p>
	
    Welcome <?php echo $_POST["email"]; ?>
    <br>
	Your email address is: <?php echo $_POST["email"]; ?>

</fieldset>

</div>
</div>
</body>
</html>
