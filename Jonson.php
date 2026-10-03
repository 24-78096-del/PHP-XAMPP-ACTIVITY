<?php
// PHP variable declaration ($)
$username = "BSIT BA 3104";
$user_id = 1596819; // Nilagyan ng semicolon (;)
$age = 20;
$sex = "Male";
$email = "albertjonson543@gmail.com"; // Nilagyan ng semicolon (;)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Demo</title>
</head>
<body>
    <h1>
        <label>Username:</label>  
        <?php echo $username; ?>
        <br>
        <label>User ID:</label>
        <?php echo $user_id; ?> <!-- Inayos mula $userid patungong $user_id -->
        <br>
        <label>Age:</label> <!-- Tinanggal ang '!' sa <label!> -->
        <?php echo $age; ?>
        <br>
        <label>Sex:</label> <!-- Tinanggal ang '!' at inayos ang label -->
        <?php echo $sex; ?> <!-- Inayos mula $Male patungong $sex -->
        <br>
        <label>Email:</label>
        <?php echo $email; ?>
        <br>
    </h1>
  
    <button type="button" onclick="greetUser()">Greet User</button>

    <script>
        // Inayos ang 'Let' patungong lowercase 'let'
        let username = "<?php echo $username; ?>";
        let userId = "<?php echo $user_id; ?>"; // Tinanggal ang sobrang 'id'

        function greetUser() {
            alert("Hello " + username + "!");
        }
    </script> <!-- Idinagdag ang kulang na </script> tag -->
</body>
</html>