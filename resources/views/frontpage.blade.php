<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    
    <div class="wrapper">
        <div class="wrapper-left">
            <div class="logo">
                <img src="css/werty.png" id=back>
                <div><h2 id=text>Monitoring System</h2></div>
            </div>
        </div>
        <section>
        <div class="wrapper-right">
                <div class="form-box">
                    <div class="form-value">
                        <form action="">
                            <h2>Login</h2>
                            <div class="inputbox">
                                <input type="text" class="input-box" placeholder="Username">
                            </div>
                            <div class="inputbox">
                                <input type="text" class="input-box" placeholder="Password">
                            </div>
                            <div class="forgot">
                                <label for=""><input type="checkbox">Remember Me <a href="#">Forgot Password</a></label>
                            </div>
                            <button>Log in</button>
                            <div class="Register">
                                <p>Not a member? <a href="#">Sign up now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
        </div>
        </section>
    </div>
</body>
</html>