<?php

/**
 * mailer-config.php
 * This file contains your reCAPTCHA keys, and your recipients email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * This file has been gitignored!
 **/

// your Google reCAPTCHA added keys here
$siteKey = '6Lftrw0UAAAAAJMEE3A0yzZF_6GENXFPUiJwA6Pl';
$secret = '6Lftrw0UAAAAAFpDO143eCzvKQ5XzsV1hyvb8-uS';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["mrosado2@cnm.edu" => "Maria Rosado"];