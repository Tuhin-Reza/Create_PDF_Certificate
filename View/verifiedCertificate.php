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
</head>

<body>
    <main class="main">
        <section class="top">
            <div class="top-column">
                <div>
                    <p class="v-c">Verified Certificate <br>
                        <span>of participation</span>
                    </p>
                </div>
            </div>
            <div class="top-column">
                <div class="space"></div>
            </div>
            <div class="top-column">
                <div class="top-column-right">
                    <div class="logo">
                        <img class="logo" src="img/ilearnx-logo.png" alt="Company Logo" />
                    </div>
                </div>
                <div class="top-column-right">
                    <div class="logo-des">
                        <p class="ilearn"><span class="i">i</span>Learn<span class="x">X</span></p>
                        <span class="summery">An expert learning<br> platform for all</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="middle">
            <div>
                <p class="h_s_p">Has successfully Participated in</p>
                <h1>CV/Resume Basic Tricks</h1>
                <p class="date">5/12/2023</p>
            </div>
        </section>

        <section class="bottom">
            <div class="bottom-coloum">
                <div>
                    <img class="logo" src="img/Signature.png" alt="Company Logo" />
                    <p class="instructor-signature">Instructor Signature</p>
                </div>
            </div>
            <div class="bottom-coloum">
                <div class="space-bottom"></div>
            </div>
            <div class="bottom-coloum">
                <div>
                    <img class="logo" src="img/Signature.png" alt="Company Logo" />
                    <p class="ceo-signature">CEO Signature</p>
                </div>
            </div>
        </section>
    </main>
</body>

</html>