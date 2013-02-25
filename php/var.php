<?php

$name = htmlspecialchars($_POST['name']);
$case = htmlspecialchars($_POST['case']);
$account = htmlspecialchars($_POST['account']);
$date = htmlspecialchars($_POST['date']);
$advisor = htmlspecialchars($_POST['advisor']);
$rdone = htmlspecialchars($_POST['rdone']);
$tdone = htmlspecialchars($_POST['tdone']);
$notes = htmlspecialchars($_POST['note']);


if(!empty($_POST['email']))
{
$email = htmlspecialchars($_POST['email']);//checkbox value, not important
$person = htmlspecialchars($_POST['person']);//person email is from
$sendTo =htmlspecialchars($_POST['sendTo']);//person who you send the message to
$message = htmlspecialchars($_POST['message']);
}
?>