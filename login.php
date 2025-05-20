<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victorias-Haven Login</title>
    <!-- General -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/effect-manipulation.css">

    <!-- login-manipulation -->
    <link rel="stylesheet" href="css/login/section-1.css">
</head>
<body>
    <?php
        include("db/connectdb.php");
    ?>
    <form action="jquery/create-new-data.php" method="post">
    <table>
        <tr>
            <td>
                How do you know us
                <td><input type="text" name="person-who-recommend" placeholder="Enter who recommend us / what social media flatform" required></td>                
            </td>
        </tr>
        <tr>
            <td>
                <td>Note: If you know us via social enter the social media. But if you know us via recommendation type the name of person</td>
            </td>
        </tr>
        <tr>
            <td>
                Contact
                <td><input type="text" name="gcash" placeholder="If you know us via recommendation enter the phone number of that person"></td>
            </td>
        </tr>
        <tr>
            <td>
                Full Name
                <td><input type="text" name="fullname" placeholder="Enter Name" required></td>
            </td>
        </tr>
        <tr>
            <td>
                Phone Number
                <td><input type="text" name="phone-number" placeholder="Enter Phone Number" required></td>
            </td>
        </tr>
        <tr>
            <td>
                Location
                <td><input type="text" name="location" placeholder="Enter Location" required></td>
            </td>
        </tr>
        <tr>
            <td>
                Schedule
                <td><input type="date" name="date" id="date" required="required"> <input type="time" name="time" id="time" required="required"></td>
            </td>
        </tr>
        <tr>
            <td>
                Sex
                <td><input type="radio" value="Mr" name="sex" required="required"> Male <input type="radio" value="Mrs" name="sex">Female</td>
            </td>
        </tr>        
        <tr>
            <td>                
                <td><input type="radio" name="accepted-terms-and-conditions" value="Understood" required="required">Have read and understand the terms and conditions                    
                </td>
            </td>
        </tr>
            <td>
                <td><a href="jquery/create-new-data.php"><input type="submit" name="submit"></a> <a href="index.html" type="button">Homepage</a>                    
                </td>
            </td>
        </tr>
    </table>
    </form>
    <!-- import js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js" integrity="sha512-NiWqa2rceHnN3Z5j6mSAvbwwg3tiwVNxiAQaaSMSXnRRDh5C2mk/+sKQRw8qjV1vN4nf8iK2a0b048PnHbyx+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>