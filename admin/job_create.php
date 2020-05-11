<?php 

	include('connection/db.php');
	include('include/header.php');
    include('include/sidebar_job.php');
?>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="customers.php">Job</a></li>
              </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
          <h1 class="h2">All Jobs</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
              </div>
              <a class="btn btn-primary" href="add_create_job.php">Create Job</a>
            </div>
          </div>

          <table id="example" class="display" style="font-size:17px;">
        <thead>
            <tr>
                <!-- <th>ID</th> -->
                <th>ID</th>
                <th>Email</th>
                <th>Job Title</th>
                <th>Description</th>
                <th>Country</th>
                <th>Sate</th>
                <th>City</th>
                <th>Action</th>
                
            </tr>
        </thead>
          <tbody>
            <?php 
            include('connection/db.php');
            $query=mysqli_query($conn,"select * from all_jobs where customer_email='{$_SESSION['email']}'");
            while($row=mysqli_fetch_array($query))
            {
             ?>
            <tr>
            	<td><?php echo $row['job_id']; ?></td>
                <td><?php echo $row['customer_email']; ?></td>
                <td><?php echo $row['job_title']; ?></td>
                <td><?php echo $row['des']; ?></td>
                <td><?php echo $row['country']; ?></td>
                <td><?php echo $row['state']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td>
                  <div class="row">
                    <div class="btn-group">
                      <a href="job_edit.php?edit=<?php echo $row['job_id']; ?>" class="btn btn-primary" style="margin-right:10px;"><span class="fas fa-edit"></span></a>
                      <a href="job_delete.php?del=<?php echo $row['job_id']; ?>" class="btn btn-danger"><span class="fas fa-user-slash"></span></a>
                    </div>
                  </div>
                </td>
            </tr>
          <?php } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Job Title</th>
                <th>Description</th>
                <th>Country</th>
                <th>Sate</th>
                <th>City</th>
                <th>Action</th>
            </tr>
        </tfoot>
    </table>


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
