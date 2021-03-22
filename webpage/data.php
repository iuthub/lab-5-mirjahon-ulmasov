<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>

<?php if($_REQUEST["name"] != "" && isset($_REQUEST["section"]) && $_REQUEST["card"] != "" && $_REQUEST["card_type"] != "") { ?>
    <h1> Thanks, sucker!</h1>
    <p>
    Your information has been recorded.
    </p>

    <hr />

    <dl>
        <dt>Name</dt>
        <dd>
            <?=$_REQUEST["name"]?>
        </dd>

        <dt>Section</dt>
        <dd>
            <?=$_REQUEST["section"]?>
        </dd>

        <dt>Credit Card</dt>
        <dd>
            <?=$_REQUEST["card"]?>
            (<?=$_REQUEST["card_type"]?>)
        </dd>
    </dl>
    <p>Here are all the suckers who have submitted here:</p>

    <?php
    $file = 'suckers.txt';
    // Open the file to get existing content
    $current = file_get_contents($file);
    // Append a new person to the file
    $current .=  $_REQUEST["name"].";". $_REQUEST["section"].";".$_REQUEST["card"].";".$_REQUEST["card_type"].";"."\n";
    // Write the contents back to the file
    file_put_contents($file, $current);
    ?>
    <pre>
        <?php
        if ($file = fopen("suckers.txt", "r")) {
        while(!feof($file)) {
            $line = fgets($file);
            print $line;
        }
        fclose($file);
    }
        ?>
    </pre>
<?php }  else {?>
    <h1> Sorry</h1>
    <p>
        You didn't fill out the form completely. <a href="index.php">Try Again?</a>
    </p>
<?php } ?>
</body>
</html>