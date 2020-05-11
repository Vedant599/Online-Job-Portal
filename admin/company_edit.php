<?php 

	include('connection/db.php');
	include('include/header.php');
  include('include/sidebar_company.php');

    $id=$_GET['edit'];
    $query= mysqli_query($conn,"select * from company  where company_id='$id'");
    while( $row=mysqli_fetch_array($query)){
    	$company_name=$row['company'];
    	$des=$row['des'];
    	
    }

?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="create_company.php">Company</a></li>
                <li class="breadcrumb-item"><a href="#">Update Company</a></li>
                <!-- add_customers.php -->
              </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
          <h1 class="h2">Update Company</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              </div>
<!--               <a class="btn btn-primary" href="add_customer.php">Add Customer</a> -->
            </div>
          </div>
          <div style="width: 50%;margin: 10px auto;">
            <div class="alert alert-success" role="alert" style="visibility: hidden;">
              Success Message
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
          </div>
            <form name="customer_form" id="customer_form" method="POST">
             
              <div class="form-group">
                <label for="Customer Email">Enter Company Name</label>
                <input type="Company" class="form-control" name="Company" id="Company" value="<?php echo $company_name; ?>" placeholder="Enter Company Name" required>
              </div>
              
              <div class="form-group">
                <label for="Customer Username">Description</label>
                <textarea name="des" id="des" class="form-control" cols="30" rows="10">
                  <?php echo $des;?>
                </textarea>
              </div>

              
              <input type="hidden" name="id" id="id" value="<?php echo $_GET['edit']; ?>">
              <div class="form-group">
                <input type="submit" class="btn btn-block btn-success" name="submit" id="submit" value="Save">
              </div>
            </form>
          </div>
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <!-- Data Table Plugin -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable();
}
);
    </script>
   
  </body>
</html>
<?php 

 include('connection/db.php');
 if(isset($_POST['submit'])){
  $company=$_POST['Company'];
 	$des=$_POST['des'];
 	
 	$query=mysqli_query($conn,"Update Company set company='$company', des='$des' where company_id='$id'");
 	if ($query){

 		echo"<script>alert('Record has been successfully updated !!!')</script>";
 	}else{
 		echo"<script>alert('Retry Some error has occured !!!')</script>";
 	}

 }
 
?>