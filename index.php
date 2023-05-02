
<?php 

require("./admin/alert.php");
require("./admin/db_config.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mendoza Portfolio</title>
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" />
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>


<!--scroll to to button-->

<div class="scrollToTop-btn flex-center">
  <i class="fas fa-arrow-up"></i>
</div>

<div class="theme-btn flex-center">
  <i class="fas fa-moon"></i>
  <i class="fas fa-sun"></i>
</div>


<?php 

session_start();
date_default_timezone_set("Asia/Manila");

$home_q = "SELECT * FROM `setting` WHERE `sr_no`=?";
$values = [5];
$home_r = mysqli_fetch_assoc(select($home_q, $values,'i'));

?>



  <!--header--->

  <header>
    <div class="nav-bar">
      <a href="#" class="logo"><?php echo $home_r['site_name']?></a>
      <div class="navigation">
        <div class="nav-items">
          <div class="nav-close-btn"></div>
          <a href="#home">Home</a>
          <a href="#portfolio">Portfolio</a>
          <a href="#contact">Contact</a>
        </div>
      </div>
      <div class="nav-menu-btn"></div>
    </div>
  </header>

  

  <!---Home Section -->

  <section class="home flex-center" id="home">
    <div class="home-container">
      <div class="media-icons">
      <div class="main">
  <div class="up">
    <button class="card1">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0,0,256,256" width="30px" height="30px" fill-rule="nonzero" class="instagram"><g fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(8,8)"><path d="M11.46875,5c-3.55078,0 -6.46875,2.91406 -6.46875,6.46875v9.0625c0,3.55078 2.91406,6.46875 6.46875,6.46875h9.0625c3.55078,0 6.46875,-2.91406 6.46875,-6.46875v-9.0625c0,-3.55078 -2.91406,-6.46875 -6.46875,-6.46875zM11.46875,7h9.0625c2.47266,0 4.46875,1.99609 4.46875,4.46875v9.0625c0,2.47266 -1.99609,4.46875 -4.46875,4.46875h-9.0625c-2.47266,0 -4.46875,-1.99609 -4.46875,-4.46875v-9.0625c0,-2.47266 1.99609,-4.46875 4.46875,-4.46875zM21.90625,9.1875c-0.50391,0 -0.90625,0.40234 -0.90625,0.90625c0,0.50391 0.40234,0.90625 0.90625,0.90625c0.50391,0 0.90625,-0.40234 0.90625,-0.90625c0,-0.50391 -0.40234,-0.90625 -0.90625,-0.90625zM16,10c-3.30078,0 -6,2.69922 -6,6c0,3.30078 2.69922,6 6,6c3.30078,0 6,-2.69922 6,-6c0,-3.30078 -2.69922,-6 -6,-6zM16,12c2.22266,0 4,1.77734 4,4c0,2.22266 -1.77734,4 -4,4c-2.22266,0 -4,-1.77734 -4,-4c0,-2.22266 1.77734,-4 4,-4z"></path></g></g></svg>
    </button>
    <button class="card2">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="30px" height="30px" class="twitter"><path d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"></path></svg>
    </button>
  </div>
  <div class="down">
    <button class="card3">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" width="30px" height="30px" class="github">    <path d="M15,3C8.373,3,3,8.373,3,15c0,5.623,3.872,10.328,9.092,11.63C12.036,26.468,12,26.28,12,26.047v-2.051 c-0.487,0-1.303,0-1.508,0c-0.821,0-1.551-0.353-1.905-1.009c-0.393-0.729-0.461-1.844-1.435-2.526 c-0.289-0.227-0.069-0.486,0.264-0.451c0.615,0.174,1.125,0.596,1.605,1.222c0.478,0.627,0.703,0.769,1.596,0.769 c0.433,0,1.081-0.025,1.691-0.121c0.328-0.833,0.895-1.6,1.588-1.962c-3.996-0.411-5.903-2.399-5.903-5.098 c0-1.162,0.495-2.286,1.336-3.233C9.053,10.647,8.706,8.73,9.435,8c1.798,0,2.885,1.166,3.146,1.481C13.477,9.174,14.461,9,15.495,9 c1.036,0,2.024,0.174,2.922,0.483C18.675,9.17,19.763,8,21.565,8c0.732,0.731,0.381,2.656,0.102,3.594 c0.836,0.945,1.328,2.066,1.328,3.226c0,2.697-1.904,4.684-5.894,5.097C18.199,20.49,19,22.1,19,23.313v2.734 c0,0.104-0.023,0.179-0.035,0.268C23.641,24.676,27,20.236,27,15C27,8.373,21.627,3,15,3z"></path></svg>
    </button>
    <button class="card4">
      <svg height="30px" width="30px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg" class="discord"><path d="M40,12c0,0-4.585-3.588-10-4l-0.488,0.976C34.408,10.174,36.654,11.891,39,14c-4.045-2.065-8.039-4-15-4s-10.955,1.935-15,4c2.346-2.109,5.018-4.015,9.488-5.024L18,8c-5.681,0.537-10,4-10,4s-5.121,7.425-6,22c5.162,5.953,13,6,13,6l1.639-2.185C13.857,36.848,10.715,35.121,8,32c3.238,2.45,8.125,5,16,5s12.762-2.55,16-5c-2.715,3.121-5.857,4.848-8.639,5.815L33,40c0,0,7.838-0.047,13-6C45.121,19.425,40,12,40,12z M17.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C21,28.209,19.433,30,17.5,30z M30.5,30c-1.933,0-3.5-1.791-3.5-4c0-2.209,1.567-4,3.5-4s3.5,1.791,3.5,4C34,28.209,32.433,30,30.5,30z"></path></svg>
    </button>
  </div>
</div>
      </div>
      <div class="info">
        <h2>Hi, I am <?php echo $home_r['site_name']?></h2>
        <h3><?php echo $home_r['site_title']?></h3>
        <p>
        <?php echo $home_r['site_about']?>.
        </p>
       

    <a href="./img/CV.pdf" class="buttonDownload">Download CV <i class="fas fa-download"></i></a>

        <!--<a href="" class="btn">Contact Me <i class="fas fa-arrow-circle-right"></i></a>-->
      </div>
      <div class="home-img">
        <img src="img/riyuuu.jpg" alt="">
      </div>
    </div>
    <a href="#about" class="scroll-down">Scroll down <i class="fas fa-arrow-down"></i></a>
  </section>





  <section class="portfolio section" id="portfolio">
    <div class="container flex-center">
      <h1 class="section-title-01">Portfolio</h1>
      <h1 class="section-title-02">Portfolio</h1>
      <div class="content">
        <div class="portfolio-list">
          <?php 
          
          $about_r = selectAll('portfolio_add');

            while($row = mysqli_fetch_assoc($about_r)){
              echo<<<data

                  <div class="img-card-container">
                  <div class="img-card">
                    <div class="overlay"></div>
                    <div class="info">
                      <h3>$row[name]</h3>
                      
                    </div>
                      <img src="img/project/$row[picture]" alt="">
                  </div>
                  <div class="portfolio-model flex-center">
                    <div class="portfolio-model-body">
                      <i class="fas fa-times portfolio-close-btn"></i>
                      <h3>$row[name]</h3>
                      <img src="img/project/$row[picture]" alt="">
                      <p>$row[about]</p>
                      <p><a href="$row[github]">View Github</a></p>
                    </div>
                  </div>
                </div>

              data;
            }
          
          
          ?>
    
          
        </div>
      </div>
    </div>

    </section>


    <?php 
    
    
$contact_q = "SELECT * FROM `contact_details` WHERE `sr_no`=?";
$values = [2];
$contact_r = mysqli_fetch_assoc(select($contact_q, $values,'i'));




?>



    
    


    <section class="contact section" id="contact">
      <div class="container flex-center">
        <div class="section-title-01">Contact Me</div>
        <div class="section-title-02">Contact Me</div>
        <div class="content">
          <div class="contact-left">
            <h2>Let's discuss your project</h2>
            <ul>
              <li class="contact-list">
                <h3 class="item-title"><i class="fas fa-phone"></i> Phone</h3>
                <span><?php echo $contact_r['pn1']?></span>
              </li>
              <li class="contact-list">
                <h3 class="item-title"><i class="fas fa-envelope"></i> Email</h3>
                <span><a href="mailto:reuelmendoza29@gmail.com"><?php echo $contact_r['email']?></a></span>
              </li>
              <li class="contact-list">
                <h3 class="item-title"><i class="fas fa-map-market-alt"></i> Address</h3>
                <span><?php echo $contact_r['address']?></span>
              </li>
            </ul>
          </div>
          <div class="contact-right">
            <p>I'm always open to discussing web development<br> <span>work or partnerships.</span></p>

            <form class="contact-form" method="POST">
              <div class="first-row">
                <input type="text" placeholder="Name" name="name" id="name">
                <input type="email" placeholder="Email" name="email" id="email">
              </div>

              <div class="third-row">
                <textarea name="message" id="message" rows="7" placeholder="message"></textarea>
              </div>
              <button class="btn" type="submit" name="send">Send Message <i class="fas fa-paper-plane"></i></button>
            </form>
          </div>
        </div>
      </div>
    </section>

    
    <?php 
      
      if(isset($_POST['send'])){
        $frm_data = filteration($_POST);

        $q = "INSERT INTO `contact`(`name`, `email`, `message`) VALUES (?,?,?)";
        $values=[$frm_data['name'],$frm_data['email'],$frm_data['message']];

        $res = insert($q,$values,'sss');
        if($res==1){
          echo '<script type="text/javascript">';
          echo 'swal("Send Successfully!", "I appreciate your contact and will get back to you as soon as I can.", "success");';
          echo '</script>';
        }
        else{
          echo '<script type="text/javascript">';
          echo 'swal("Error!", "Try sending your inquiry again.", "error");';
          echo '</script>';
        }
        
      }
       
      
      ?>


  <footer>
    <div class="footer-container">
      <div class="about group">
          <h2><?php echo $home_r['site_name']?></h2>
          <p><?php echo $home_r['site_title']?></p>
          <a href="#about">About Me</a>
      </div>
      <div class="hr"></div>
      <div class="info group">
        <h3>More</h3>
        <ul>
          <li><a href="#skills">Skills</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
      <div class="hr"></div>
      <div class="follow group">
      <h3>Follow</h3>
      <ul>
        <li><a href="<?php echo $contact_r['fb']?>"><i class="fab fa-facebook-f"></i></a></li>
        <li><a href="<?php echo $contact_r['insta']?>"><i class="fab fa-instagram"></i></a></li>
        <li><a href="<?php echo $contact_r['tw']?>"><i class="fab fa-twitter"></i></a></li>
        <li><a href="<?php echo $contact_r['discord']?>"><i class="fab fa-discord"></i></a></li>
      </ul>
      </div>
    </div>
    <div class="footer-copyright">
      <p>2023 by riyuuu dev. All right reserved.</p>
    </div>
  </footer>







  <script src="js/mains.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>