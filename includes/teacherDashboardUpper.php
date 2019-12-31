<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dashboard</title>

   <!-- Bootstrap core CSS-->
   <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <!-- Custom fonts for this template-->
   <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

   <!-- Page level plugin CSS-->
   <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

   <!-- Custom styles for this template-->
   <link href="css/sb-admin.css" rel="stylesheet">

 </head>

 <body id="page-top">

   <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

     <a class="navbar-brand mr-1" href="#">Quiz Portal</a>

     <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
       <i class="fas fa-bars"></i>
     </button>

     <!-- Navbar Search -->
     <form style='visibility:hidden;'class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       <div class="input-group">
         <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
         <div class="input-group-append">
           <button class="btn btn-primary" type="button">
             <i class="fas fa-search"></i>
           </button>
         </div>
       </div>
     </form>

     <!-- Navbar -->
     <ul class="navbar-nav ml-auto ml-md-0">
       <li class="nav-item dropdown no-arrow">
         <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           <i class="fas fa-user-circle fa-fw"></i>
         </a>
         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
           <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="home.php" data-toggle="modal" data-target="#logoutModal">Logout</a>
         </div>
       </li>
     </ul>

   </nav>

   <div id="wrapper">

     <!-- Sidebar -->
     <ul class="sidebar navbar-nav">
       <li class="nav-item active">
         <a class="nav-link" href="#">
           <i class="fas fa-fw fa-tachometer-alt"></i>
           <span>Teacher's Dashboard</span>
         </a>
       </li>

     </ul>

     <div id="content-wrapper">

       <div class="container-fluid">

         <!-- Breadcrumbs-->
         <ol class="breadcrumb">
           <li class="breadcrumb-item">
          <center><h1 style="align:center">Teacher's Dashboard</h1></center>
           </li>

         </ol>

       <!-- /.container-fluid -->
