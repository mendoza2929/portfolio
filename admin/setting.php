<?php 
require("alert.php");
require("db_config.php");
adminLogin();

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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
   <body>
       
      <?php 

      require("include/header.php");
      
      require("include/aside.php");
      
      ?>
      <main id="main" class="main">
         <div class="pagetitle">
            <h1>Setting</h1>
            <nav>
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                  <li class="breadcrumb-item active">Setting</li>
               </ol>
         </div>

      
         <div class="card border-0 shadow-sm ">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">General Settings</h5>
              <button type="button" class="btn btn-warning shadow-none btn-sm fw-bold " data-bs-toggle="modal" data-bs-target="#setting">
              <i class="bi bi-pencil-square"></i> Edit
          </button>
            </div>
            <h6 class="card-subtitle mb-1 fw-bold">Main Title</h6>
            <p class="card-text" id="site_title"></p>
            <h6 class="card-subtitle mb-1 fw-bold">Main Name</h6>
            <p class="card-text" id="site_name"></p>
            <h6 class="card-subtitle mb-1 fw-bold">About Me</h6>
            <p class="card-text" id="site_about"></p>
          </div>
          

    <!-- Setting Modal -->
    
        <div class="modal fade" id="setting" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <form id="general_s_form">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-pencil-square"></i> General Settings</h5>
              </div>
              <div class="modal-body">
                <div class="mb-3">
                  <label class="form-label fw-bold">Main Title</label>
                  <input type="text" name="site_title" id="site_title_input" class="form-control shadow-none" required>
                </div>
                <div class="mb-3">
                  <label class="form-label fw-bold">Main Name</label>
                  <input type="text" name="site_name" id="site_name_input" class="form-control shadow-none" required>
                </div>
                <div class="mb-3">
                  <label class="form-label fw-bold">About Me</label>
                <textarea name="site_about" id="site_about_input" class="form-control shadow-none" rows="5" required></textarea>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" onclick="site_title.value = general_data.site_title,site_name.value = general_data.site_name,site_about.value = general_data.site_about " class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                <button type="submit"  class="btn btn-success shadow-none">Save</button>
              </div>
            </form>
            </div>
          </div>
        </div>

        <div class="card border-0 shadow-sm ">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">Contact Us Settings</h5>
              <button type="button" class="btn btn-warning shadow-none btn-sm fw-bold " data-bs-toggle="modal" data-bs-target="#contact-settings">
              <i class="bi bi-pencil-square"></i> Edit
          </button>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="mb-4">
                <h6 class="card-subtitle mb-1 fw-bold"><i class="bi bi-geo-alt"></i> Address</h6>
                <p class="card-text" id="address"></p>
                </div>
                <div class="mb-4">
                </div>
                <div class="mb-4">
                <h6 class="card-subtitle mb-1 fw-bold"><i class="bi bi-telephone-inbound"></i> Contact</h6>
                <p class="card-text mb-1">
                  <span id="pn1"></span>
                </p>
                </div>
                <div class="mb-4">
                <h6 class="card-subtitle mb-1 fw-bold"><i class="bi bi-envelope"></i> Email</h6>
                <p class="card-text" id="email"></p>
                </div>
              </div>
              <div class="col-lg-6">
              <div class="mb-4">
                <h6 class="card-subtitle mb-1 fw-bold"><i class="bi bi-collection"></i> Social Media</h6>
                <p class="card-text mb-2">
                <i class="bi bi-facebook"></i>
                  <span id="fb"></span>
                </p>
                <p class="card-text mb-2">
                <i class="bi bi-instagram"></i>
                  <span id="insta"></span>
                </p>
                <p class="card-text mb-2">
                <i class="bi bi-twitter"></i>
                  <span id="tw"></span>
                </p>
                <p class="card-text mb-2">
                <i class="bi bi-discord"></i>
                  <span id="discord"></span>
                </p>
                </div>
              </div>
            </div>
          </div>



        <div class="modal fade" id="contact-settings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <form id="contacts_s_form">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title"><i class="bi bi-pencil-square"></i> Contacts Settings</h5>
              </div>
              <div class="modal-body">
                  <div class="container-fluid p-0">
                    <div class="row">
                        <div class="col-md-6">
                          <div class="mb-3">
                            <label class="form-label fw-bold">Address</label>
                            <div class="input-group mb-3">
                              <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                              <input type="text" name="address" id="address_input" class="form-control shadow-none" required>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label fw-bold">Contact Numbers:</label>
                            <div class="input-group mb-3">
                              <span class="input-group-text"><i class="bi bi-telephone-plus"></i></span>
                              <input type="number" name="pn1" id="pn1_input" class="form-control shadow-none" required>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label class="form-label fw-bold">Email</label>
                            <div class="input-group mb-3">
                              <span class="input-group-text"><i class="bi bi-map"></i></span>
                              <input type="email" name="email" id="email_input" class="form-control shadow-none" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="mb-3">
                              <label class="form-label fw-bold">Social Media</label>
                              <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                                <input type="text" name="fb" id="fb_input" class="form-control shadow-none">
                              </div>
                              <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                                <input type="text" name="insta" id="insta_input" class="form-control shadow-none" >
                              </div>
                              <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-twitter"></i></span>
                                <input type="text" name="tw" id="tw_input" class="form-control shadow-none">
                              </div>
                              <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-discord"></i></span>
                                <input type="text" name="discord" id="discord_input" class="form-control shadow-none">
                              </div>
                              <div class="mb-3">
                         
    
                            </div>
                            </div>
                          </div>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" onclick="contacts_input(contacts_data)" class="btn btn-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                <button type="submit"  class="btn btn-success shadow-none">Save</button>
              </div>
            </form>
            </div>
          </div>
        </div>
  
      </main>


      <footer id="footer" class="footer">
         <div class="copyright"> &copy; Copyright <strong><span>riyuuu dev</span></strong>. All Rights Reserved</div>
       
      </footer>
<script>
  let general_data, contacts_data;

  let general_s_form = document.getElementById('general_s_form');
  let site_title_input =document.getElementById('site_title_input');
  let site_name_input =document.getElementById('site_name_input');
  let site_about_input =document.getElementById('site_about_input');
  let contacts_s_form = document.getElementById('contacts_s_form');


 

  function get_general(){
    let site_title =document.getElementById('site_title');
    let site_name =document.getElementById('site_name');
    let site_about  =document.getElementById('site_about');


    let xhr = new XMLHttpRequest();
    xhr.open("POST","setting_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      general_data = JSON.parse(this.responseText);

      site_title.innerText = general_data.site_title;
      site_name.innerText = general_data.site_name;
      site_about.innerText = general_data.site_about;

      site_title_input.value = general_data.site_title;
      site_name_input.value = general_data.site_name;
      site_about_input.value = general_data.site_about;
     


    }

    xhr.send('get_general');
  }

  general_s_form.addEventListener('submit', function(e){
    e.preventDefault();
    upd_general(site_title_input.value,site_name_input.value,site_about_input.value);


  })

  function upd_general(site_title_val,site_name_val,site_about_val){
    let xhr = new XMLHttpRequest();
    xhr.open("POST","setting_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){
      var myModalEl = document.getElementById('setting')
      var modal = bootstrap.Modal.getInstance(myModalEl) // Returns a Bootstrap modal instanceof
      modal.hide();


      if(this.responseText== 1){
        Swal.fire(
  'Good job!',
  'Sucessfully Change',
  'success'
)

        get_general();
      }
      else{
        Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Nothing happen',
 
})
      }


     
    }

    xhr.send('site_title='+site_title_val+'&site_name='+site_name_val+'&site_about='+site_about_val+'&upd_general');
  }







  function get_contacts(){
    
    let contacts_p_id = ['address','pn1','email','fb','insta','tw','discord'];
    // let iframe = document.getElementById('iframe');

    let xhr = new XMLHttpRequest();
    xhr.open("POST","setting_crud.php",true);
    xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');

    xhr.onload = function(){

      contacts_data = JSON.parse(this.responseText);
      contacts_data = Object.values(contacts_data);
   
        for(i=0; i<contacts_p_id.length; i++){
          document.getElementById(contacts_p_id[i]).innerText = contacts_data[i+1];
        }

        contacts_input(contacts_data);
      

    }

    xhr.send('get_contacts');
  }

    function contacts_input(data){

        let contacts_input_id = ['address_input','pn1_input','email_input','fb_input','insta_input','tw_input','discord_input'];
         
        for(i=0;i<contacts_input_id.length;i++){
          document.getElementById(contacts_input_id[i]).value = data[i+1];
        }
      };

      contacts_s_form.addEventListener('submit',function(e){
        e.preventDefault();
        upd_contacts();
      });


      function upd_contacts(){
        let index =  ['address','pn1','email','fb','insta','tw','discord'];
        let contacts_input_id = ['address_input','pn1_input','email_input','fb_input','insta_input','tw_input','discord_input']
        
        let data_str= "";

        for(i=0;i<index.length;i++){
          data_str += index[i] + "="+document.getElementById(contacts_input_id[i]).value + '&';
        }

    
    
        data_str += "upd_contacts";

        let xhr = new XMLHttpRequest();
        xhr.open("POST","setting_crud.php",true);
        xhr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        

        xhr.onload = function(){
          var myModalEl = document.getElementById('contact-settings')
          var modal = bootstrap.Modal.getInstance(myModalEl) // Returns a Bootstrap modal instanceof
          modal.hide();

          if(this.responseText== 1){
                  Swal.fire(
        'Changes',
        'Successfully Change',
        'success'
      )
        
            get_contacts();
            }
            else{
              Swal.fire({
  icon: 'error',
  title: 'Oops...',
  text: 'Nothing happen',
 
})
            }
  
        }

        xhr.send(data_str);
      }

  window.onload = function(){
   get_general();
   get_contacts();
  }

  </script>
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

</body>
</html>