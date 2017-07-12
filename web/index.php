<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>test-product-search</title>
  <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body style="padding:50px;">
<div class="container" role="main">
  <div class="jumbotron">
    <div class="row">
      <div class="input-group col-md-6 col-md-offset-3">
        <input type="text" class="form-control auto" name='list_name' placeholder="Search for products...">
      </div><!-- /input-group -->
    </div><!-- /.row -->
  </div>

<!--
	<form action='' method='post'>
		<p><label>Product Search:</label><input type='text' name='list_name' value='' class='auto'></p>
	</form>
-->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/ui/1.10.1/jquery-ui.min.js"></script>
<script type="text/javascript">
$(function() {

	//autocomplete
	$(".auto").autocomplete({
		source: "search.php",
		minLength: 1
	});
});
</script>
</div>
</body>
</html>
