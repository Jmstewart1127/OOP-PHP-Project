<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blank Page
                <small>Subheading</small>
            </h1>

            <?php
      

            $found_user = User::find_user_by_id(2);
            echo $found_user->username;

            $user = new User();

            $user->username = "Example_username";
            $user->password = "Example_password";
            $user->first_name = "Jstew";
            $user->last_name = "Masterbrue";

            $user->create();



             ?>

            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->
