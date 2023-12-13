<?php 
session_start();
if (!isset($_SESSION['full_name'])) {
    header("Location: signin.php");
}
$full_name = $_SESSION['full_name'];

require 'D:\XAMPP\htdocs\iLearnX\dompdf\vendor\autoload.php';
use Dompdf\Dompdf;
use Dompdf\Options;

define("DOMPDF_ENABLE_REMOTE", false);

$options = new Options();
$options->set('chroot', realpath(''));
$dompdf = new Dompdf($options);

$html1 = '<html>
    <head>
        <style>
        @font-face {
            font-family: userFont;
            src: url(Font/Playball-Regular.ttf);
        }
        
            .p {
                position:absolute;
                top:45%;
                width: 100%;
                text-align: center;
                color: black;
                font-family: userFont;
                font-size: 80px;
                line-height: 0.5;
            }
        </style>
    </head>
    <body>
        <p class="p">' . $full_name . '</p>
    </body>
</html>';
$html2=file_get_contents('verifiedCertificate.php');
$combined_html = str_replace('</body>', $html1 . '</body>', $html2);
$dompdf->loadHtml($combined_html);
$dompdf->setPaper('A4','landscape');
$dompdf->render();
$dompdf->stream($full_name.'_Certificate.pdf', ['Attachment' => 0]);
?>