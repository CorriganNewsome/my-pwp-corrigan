<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param string $mailgunDomain your mailgun private api key.
 * @param string $mailgunApiKey your mailgun domain relay.
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//mailgun API Key authorization

$mailgunApiKey = "638d073d6c0a83dd12b1d25fd38339ee-f135b0f1-1de7e4db";
$mailgunDomain = " --MAILGUN DOMAIN NAME --";


// your Google reCAPTCHA keys here
// your Google reCAPTCHA keys here
$siteKey = '6LeABOwUAAAAAMkH2NNS4bZbNZ0VWNLeIYr1n28D';
$secret = '6LeABOwUAAAAAL_euPQF8E0t8zEdncdiGIVF45zi';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = [ "corrigannewsome@gmail.com" => "Corrigan Newsome"];
$MAIL_RECIPIENT = ["corrigannewsome@gmail.com"];