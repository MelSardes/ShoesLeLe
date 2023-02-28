<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\Exception;
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class PHPMailerController extends Controller
{
    // =============== [ Email ] ===================
    public function email()
    {
        return view("email");
    }


    // ========== [ Compose Email ] ================
    public function composeEmail(Request $request, string $objet, string $corps)
    {
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {

            // Email server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'loickmakosso@gmail.com';   //  sender username
            $mail->Password = 'qqdfxmgezrvqahlk';       // sender password
            $mail->SMTPSecure =  PHPMailer::ENCRYPTION_SMTPS;                  // encryption - ssl/tls
            $mail->Port = 465;                          // port - 587/465

            $mail->setFrom('loickmakosso@gmail.com', 'Shoes LeLe');
            $mail->addAddress($request->mail);
            // $mail->addCC($request->emailCc);
            // $mail->addBCC($request->emailBcc);

            $mail->addReplyTo('info.loickmakosso@gmail.com', 'Sardes');

            // if (isset($_FILES['emailAttachments'])) {
            //     for ($i = 0; $i < count($_FILES['emailAttachments']['tmp_name']); $i++) {
            //         $mail->addAttachment($_FILES['emailAttachments']['tmp_name'][$i], $_FILES['emailAttachments']['name'][$i]);
            //     }
            // }


            $mail->isHTML(true);                // Set email content format to HTML

            $mail->Subject = $objet;
            $mail->Body    = $corps;

            // $mail->AltBody = plain text version of email body;

            if (!$mail->send()) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            } else {
                return back()->with("success", "Email has been sent.");
            }
        } catch (Exception $e) {
            return back()->with('error', 'Message could not be sent.');
        }
    }
}
