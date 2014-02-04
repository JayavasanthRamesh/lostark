<html laang="en">
<title> Lost Ark </title>
<link rel="stylesheet" href="/thelostark/assets/css/bootstrap.css">
<body>
<div class="navbar navbar-default navbar-fixed-top">
 <a href="#" class="navbar-brand"></h1>Lost Ark</a>
</div>
<br><br><br><br><br>
<div class="row">
		<div class="col-lg-2">
		</div>
         <div class="col-lg-8">
		<div id="container">
				<div class="jumbotron">
				<div class="row">
				<centre>
				<p class="text-danger" style="text-align:center">
					<?php echo $dlevel ?>
					<?php echo form_open('lostark/answer')?>
					<br><br>
				</p>
				</centre>
				</div>
				<div class="row">
					<div class="col-lg-4"></div>
					<div class="col-lg-4">

					<form method="post"  class="bs-example">
						<div class="input-group">
                    			<span class="input-group-addon">Answer</span>
                    			<input type="text" name="answer" class="form-control">
                    			<span class="input-group-btn">
                      			<input class="btn btn-default" type="submit"></button>
                    			</span>
                  		</div>
						
					</form>
					</div>
				</div>
		</div>
		</div>
</div>
<div class="row">
	<div class="col-lg-4">
		</div>
		<div class="col-lg-4">
            <div class="bs-example">
              <ul class="pager">
                <li><a href="../logout">Logout</a></li>
                &nbsp;&nbsp;
                <li><a href="../rank">Results</a></li>
              </ul>
            </div>
</div>
</div>
</body>
