<?php 
    if(isset($_POST['submit'])) { 
        $fname = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $query = $_POST['message'];
        
        $to			= "rupak@gmail.com ";
        $subject	= "Rupak Profle Contact Us Query Details";
        $headers = "From: noreply@rupakweb.github.io" . "\r\n"
        // $headers	= "From: rupak@gmail.com\r \n";
        // $headers	.= "MIME-Version: 1.0\r\n";
        // $headers	.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        $message = '<html><body>';
        
        if(!empty($name) && !empty($email) && !empty($phone) && !empty($query)) {
            $message .= 'Hi Rupak,  <br><br>Rupak Contact Us Query Details<br><br>';
            $message .= '<table width="100%" cellspacing="1" cellpadding="5" bgcolor="#CCCCCC">';
            $message .= "<tr><td bgcolor='#FFFFFF'><strong>Name:</strong> </td><td bgcolor='#FFFFFF'>$name</td></tr>";
            $message .= "<tr><td bgcolor='#FFFFFF'><strong>Email:</strong> </td><td bgcolor='#FFFFFF'>$email</td></tr>";
            $message .= "<tr><td bgcolor='#FFFFFF'><strong>Email:</strong> </td><td bgcolor='#FFFFFF'>$phone</td></tr>";
            $message .= "<tr><td bgcolor='#FFFFFF'><strong>Message:</strong> </td><td bgcolor='#FFFFFF'>$query</td></tr>"; 
            $message .= "</table><br><br>";
            $message .= "</body></html>";
            
            if(mail($to,$subject,$message,$headers)) {
                header('Location: https://rupakweb.github.io/profile/thankyou.html');
            } else {
                $error = "There was error sending the mail.";
                header("Location: https://rupakweb.github.io/profile/index.html?error=$error");
                exit;
            }
        } else {
            $error	= "All the fields are required.";
            header("Location: https://rupakweb.github.io/profile/index.html?error=$error");
            exit;
        }
    } 
?>