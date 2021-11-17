<?php
$accountList = file_get_contents(__DIR__ . '/account.json');
$accountList = json_decode($accountList, true);
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" media="all" href="index.css" />
</head>
    <body>
        <form action="index.php">
            <input type="submit" value="Add New" />
        </form>
        <?php if($accountList && count($accountList['accounts']) > 0): ?>
            <table class="acc_table">
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
                <?php foreach($accountList['accounts'] as $account): ?>
                    <tr>
                        <td><?php echo $account['username'] ?></td>
                        <td><?php echo $account['email']?></td>
                        <td><?php echo $account['password'] ?></td>
                    </tr>
                <?php endforeach;?>
            </table>
        <?php else: ?>
            <h1>No accounts found</h1>    
        <?php endif; ?>
    </body>
</html>