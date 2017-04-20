<?php 

function cleanInput($str) {
    return htmlspecialchars($str);
}

$name = cleanInput($_POST['name']);

$email = $_POST['email'];
$clean_email = filter_var($email, FILTER_SANITIZE_EMAIL);
$emailIsGood = $email === $clean_email && filter_var($email, FILTER_VALIDATE_EMAIL);

$phone = preg_replace('/[^0-9]/', '', $_POST['phone']);


$to = 'janaryndin@gmail.com, petra.seibertova';
$subject = 'Form from a potential client';

$designedfor = cleanInput($_POST['designedfor']);
$describefor = cleanInput($_POST['describefor']);
$describepersonality = cleanInput($_POST['describepersonality']);
$inspires = cleanInput($_POST['inspires']);
$typepiece = cleanInput($_POST['typepiece']);
$typemetal = cleanInput($_POST['typemetal']);
$describetastes = cleanInput($_POST['describetastes']);
$ringsize = cleanInput($_POST['ringsize']);
$wristsize = cleanInput($_POST['wristsize']);
$necksize = cleanInput($_POST['necksize']);
$budget = cleanInput($_POST['budget']);
$tradein = cleanInput($_POST['tradein']);
$referral = cleanInput($_POST['referral']);
//$picture = cleanInput($_POST['picture']);


if (!empty($name) && $emailIsGood && !empty($phone)) {

$message = <<<EMAIL

    $name
    $email
    $phone
    $designedfor
    $describefor
    $describepersonality
    $inspires
    $typepiece
    $typemetal
    $describetastes
    $ringsize
    $wristsize
    $necksize
    $budget
    $tradein
    $referral

EMAIL;

    mail($to, $subject, $message, $headers);
    echo true;
} else {
    echo false;
}

?>
