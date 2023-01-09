<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-xl-6">
			<form method="post" action="add_insert.php">
				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="password" class="form-control">
				</div>
				<div id="my">
					<div class="form-group">
						<label>Mobile : </label><br>
						<input type="text" name="mobile[]" class="form-control" style="width:475px; float: left;">
						<button class="btn btn-info" id="add" style="float:right;">Add</button>
					</div>
				</div>
				<input type="submit" name="save" value="save" class="btn btn-info">
			</form>
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		var i=1;
		$("#add").click(function(e){
			e.preventDefault();
			var html='';
			i++;
			html+='<div class="form-group" id="row'+i+'">';
			html+='<label>Mobile : </label><br>';
			html+='<input type="text" name="mobile[]" class="form-control" style="width:475px; float: left;">';
			html+='<button class="btn btn-danger delete" eid="'+i+'" style="float:right;">Add</button>';
			html+='</div>';
			$("#my").append(html);
		});


		$(document).on("click",".delete",function(e){
	     e.preventDefault();
	      var wid= $(this).attr("eid");
	      // alert(id);
	      $("#row"+wid+"").remove();
	    });
	});
</script>
</body>
</html>