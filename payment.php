<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TANJUNG RHU RESORT</title>
	<!-- Bootstrap Styles-->
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="admin/assets/css/font-awesome.css" rel="stylesheet" />
     <!-- Morris Chart Styles-->
   
        <!-- Custom Styles-->
    <link href="admin/assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="admin/assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
  
                           Payment Details<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				 
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
											<th>Room type</th>
                                            <th>Bed Type</th>
                                            <th>Check in</th>
											<th>Check out</th>
											<th>Amount of People</th>
											<th>Meal Type</th>
											
                                            <th>Room Rent</th>
											<th>Bed Rent</th>
											<th>Meals </th>
											<th>Total Price</th>
                                            <th>Payment</th>
											<th>Print</th>
                                
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
									<?php
										include ('db.php');
										$sql="select * from payment";
										$re = mysqli_query($con,$sql);
										while($row = mysqli_fetch_array($re))
										{
										
											$id = $row['id'];
											
											if($id % 2 ==1 )
											{
												echo"<tr class='gradeC'>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
													<td>".$row['troom']."</td>
													<td>".$row['tbed']."</td>
													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>
													<td>".$row['nroom']."</td>
													<td>".$row['meal']."</td>
													
													<td>".$row['ttot']."</td>
													<td>".$row['mepr']."</td>
													<td>".$row['btot']."</td>
													<td>".$row['fintot']."</td>
                                                    <td><a href=process_payment.php <button class='btn btn-primary'>Payment</button></a></td>
													<td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";
											}
											else
											{
												echo"<tr class='gradeU'>
													<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
													<td>".$row['troom']."</td>
													<td>".$row['tbed']."</td>
													<td>".$row['cin']."</td>
													<td>".$row['cout']."</td>
													<td>".$row['nroom']."</td>
													<td>".$row['meal']."</td>
													
													<td>".$row['ttot']."</td>
													<td>".$row['mepr']."</td>
													<td>".$row['btot']."</td>
													<td>".$row['fintot']."</td>
                                                    <td><a href=process_payment.php <button class='btn btn-primary'>Payment</button></a></td>
													<td><a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
													</tr>";
											
											}
										
										}
										
									?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
                </div>
               
            </div>
        
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
