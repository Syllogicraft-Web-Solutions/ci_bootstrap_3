<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
| EMAIL CONFING
| -------------------------------------------------------------------
| Configuration of outgoing mail server.
| */

$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.mandrillapp.com';
$config['smtp_port'] = '587';
$config['smtp_timeout'] = '30';
$config['smtp_user'] = 'username';
$config['smtp_pass'] = 'password';
$config['charset'] = 'utf-8';
$config['mailtype'] = 'html';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n";

// custom values from CI Bootstrap
$config['from_email'] = "noreply@email.com";
$config['from_name'] = "CI Bootstrap";
$config['subject_prefix'] = "[CI Bootstrap] ";
