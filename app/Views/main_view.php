<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title></title>
        <link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/css/styles.css'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/js/jquery.js'); ?>" rel="stylesheet">
        <link href="<?= base_url('assets/js/propper.min.js'); ?>" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <style type="text/css">
            ul {
    position: absolute;
    right: 90px;       
    border-radius: 3px;
    font-size: 18px;
}
ul li a{
    color: cyan;
    text-decoration: none;
}
ul ul{
    visibility: hidden;
    text-decoration: none;
}
li:hover > ul {
    visibility: visible;
    margin-top: 0px;
    background: linear-gradient(#343a40, #343a40);
}
 ul ul {
    top: 75;
    width:100px;
    right: 0px;
    box-shadow: -1px 0 0 rgba(255,255,255,.3);      
}
ul li {
    float: none;
    display: block;
    border: 0;
    box-shadow: 0 1px 0 #111, 0 2px 0 #666;
}
ul ul li{
    text-decoration: none;
    list-style: none;
    float: right;
    margin-right: 10px;
    text-decoration: none;
}
ul li:last-child {   
    box-shadow: none;    
}
ul a {    
    padding: 10px;
    width: 80px;
    _height: 10px; /*IE6 only*/
    display: inline-block;
    white-space: nowrap;
}
ul ul:hover {
    background-color: #e83e8c;
    background-image: linear-gradient(#007bff, #007bff);
}
ul ul li:first-child > a:after {
    content: '';
    position: absolute;
    right: 40px;
    top: -8px;
    border-left: 8px solid transparent;
    border-right: 8px solid transparent;
    border-bottom: 8px solid #444;
}
ul ul li:first-child a:hover:after {
    border-bottom-color: #007bff; 
}
ul li:last-child > a {
    border-radius: 0 0 3px 3px;
    color: #17a2b8;
    text-decoration: none;
    list-style: none;
}
/* ..........end of header............*/
        </style>
    </head>
    <body class="bg-secondary">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">PHP Online Comment System. </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            
            <!-- Navbar-->
            <ul>
            <li>
          <a href="<?= site_url('/lectcontroller'); ?>" id="user">Logout</a>
            
          </li>
        </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"><h1>p</h1></div>
                            <a class="nav-link" href="<?= site_url('#');?>">
                                
                               
                            </a>
                            <a class="nav-link" href="">
                            <div class="sb-sidenav-menu-heading"><h1>o</h1></div>
                            <a class="nav-link" href="<?= site_url('#');?>">
                               
                            </a>
                            
                            <div class="sb-sidenav-menu-heading"><h1>c</h1></div>
                            <a class="nav-link" href="<?= site_url('#');?>">
                               
                               
                            </a>
                            <div class="sb-sidenav-menu-heading"><h1>s</h1></div>
                            <a class="nav-link" href="<?= site_url('#');?>">
                                
                               
                            </a>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <center><h1 class="mt-4">             Student who made Comment</h1></center>
                        <center><ol class="breadcrumb mb-4">
                           <li class="breadcrumb-item active">================================================================================================</li>
                        </ol></center>
                                                
                        <!-- main -->
             <div class="table-responsive">
                 <table class="table table-bordered">

                 <tr>
                     <th>ID</th>
                     <th>FIRST NAME</th>
                     <th>LAST NAME</th>
                     <th>GENDER</th>
                     <th>PHONE</th>
                     <th>COMMENT</th>
                 </tr>
                 

<?php

foreach($datainfo as $row) :?>
<tr>

    <td><?php echo $row['id'];?></td>
    <td><?php echo $row['fname'];?></td>
    <td><?php echo $row['lname'];?></td>
    <td><?php echo $row['gender'];?></td>
    <td><?php echo $row['phone'];?></td>
    <td><?php echo $row['comment'];?></td>


</tr>
<?php
endforeach



 ?>

                 </table>

             </div>   
             <div>
             
            
             </div>    







                <footer  class="bg-secondary" class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?= site_url('assets/js/scripts.js');?>"></script>
    </body>
</html>
