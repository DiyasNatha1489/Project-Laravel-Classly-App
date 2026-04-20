<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Classly</title>
    <style>
        .form {
            width: 50%;
            height: 80vh;
            position: fixed;
            left: 10%;
            top: 0;
            bottom: 0;
            margin: 10vh 0;
            background-color: #375c78;
        }

        .alternatif-option {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
        }

        .alternatif-option img {
            width: 50px;
            height: 50px;
            /* border-radius: 50%; */
        }

        .background {
            width: 20%;
            height: 90vh;
            position: fixed;
            right: 10%;
            bottom: 0;
            background-color: #375c78;
            border-radius: 200px 200px 0 0;
        }

        .background img {
            width: 180px;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 100px auto;
        }
    </style>
</head>
<body>
    <div class="form">
        <h2>Please Log In Here</h2>
        <form action="" method="POST">
            <table>
                <tr>  
                    <td>Username</td>
                    <td><input type="text" name="fusername"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="fpassword" id=""></td>
                </tr>
                <tr>
                    <td><input type="submit" name="flogin" value="Log In"></td>
                </tr>
            </table>
        </form>
        <p>-or-</p>
        <div class="alternatif-option">
            <img src="{{ asset('images/attendance.png') }}" alt="">
            <img src="{{ asset('images/attendance.png') }}" alt="">
            <img src="{{ asset('images/attendance.png') }}" alt="">
        </div>
    </div>
    <div class="background">
        <img src="{{ asset('images/logo-transparan.png') }}" alt="">
    </div>
</body>
</html>