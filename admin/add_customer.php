<?php 

  include('include/header.php');
  include('include/sidebar.php');
 ?>


        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                <li class="breadcrumb-item"><a href="add_customers.php">Add Customer</a></li>
              </ol>
          </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            
          <h1 class="h2">Add Customer</h1>
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
                <label for="Customer First Name">First Name</label>
                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter First Name" required>
              </div><div class="form-group">
                <label for="Customer Last Name">Last Name</label>
                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Last Name" required>
              </div>
              <div class="form-group">
                <label for="Customer Email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" required>
              </div>
              <div class="form-group">
                <label for="Customer Password">Set Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Set Password" required>
              </div>
              <div class="form-group">
                <label for="Customer Username">User Name</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Enter UserName" required>
              </div>
              <div class="form-group">
                <label for="Admin Type">Admin Type</label>
                <select name="admin_type" id="admin_type" class="form-control">
                  <option value="0">---</option>
                  <option value="1">Super Admin</option>
                  <option value="2">Customer Admin</option>
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
      var email = $("#email").val();
      var firstname = $("#firstname").val();
      var lastname = $("#lastname").val();
      var password = $("#password").val();
      var admin_type = $("#admin_type").val();
      var username = $("#username").val();
      var data = $("#customer_form").serialize()

      $.ajax({
        type:"POST",
        url:"Customer_add.php",
        data:data,
        success:function(data){
            alert(data)      
        }
      });
    });
}
);
    </script>
  </body>
</html>


