<?php 
require("alert.php");
require("db_config.php");
adminLogin();



if(isset($_GET['seen'])){
    $frm_data =filteration($_GET);

    if($frm_data['seen']=='all'){
        $q = "UPDATE `contact` SET `seen`=?";
        $values= [1];
        if(update($q,$values,'i')){
            alert('success','Mark all as read');
        } 
    }
    else{
        $q = "UPDATE `contact` SET `seen`=? WHERE `sr_no`=?";
        $values= [1,$frm_data['seen']];
        if(update($q,$values,'ii')){
            alert('success','Mark as read');
        } 
    }
}


if(isset($_GET['del'])){
    $frm_data =filteration($_GET);

    if($frm_data['del']=='all'){
        // $q = "DELETE FROM `user_queries`";
        // if(mysqli_query($con,$q)){
        //     alert('success','All inquiry Deleted');
        // }
    }
    else{
        $q = "DELETE FROM `contact` WHERE `sr_no`=?";
        $values= [$frm_data['del']];
        if(delete($q,$values,'i')){
            alert('success','Inquiry Deleted');
        }
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Dashboard - Mendoza</title>
      <meta name="robots" content="noindex, nofollow">
      <meta content="" name="description">
      <meta content="" name="keywords">
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/css/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/css/quill.snow.css" rel="stylesheet">
      <link href="assets/css/quill.bubble.css" rel="stylesheet">
      <link href="assets/css/remixicon.css" rel="stylesheet">
      <link href="assets/css/simple-datatables.css" rel="stylesheet">
      <link href="assets/css/style.css" rel="stylesheet">
   </head>
   <body>
    
   <?php 

require("include/header.php");

require("include/aside.php");

?>

      <main id="main" class="main">
         <div class="pagetitle">
            <h1>Portfolio</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active">Portfolio</li>
               </ol>
         </div>

         <div class="card border-0 shadow-sm mb-4">
            <div class="card-body">
               <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="card-title m-0">All Contact Queries</h5>
               </div>

               <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">

                        <div class="text-end mb-4">
                            <a href="?seen=all" class="btn btn-success shadow-none btn-sm">Mark All Read <i class="bi bi-check-all"></i></a>
                           
                        </div>


                           <div class="table-responsive-md" style="height:450px; overflow-y:scroll;">
                           <table class="table table-hover border">
                            <thead class="sticky-top">
                                <tr class="text-white" style="background-color: #7381F4;">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col"width="30%">Message</th>
                                <th scope="col">Date</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php 
                             
                             $q = "SELECT * FROM `contact` ORDER BY `sr_no` DESC";
                             $data = mysqli_query($con,$q);
                             $i=1;

                             while($row = mysqli_fetch_assoc($data)){
                                $date = date('F j Y',strtotime($row['date']));
                                $seen = '';
                                if($row['seen']!=1){
                                    $seen="<a href='?seen=$row[sr_no]' class='btn btn-sm  shadow-none btn-success'><i class='bi bi-check-all'></i></a>";
                                }
                                $seen.="<a href='?del=$row[sr_no]' class='btn btn-sm shadow-none btn-danger ms-3'><i class='bi bi-trash'></i></a>";

                                echo<<<query

                                <tr>
                                    <td>$i</td>
                                    <td>$row[name]</td>
                                    <td>$row[email]</td>
                                    <td>$row[message]</td>
                                    <td>$date</td>
                                    <td>$seen</td>
                                </tr>


                                query;
                                $i++;
                             }

                             
                             ?>
                            </tbody>
                            </table>
                            </div>

                        </div>
                    </div>

              
                     
               </div>
            </div>
         </div>


  
      </main>
      <footer id="footer" class="footer">
         <div class="copyright"> &copy; Copyright <strong><span>riyuuu dev</span></strong>. All Rights Reserved</div>
       
      </footer>
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>  
        <script src="assets/js/apexcharts.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/chart.min.js"></script>
        <script src="assets/js/echarts.min.js"></script>
        <script src="assets/js/quill.min.js"></script>
        <script src="assets/js/simple-datatables.js"></script>
        <script src="assets/js/tinymce.min.js"></script>
        <script src="assets/js/validate.js"></script>
        <script src="assets/js/main.js"></script> 

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


        <script>
       

   

        </script>
             
   </body>
</html>