<?php

$data = $_POST;

$username = $data['username'] ?? null;
$email=$data['email']??null;
$password = $data['password'] ?? null;

$previousAccountList = file_get_contents(__DIR__ . '/account.json');
$previousAccountList = json_decode($previousAccountList, true);

if (!$username || !$email || !$password) {
    $flag=1;
    header("Location: index.php?flag=".$flag);
    exit(0);
}
foreach($previousAccountList['accounts']as $accountElement){
    if($accountElement['email']==$email){
        $flag1=1;
        header("Location: index.php?flag1=".$flag1);
        exit(0);
    }
}
// if(in_array($username,$previousAccountList['accounts' => ['username']])){
//     echo "username already exist";
//     exit(0);
// }
if (!$previousAccountList) {
    $previousAccountList = [
        'accounts' => []
    ];
}

$previousAccountList['accounts'][] = [
    'username' => $username,
    'email' => $email,
    'password' => $password
];

$previousAccountList = json_encode($previousAccountList);

file_put_contents(__DIR__ . '/account.json', $previousAccountList);

header('Location: view.php');
?>
