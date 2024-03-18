<?php
// header('Content-Type: application/json');

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Replace with your email
//     $to_email = "adugyamfik33@gmail.com";

//     // Get form data
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $message = $_POST["message"];
//     $phone = ($_POST['phone-number']) ? $_POST['phone-number'] : 'N/A';

//     // Subject
//     $subject = ($_POST['subject']) ? $_POST['subject'] : "New Contact Form Submission";
//     $subject_to_client = 'Thank You for contacting TrabeauDevelops';
//     // Email body
//     $logo_src = 'https://raw.githubusercontent.com/adugyamfik33/TrabeauDevelops/main/images/trabeaudevelops.png';
//     $body_from_client = '
//         <html>
//         <head>
//             <title>'.$subject.'</title>
//             <style>
//                 body {
//                     background-color: #1e1e1e;
//                     color: #ffffff;
//                     font-family: Arial, sans-serif;
//                     margin: 0;
//                     padding: 0;
//                 }
//                 .container {
//                     max-width: 600px;
//                     margin: 0 auto;
//                     padding: 20px;
//                 }
//                 img {
//                     max-width: 100%;
//                     height: auto;
//                     display: block;
//                     margin-bottom: 20px;
//                 }
//                 h1, p {
//                     margin-bottom: 10px;
//                 }
//                 p {
//                     line-height: 1.5;
//                 }
//             </style>
//         </head>
//         <body>
//             <div class="container">
//                 <img src="' . $logo_src . '" alt="Your Logo">
//                 <h1>Welcome to TrabeauDevelops Newsletter!</h1>
//                 <p>Dear TrabeauDevelops,</p>
//                 <p>'.$message.'</p>
//                 <p>Best regards,<br> '.$name.'</p>
//                 <p>Phone Number: '.$phone.'</p>
//             </div>
//         </body>
//         </html>
//     ';
//     $body = '
//     <html>
//     <head>
//         <title>Your Email Subject</title>
//         <style>
//             body {
//                 background-color: #1e1e1e;
//                 color: #ffffff;
//                 font-family: Arial, sans-serif;
//                 margin: 0;
//                 padding: 0;
//             }
//             .container {
//                 max-width: 600px;
//                 margin: 0 auto;
//                 padding: 20px;
//             }
//             img {
//                 max-width: 100%;
//                 height: auto;
//                 display: block;
//                 margin-bottom: 20px;
//             }
//             h1, p {
//                 margin-bottom: 10px;
//             }
//             p {
//                 line-height: 1.5;
//             }
//         </style>
//     </head>
//     <body>
//         <div class="container">
//             <img src="' . $logo_src . '" alt="Your Logo">
//             <h1>Welcome to TrabeauDevelops\' Newsletter!</h1>
//             <p>Dear ' . $name . ',</p>
//             <p>Thank you for your interest in hiring me. Your email has been received, and I will get back to you as soon as possible.</p>
//             <p>Best regards,<br> TrabeauDevelops</p>
//         </div>
//     </body>
//     </html>
// ';

//     // Email headers
//     $headers = "MIME-Version: 1.0" . "\r\n";
//     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//     $headers .= "From: $email" . "\r\n";

//     $headers_to_client = "MIME-Version: 1.0" . "\r\n";
//     $headers_to_client .= "Content-type:text/html;charset=UTF-8" . "\r\n";
//     $headers_to_client .= "From: trabeaudevelops@gmail.com" . "\r\n";

//     // Send email to yourself
//     if (mail($to_email, $subject, $body_from_client, $headers)) {
//         mail($email,$subject_to_client,$body,$headers_to_client);
//         // Success response
//         $response = array(
//             "code" => 200,
//             "message" => "Your message has been sent successfully!"
//         );
//     } else {
//         // Error response
//         $response = array(
//             "code" => 400,
//             "message" => "Oops! Something went wrong. Please try again later."
//         );
//     }

//     // Output JSON response
//     echo json_encode($response);
// }

