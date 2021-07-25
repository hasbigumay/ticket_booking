<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/loginstyle.css" rel="stylesheet" type="text/css">
    <title>EasyEvent</title>
</head>
<body>
        <div id="card">
            <div id="card-content">
                <div id="card-title">
                    <h2>LOGIN</h2>
                </div>

            <form action="/users/login" method="POST" class="form">
            @csrf
            <label for="username" style="padding-top:13px">&nbsp;Username</label>
            <input id="username" class="form-content" autocomplete="on" required
                type="text" name="username" placeholder="username"/>
            <div class="form-border"></div>

            <label for="password" style="padding-top:22px">&nbsp;Password</label>
            <input id="password" class="form-content" required
                type="password" name="password" placeholder="password"/>
            <div class="form-border"></div>
            {{-- <a href="#"><legend id="forgot-pass">Forgot password?</legend></a> --}}

            <input id="submit-btn"
                type="submit" value="Login" name="login"/>
            <a href="/users/regist" id="signup">Don't have account yet?</a>
            </form>
            </div>
        </div>
       
</body>
</html>
