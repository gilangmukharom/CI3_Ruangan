<!DOCTYPE html>
<html>

<head>
    <title>Form login</title>
    <style type="text/css">
    body {
        background-image: url("2.jpg");
        background-size: cover;
        background-color: #cccccc;
        font-family: "Segoe UI";
    }

    #wrapper {
        background-color: rgba(255, 255, 255, 0.8);
        width: 400px;
        height: 320px;
        margin-top: 90px;
        margin-left: auto;
        margin-right: auto;
        padding: 20px;
        border-radius: 30px;
    }

    input[type=text],
    input[type=password] {
        border: 1px solid #ddd;
        padding: 10px;
        width: 95%;
        border-radius: 9px;
        outline: none;
        margin-top: 10px;
        margin-bottom: 20px;
    }

    label,
    h1 {
        text-transform: uppercase;
        font-weight: bold;
    }

    h1 {
        text-align: center;
        font-size: 30px;
        color: #3da87b;
    }

    button {
        border-radius: 10px;
        padding: 10px;
        width: 120px;
        background-color: #63e6af;
        border: none;
        color: #fff;
        font-weight: bold;
    }

    .error {
        background-color: #f72a68;
        width: 400px;
        height: auto;
        margin-top: 20px;
        margin-left: auto;
        margin-right: auto;
        padding: 20px;
        border-radius: 4px;
        color: #fff;

    }
    </style>
</head>

<body>
    <div id="wrapper">
        <h1>Login</h1>
        <?php
        if (!empty($notif)) {
            echo '<div class="alert alert-danger">';
            echo $notif;
            echo '</div>';
        }
        ?>

        <?php echo form_open('index.php/login/aksi'); ?>
        <label>Email</label><br />
        <input type="text" name="email"><br />
        <label>Password</label><br />
        <input type="password" name="password"><br />
        <button type="submit" name="login">LOGIN</button>
        <button type="button" name="registrasi">Registrasi</button>
        </form>
    </div>
</body>

</html>