<?php
session_start();
if (!isset($_SESSION['full_name'])) {
    header("Location: signin.php");
}
$full_name = $_SESSION['full_name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="globals.css" />
    <link rel="stylesheet" href="style/verifiedCertificate.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js">
    </script>
</head>

<body>
    <div id="content">
        <main class="main">
            <section class="top">
                <div class="top-box">
                    <div>
                        <p class="v-c">Verified Certificate <br>
                            <span>of participation</span>
                        </p>
                    </div>
                    <div class="top-box-right">
                        <div class="logo">
                            <img class="logo" src="img/ilearnx-logo.png" alt="Company Logo" />
                        </div>
                        <div class="logo-des">
                            <p class="ilearn"><span class="i">i</span>Learn<span class="x">X</span></p>
                            <span class="summery">An expert learning<br> platform for all</span>

                        </div>
                    </div>
                </div>
            </section>

            <section class="middle">
                <div>
                    <p class="user-name"><?php echo $full_name; ?></p>
                    <p class="h_s_p">Has successfully Participated in</p>
                    <h1>Full Stack Development Track</h1>
                    <p><?php echo date("Y/m/d"); ?></p>
                </div>
            </section>
            <section class="bottom">
                <div class="bottom-box">
                    <div>
                        <img class="logo" src="img/Signature.png" alt="Company Logo" />
                        <p class="instructor-signature">Instructor Signature</p>
                    </div>
                    <div>
                        <img class="logo" src="img/Signature.png" alt="Company Logo" />
                        <p class="ceo-signature">CEO Signature</p>
                    </div>
                </div>
            </section>
        </main>
    </div>
    <script>const fullName = '<?php echo $full_name; ?>';</script>
    <script src="/View/js/verifiedCertificate.js"></script>
</body>

</html>