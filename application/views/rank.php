<html lang="en">
<title> Lost Ark </title>
<link rel="stylesheet" href="/thelostark/assets/css/bootstrap.css">
<body>
<div class="navbar navbar-default navbar-fixed-top">
 <a href="#" class="navbar-brand">Lost Ark</a>
</div>
<div class="container">

<div class="col-lg-1">
</div>
<div class="col-lg-2">
<div class="panel panel-primary" style="margin-top:70%">
              <div class="panel-heading">
                <h3 class="panel-title">Your rank !!</h3>
              </div>
  <div class="panel-body">
             <centre>   
            <p class="lead"> 	<?php foreach($rank as $row) { echo $row->rank; }?> </p>
             </centre>
              </div>
            </div>
 </div>
<div class="col-lg-1">
</div> 

<div class="col-lg-4" style="margin-top:5%"> 
<table class="table table-striped table-bordered table-hover">
<thead>
<tr class="danger">
	<th> Rank </th>
	<th> Name </th>
<tr>
</thead>
<tbody>

<?php $i=1;
	foreach($top10 as $row) { ?>
	<tr>
		<td>   <?php echo $i ; $i=$i+1; ?> </td>
		<td>  <?php echo $row->name ?> </td> 
	</tr>
<?php } ?>
</tbody>
</table>
</div>
<br><br><br><br><br><br><br>
<button type="button" class="btn btn-link btn-lg"><a href="./lostark"> back </a>
</button>
</div>
</body>