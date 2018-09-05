<?php
    require 'vendor/autoload.php';
    //$to = "andy.cao@creativelab.vn";
    if ($_POST) {

        $to = new SendGrid\Email("Customer", "andy.cao@creativelab.vn");
        
        $from = new SendGrid\Email("Info", $_POST['email']);
        $name = $_POST['full-name'];
        
        $subject = "You have a message sent from your site";

        $fields = array();
        // $fields["first"] = 'Name';
        $fields["company"] = 'Company';
        $fields["email"] = "Email";
        $fields["phone"] = 'Phone';
        $fields["message"] = "Message";

        $body = "Here is what was sent:<br/>";
        $body .= sprintf("%20s: %s<br/>",'Name', $name);
        foreach($fields as $a => $b){
            if (isset($_POST[$a]))
                $body .= sprintf("%20s: %s<br/>",$b,$_POST[$a]);
        }

        $content = new SendGrid\Content("text/html", $body);
        #$send = mail($to, $subject, $body, $headers);
        $mail = new SendGrid\Mail($from, $subject, $to, $content);

        $apiKey = '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';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo 'Success';
        exit;
    }

?>