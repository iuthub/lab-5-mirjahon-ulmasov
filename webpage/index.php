<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Buy Your Way to a Better Education!</title>
    <link href="buyagrade.css" type="text/css" rel="stylesheet" />
</head>

<body>
<h1>Buy Your Way to a Better Education!</h1>

<p>
    The rough economy, along with recent changes in University of Washington policy, now allow us to offer grades for money.  That's right!  All you need to get a 4.0 in this course is cold, hard, cash.
</p>

<hr />

<h2>Give Us Your Money</h2>
<form action="data.php" method="POST">
    <dl>
        <dt>Name</dt>
        <dd>
                <input type="text" name="name" value="Enter Your Name"/>
        </dd>

        <dt>Section</dt>
        <dd>
            <label>
                <select name="section">
                    <option>MA</option>
                    <option>MH</option>
                </select>
            </label>
        </dd>

        <dt>Credit Card</dt>
        <dd>
            <label>
                <input type="text" name="card" value="Card Number"/>
            </label>
            <label>
                <input type="radio" name="card_type" value="visa"/> Visa
                <input type="radio" name="card_type" value="mastercard"/> Master Card
            </label>
        </dd>
    </dl>

    <div>
        <input type="submit" value="I am a giant sucker"/>
    </div>
</form>

</body>
</html>