<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/registerstyle.css" rel="stylesheet" type="text/css">
    <title>Registrasi</title>
</head>
<body>
    @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <strong>{{ $message }}</strong>
        </div>
    @endif
        <div id="card">
            <div id="card-content">
                <div id="card-title">
                   <center> <h2>Registrasi</h2></center>
                </div>

            <form action="/users/regist" method="POST" class="form">
            @csrf

            <label for="name" style="padding-top:13px">&nbsp;Name</label>
            <input id="name" class="form-content" autocomplete="on" required type="text" name="nama" placeholder="name"/>

            <label for="username" style="padding-top:13px">&nbsp;Username</label>
            <input id="username" class="form-content" autocomplete="on" required type="text" name="username" placeholder="username"/>

            <label for="email" style="padding-top:13px">&nbsp;E-mail</label>
            <input id="email" class="form-content" autocomplete="on" required type="text" name="email" placeholder="e-mail"/>

            <label for="password" style="padding-top:13px">&nbsp;Password</label>
            <input id="password" class="form-content" required type="password" name="password" placeholder="password"/>

            <label for="no_telp" style="padding-top:13px">&nbsp;No.telp </label>
            <input id="no_telp" class="form-content" required type="text" name="no_telp" placeholder="no.telp" max="13"/>

            <label for="gender" style="padding-top:13px">&nbsp;Gender </label>
            <label><input value="Laki-laki" type="radio" name="gender"  checked /> <font size="2pt"> Male </font> </label>
            <label><input value="Perempuan" type="radio" name="gender"  checked /> <font size= "2pt"> Female </font> </label>

            <div>
                <div class="button">
                    <input class="button-regist" id="submit-btn" type="submit" value="Register" name="Register" />
                </div>

                <div class="button-login">
                    <a href="/users/login">Login</a>
                </div>
            </div>
            </form>
            </div>
        </div>
</body>
</html>
