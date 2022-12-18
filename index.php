<!DOCTYPE html>
<head>
  <title>Dashboard - Khatabook</title>

  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width">

  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,300,700">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <!-- Plugin CSS -->
  <link rel="stylesheet" href="js/plugins/morris/morris.css">
  <link rel="stylesheet" href="js/plugins/icheck/skins/minimal/blue.css">
  <link rel="stylesheet" href="js/plugins/select2/select2.css">
  <link rel="stylesheet" href="js/plugins/fullcalendar/fullcalendar.css">

  <!-- App CSS -->
  <link rel="stylesheet" href="css/target-admin.css">
  <link rel="stylesheet" href="css/custom.css">

</head>

<body>

  <div class="navbar">

  <div class="container">

    <div class="navbar-header">

      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <i class="fa fa-cogs"></i>
      </button>

      <div class="navbar-brand navbar-brand-image">
        <i class="fa fa-book"></i> &nbsp; Khatabook
      </div>

    </div> <!-- /.navbar-header -->

    <div class="navbar-collapse collapse">

      <ul class="nav navbar-nav navbar-right">   


        <li class="dropdown navbar-profile">
          <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
            <img src="img/avatars/avatar-1-xs.jpg" class="navbar-profile-avatar" alt="">
            <span class="navbar-profile-label">rod@rod.me &nbsp;</span>
            <i class="fa fa-caret-down"></i>
          </a>

          <ul class="dropdown-menu" role="menu">

            <li>
              <a href="#">
                <i class="fa fa-user"></i> 
                &nbsp;&nbsp;My Profile
              </a>
            </li>

            <li class="divider"></li>

            <li>
              <a href="login.html">
                <i class="fa fa-sign-out"></i> 
                &nbsp;&nbsp;Logout
              </a>
            </li>

          </ul>

        </li>

      </ul>

       



       

    </div> <!--/.navbar-collapse -->

  </div> <!-- /.container -->

</div> <!-- /.navbar -->

  <div class="mainbar">

  <div class="container">

    <button type="button" class="btn mainbar-toggle" data-toggle="collapse" data-target=".mainbar-collapse">
      <i class="fa fa-bars"></i>
    </button>

    <div class="mainbar-collapse collapse">
    
      <ul class="nav navbar-nav mainbar-nav">

        <li class="">
          <a data-toggle="modal" href="#styledModal">
            <i class="fa fa-user"></i>
            Add Customer
          </a>
        </li>

        <li class="dropdown">
          <a href="">
            <i class="fa fa-money"></i>
            Payment History
          </a>
        </li>

      </ul>

    </div> <!-- /.navbar-collapse -->   

  </div> <!-- /.container --> 

</div> <!-- /.mainbar -->


<div class="container">

  <div class="content">

    <div class="content-container">

      <div class="row">

        <div class="col-sm-6 col-md-3">
          <div class="row-stat">
            <p class="row-stat-label">Net Income</p>
            <h3 class="row-stat-value">₹ 500</h3>
            <span class="label label-success row-stat-badge">You'll give</span>
          </div> <!-- /.row-stat -->
        </div> <!-- /.col -->

        <div class="col-sm-6 col-md-3">
          <div class="row-stat">
            <p class="row-stat-label">Net Income</p>
            <h3 class="row-stat-value">₹ 1500</h3>
            <span class="label label-danger row-stat-badge">You'll get</span>
          </div> <!-- /.row-stat -->
        </div> <!-- /.col -->

        <div class="col-sm-6 col-md-3">
          <div class="row-stat">
            <p class="row-stat-label">Total Customer</p>
            <h3 class="row-stat-value">10</h3>
          </div> <!-- /.row-stat -->
        </div> <!-- /.col -->

        <div class="col-sm-6 col-md-3">
          <div class="row-stat">
            <p class="row-stat-label">Last login</p>
            <h3 class="row-stat-value">10-12-2022</h3>
            <span class="label label-warning row-stat-badge">9:45 AM</span>
          </div> <!-- /.row-stat -->
        </div> <!-- /.col -->
        
      </div> <!-- /.row -->


      <br>



      <div class="row">

        <div class="col-md-12">

          <div class="portlet portlet-table">

            <div class="portlet-header">

              <h3>
                <i class="fa fa-group"></i>
                Customer List
              </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">


              <div class="table-responsive">

     <?php         
              // get data from database on page
 // create connection
              $servername = "localhost";
              $username = "root";
              $password = "";
              $dbname = "khatabook";
              
     // Create connection
              $join = mysqli_connect($servername, $username, "", $dbname);
     // Check connection
              if (!$join) {
                die("Connection failed: ". mysqli_connect_error());
              }else{
                
              }     

     // Attempt select query execution
                  $sql = "SELECT * FROM view"; // view is our database taable
                  if($rlt = mysqli_query($join, $sql)){  // if connection and sql query going good. then do next.
                      if(mysqli_num_rows($rlt) > 0){ // result greter then 0 then we echo here our table.

                        echo '<table id="user-signups" class="table table-striped table-bordered table-checkable">';
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th>Name</th>"; 
                        echo "<th>Mobile Number</th>"; 
                        echo "<th>You'll give</th>";
                        echo "<th>You'll get</th>";
                        echo "<th>Action</th>";
                        echo "</tr>";
                        echo "</thead>";
                        echo "<tbody>";
                        while($row = mysqli_fetch_array($rlt)){  // feching with while loop.
                          echo "<tr>";
                          // echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['fname'] . "</td>";  // these are our databese table colunm name.
                                        echo "<td>" . $row['mob'] . "</td>";
                                        echo "<td>" . $row['ygive'] . "</td>";
                                        echo "<td>" . $row['yget'] . "</td>";
                                        echo "<td>";     // below <a> tag for action colunm. when we need we can use it.
                                        //echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                         // echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                        echo "</tr>";
                                      }
                                      echo "</tbody>";
                                      echo "</table>";
            // Free result set
                            mysqli_free_result($rlt); 
                      }else{
                        echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                    }
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close connection
                mysqli_close($join);
                 ?>
                   <!-- below comment is our old old code incase we need we can use it -->
                    
                      <!-- // <th class="hidden-xs">Name</th> 
                      // <th>Mobile Number</th> 
                      // <th>You'll give</th>
                      // <th>You'll get</th>
                      // <th>Action</th>
                    </tr> 
                  </thead> 

                  <tbody> 
                    <tr> 

                      <td class="hidden-xs">Sachin Mhaskar</td> 
                      <td>9421002025</td> 
                      <td><span class="label label-danger">505</span></td> 
                      <td><span class="label label-success">350</span></td>
                      <td>
                        <span class="label label-danger" data-toggle="modal" href="#basicModal">Delete</span>
                        <span class="label label-info" data-toggle="modal" href="#basicModal">Update</span>
                      </td>  
                    </tr> 

                    <tr> 
                      <td class="hidden-xs">Milind Mhaskar</td> 
                      <td>8830660959</td> 
                      <td><span class="label label-danger">1500</span></td>  
                      <td><span class="label label-success">450</span></td> 
                      <td>
                        <span class="label label-danger" data-toggle="modal" href="#basicModal">Delete</span>
                        <span class="label label-info" data-toggle="modal" href="#basicModal">Update</span>
                      </td> 
                    </tr> 

                    <tr> 

                      <td class="hidden-xs">Premraj Jangam</td> 
                      <td>9049259318</td> 
                      <td><span class="label label-danger">1200</span></td>  
                      <td><span class="label label-success">650</span></td> 
                      <td>
                        <span class="label label-danger" data-toggle="modal" href="#basicModal">Delete</span>
                        <span class="label label-info" data-toggle="modal" href="#basicModal">Update</span>
                      </td> 
                    </tr> 

                    <tr> 
                      <td class="hidden-xs">Nikhil Gurav</td> 
                      <td>7620357285</td> 
                      <td><span class="label label-danger">1000</span></td> 
                      <td><span class="label label-success">250</span></td> 
                      <td>
                        <span class="label label-danger" data-toggle="modal" href="#basicModal">Delete</span>
                        <span class="label label-info" data-toggle="modal" href="#basicModal">Update</span>
                      </td>  
                    </tr>  

                  </tbody> 

                </table> -->
                  

              </div> <!-- /.table-responsive -->
               
            </div> <!-- /.portlet-content -->


          </div> <!-- /.portlet -->


        </div> <!-- /.col -->

      </div> <!-- /.row -->

    </div> <!-- /.content-container -->
      
  </div> <!-- /.content -->

</div> <!-- /.container -->


<div id="basicModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Confirm Delete</h3>
      </div>
     <form action="delete.php">
      <div class="modal-body">
        <p>Are you sure ?</p>
      </div>
    
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
        <button type="submit" class="btn btn-primary" data-dismiss="modal">Yes</button>
      </div>
    </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="styledModal" class="modal modal-styled fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title">Customer Details</h3>
      </div>
      <div class="modal-body">

        


        <form action="add_insert.php" method="POST">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" id="fname" name="fname" class="form-control" data-required="true" >
        </div>

        <div class="form-group">
          <label for="mob">Mobile Number</label>
          <input type="number" id="mob" name="mob" class="form-control" data-required="true" >
      
          <div class="form-group">
          <label for="ygive">You Will Give</label>
          <input type="number" id="ygive" name="ygive" class="form-control" data-required="true" >
      
          <div class="form-group">
          <label for="yget">You Will Get</label>
          <input type="number" id="yget" name="yget" class="form-control" data-required="true" >


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-tertiary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-secondary" data-dismiss="modal">Add</button>
      </div>
    </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<footer class="footer"></footer>

  <script src="js/libs/jquery-1.10.1.min.js"></script>
  <script src="js/libs/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="js/libs/bootstrap.min.js"></script>

  
  <!-- Plugin JS -->
  <script src="js/plugins/icheck/jquery.icheck.js"></script>
  <script src="js/plugins/select2/select2.js"></script>
  <script src="js/libs/raphael-2.1.2.min.js"></script>
  <script src="js/plugins/morris/morris.min.js"></script>
  <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="js/plugins/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="js/plugins/fullcalendar/fullcalendar.min.js"></script>

  <!-- App JS -->
  <script src="js/target-admin.js"></script>
  
  <!-- Plugin JS -->
  <script src="js/demos/dashboard.js"></script>
  <script src="js/demos/calendar.js"></script>
  <script src="js/demos/charts/morris/area.js"></script>
  <script src="js/demos/charts/morris/donut.js"></script>
  
</body>
</html>
