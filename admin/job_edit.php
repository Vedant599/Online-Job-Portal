<?php 

  include('include/header.php');
  include('include/sidebar_job.php');
 ?>

  <?php 
 include ('connection/db.php');
 echo $edit =$_GET['edit'];
 $query=mysqli_query($conn,"select * from all_jobs where job_id='$edit'");
 while ($row=mysqli_fetch_array($query)){
  $Title=$row['job_title'];
  $Description=$row['des'];
  $country=$row['country'];
  $state=$row['state'];
  $city=$row['city'];
   /*$City=$row['city'];*/

 }


 ?>




        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="Job_create.php">All Jobs List</a></li>
                <li class="breadcrumb-item"><a href="#">All Jobs</a></li>
                <!-- add_customers.php -->
              </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
          <h1 class="h2">Add Job</h1>
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
            <form name="job_form" id="job_form" method="POST">
             
              <div class="form-group">
                <label for="Customer Email">Job Title</label>
                <input type="text" value="<?php echo $Title;?>" class="form-control" name="job_title" id="job_title" placeholder="Enter Job Title" required>
              </div>
              
              <div class="form-group">
                <label for="Customer Username">Description</label>
                <textarea name="Description" id="Description" class="form-control" cols="30" rows="10"><?php echo $Description;?></textarea> 
                <!-- <script type="text/javascript">
                  CKEDITOR.instances['Description'].setData("<?php echo '$Description' ?>");
                </script> -->
              </div>
              <input type="hidden" name="id" id="is" value="<?php echo $_GET['edit'];?>">
              <div class="form-group">
                <label for="">Country</label>
                <select name="country" value="<?php echo $country;?>"class="countries form-control" id="countryId">
                <option value="">Select Country</option>
                </select>
              </div>

              <div class="form-group">
                <label for="">State</label>
                <select name="state" value="<?php echo $state;?>"class="states form-control" id="stateId">
                <option value="">Select State</option>
                </select>
              </div>

              <div class="form-group">
                <label for="">City</label>
                <select name="city" class="cities form-control" value="<?php echo $city;?>" id="cityId">
                <option value="">Select City</option>
                </select>
              </div>




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
    <script type="text/javascript">
      $(document).ready(function() {
    $('#customer_form').submit(function(){
      var Description = $("#Description").val();
      var job_title = $("#job_title").val();
      var countryId = $("#countryId").val();
      var stateId = $("#stateId").val();
      var cityId = $("#cityId").val();

      if(job_title==' '){
        alert("Please Enter Job Title");
        return false;
      }


      if(Description==' '){
        alert("Please Enter Description ");
        return false;
      }
      
      if(countryId==' '){
        alert("Please Enter Country Name");
        return false;
      }
      if(stateId==' '){
        alert("Please Enter State Name");
        return false;
      }
      if(cityId==' '){
        alert("Please Enter City Name");
        return false;
      }
      var data = $("#job_form").serialize()

     
    });
}
);
    </script>
  </body>
</html>

<?php

include ('connection/db.php');
 if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $Description=$_POST['Description'];
  $job_title=$_POST['job_title'];
  $Country=$_POST['country'];
  $State=$_POST['state'];
  $City=$_POST['city'];

 
  $query1=mysqli_query($conn,"Update all_jobs set job_title='$job_title', des='$Description', country='$Country',
    state='$State', city='$City' where job_id='$edit'");
  if ($query1){

    echo"<script>alert('Record has been successfully updated !!!')</script>";
  }else{
    echo"<script>alert('Retry Some error has occured !!!')</script>";
  }

 }

 ?>
