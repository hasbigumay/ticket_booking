<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/profilestyle.css" rel="stylesheet" type="text/css">
    <link href="/css/homestyle.css" rel="stylesheet" type="text/css">
    <title>Profile</title>
</head>
<body>
	<header>
		<font face="Century Gothic"> <h1 class="judul">EasyEvent</h1> </font>
	</header>

	<div class="menu">
		<nav class="menu">
            <ul id="utama">
				<li><a href="/home">Home</a></li>

				<li><a href="/contactus">Contact Us</a></li>

				<li><a href="/aboutus">About Us</a></li>

                <li><a href="/event/add">Create Event</a></li>

				<li><a href="/event/list">List Event</a></li>

				<li><a href="/profile">Profile</a>

                <li> <a href="/users/login">Log out</a></li>

				</li>
			</ul>
		</nav>
    </div>

    @foreach($user as $user)
        
        <div class="profile">
            <h1> My Profile </h1>
            <div id="box">
                <h3> Name:</h3>
                <h2>{{$user->nama }}</h2>
                <h3> Username : </h3>
                <h2>{{$user->username}}</h2>
                <h3> Email : </h3>
                <h2>{{$user->email}}</h2>
                <h3> phone number :</h3>
                <h2>{{ $user->no_telp}}</h2>
                <a href="myevent"> my event</a>
            </div>
        </div>
    @endforeach
</body>
</html>
