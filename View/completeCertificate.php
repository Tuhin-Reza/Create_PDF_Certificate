<?php
session_start();
if (!isset($_SESSION['full_name'])) {
  header("Location: signin.php");
}
$full_name = $_SESSION['full_name'];
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="globals.css" />
  <link rel="stylesheet" href="style/completeCertificate.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js">
  </script>
</head>

<body>
  <div id="content">
    <div class="container">
      <img src="img/cc_Img/rectangle4.png" alt="" class="top-left-image">
      <img src="img/cc_Img/rectangle8.png" alt="" class="top-left2-image">
      <img src="img/cc_Img/rectangle9.png" alt="" class="top-left3-image">
      <img src="img/cc_Img/rectangle7.png" alt="" class="bottom-right-image">
      <img src="img/cc_Img/rectangle13.png" alt="" class="bottom-right1-image">
      <img src="img/cc_Img/rectangle11.png" alt="" class="bottom-right2-image">
      <img src="img/cc_Img/rectangle14.png" alt="" class="top-right-top-corner">
      <img src="img/cc_Img/rectangle18.png" alt="" class="top-right-bottom-corner">
      <img src="img/cc_Img/rectangle19.png" alt="" class="top-left-top-corner">
      <img src="img/cc_Img/rectangle15.png" alt="" class="top-left-bottom-corner">
      <div class="box">
        <div>
          <p class="company-name">
            <span class="i">i</span>
            <span class="learn">Learn</span>
            <span class="x">X</span>
          </p>
        </div>
        <div class="certificate">
          <h1>CERTIFICATE OF ACHIEVEMENT</h1>
        </div>
        <div class="cert-info">
          <p>this certificate is proudly presented to</p>
        </div>
        <div class="user">
          <p><?php echo $full_name; ?></p>
        </div>
        <div class="comment">
          <p>For successfully completing the web development </p>
          <p>
            course from the
            <span class="l-s">
              <span class="i-2">i</span>
              <span class="learn-2">Learn</span>
              <span class="x-2">X</span>
            </span>
          </p>
        </div>
        <div class="footer">
          <div class="ft-left">
            <p class="ft-left-date">5/12/2023</p>
            <p class="ft-left-date-bottom">Date</p>
          </div>
          <div>
            <img src="img/cc_Img/ilearnx-logo.png" alt="" class="ft-logo">
          </div>
          <div class="ft-right">
            <div>
              <img src="img/cc_Img/signature.png" alt="" class="ft-right-img">
            </div>
            <p class="ft-right-date-bottom">Signature</p>
          </div>
        </div>

      </div>
    </div>
  </div>
  <script>
    const fullName = '<?php echo $full_name; ?>';
  </script>
  <script src="/View/js/verifiedCertificate.js"></script>

</body>
</htm