<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_port'] = 587;
$config['smtp_user'] = 'rdcdr.gov@gmail.com';
$config['smtp_pass'] = 'put-pass-of-smtp';
$config['smtp_crypto'] = 'tls';
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n";

$config['oauth2_clientId'] = 'put-client-id'; // Replace with your client ID
$config['oauth2_clientSecret'] = 'put-client-secret'; // Replace with your client secret
$config['oauth2_refreshToken'] = 'put=refresh-token'; // This needs to be obtained through the OAuth 2.0 process

// Path to the credentials.json file you downloaded earlier
$config['oauth2_credentialsFile'] = APPPATH . base_url('third_party/client_secret.json');
