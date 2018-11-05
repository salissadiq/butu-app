    <form action="search.php" method="post">
    <nav class="navbar navbar-dark fixed-top bg-danger flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">BUTU Travel & Tours  </a>
      <input class="form-control form-control w-100 mr-2" type="text" name="search" placeholder="Search with Passport Number, surname, Place of birth or Agent" aria-label="Search" required>
      <button type="submit" name="submit" class="btn btn-outline-light rounded-0"><i class="fa fa-search"></i></button>
    
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="btn btn-outline-light rounded-0" href="logout">Sign out <i class="fa fa-sign-out"></i></a>
        </li>

      </ul>
    </nav>
    </form>
<div class="container-fluid">
      <div class="row">
        <nav class="col-md-3 col-lg-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="dashboard">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registerClient">
                  <span data-feather="users"></span>
                  Register Client
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="vClient?page=1">
                  <span data-feather="eye"></span>
                  View Clients
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="message?page=1">
                  <span class="fa fa-envelope-o"></span>
                  Message
                  <?php
                  $msgCount = $db->query("SELECT * FROM message WHERE receiver_id ='$id' AND status = 0 ");
             if ($msgCount) {
                echo "<span class='label label-danger'> <span class='fa fa-envelope'></span> " . $msgCount->num_rows. "</span>";
              } 
            ?>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sprofile">
                  <span data-feather="user"></span>
                    <?php echo $username; ?>
                </a>
              </li>
            </ul>
            <?php  
              if($level == 2) {
              ?>
              
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Settings</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="mstaffs">
                  <span data-feather="file-text"></span>
                  Manage Staffs
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
              <?php
              }
            ?>
          </div>
        </nav>
