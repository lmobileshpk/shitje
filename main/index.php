<?php include 'header.php'; ?>
<?php include('navfixed.php');?>
    <div class="container-fluid">
      <div class="row-fluid">
	
	
	<div class="contentheader">
			<i class    ="icon-dashboard"></i> Dritarja Kryesore
			</div>
			<ul class="breadcrumb">
			<li class="active">Dritarja Kryesore </li>
			</ul>
			<font style=" font:bold 25px 'Aleo'; color:#0489bd;"><center>L-Mobile sh.p.k</center></font>
<div id="mainmain">
	<?php
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='Cashier') {
?>
 <a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i><br> Shitja</a>
<a href="customer.php"><i class="icon-group icon-2x"></i><br> Klientet</a>  

<a href="../index.php"><i class="icon-signout icon-2x"></i><br>Dalje</a>   
<?php
}
if($position=='admin') {
?>

<a href="sales.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i><br> Shitja</a>               
<a href="products.php"><i class="icon-list-alt icon-2x"></i><br> Produktet</a>                
<a href="cat.php"><i class="icon-list-alt icon-2x"></i><br> Kategorit</a>     
<a href="customer.php"><i class="icon-group icon-2x"></i><br> Klientet</a>     
<a href="supplier.php"><i class="icon-group icon-2x"></i><br> Furnitoret</a>     
<a href="salesreport.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i><br> Raportet e Shitjes</a>     
<a href="admin-settings.php"><i class="icon-flag icon-2x"></i><br> Perdoruesit</a>  
<?php 
    }                   
    ?>
<div class="clearfix"></div>
</div>
</div>
</div>
</body> 
<?php include('footer.php'); ?>
</html>
