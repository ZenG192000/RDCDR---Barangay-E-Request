<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.gmail.com';
$config['smtp_port'] = 587;
$config['smtp_user'] = 'rdcdr.gov@gmail.com';
$config['smtp_pass'] = 'yfbygqpcnbbhlzii';
$config['smtp_crypto'] = 'tls';
$config['mailtype'] = 'html';
$config['charset'] = 'utf-8';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n";

$config['oauth2_clientId'] = '337535270848-rhea5ea14g96erun3ssvgt7e0btap349.apps.googleusercontent.com'; // Replace with your client ID
$config['oauth2_clientSecret'] = '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'; // Replace with your client secret
$config['oauth2_refreshToken'] = '1//04ih2xBaAtDMoCgYIARAAGAQSNwF-L9IrILkzx9qRk6fF8VsG2xZ8m5RVcRblHoKNkOR8aq6PoxrOLOIqhx30Fz-4vc65Gr0Chj8'; // This needs to be obtained through the OAuth 2.0 process

// Path to the credentials.json file you downloaded earlier
$config['oauth2_credentialsFile'] = APPPATH . base_url('third_party/client_secret.json');
