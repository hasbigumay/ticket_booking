
{{-- @foreach($event as $event)

<h2>{{ $event->id_event }}</h2>
<h3>{{$event->icon}}</h3>
<h3>{{$event->judul_event}}</h3>
<h3>{{ $event->jenis_event}}</h3>

@endforeach --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MyEvent</title>
    <link href="/css/myevent.css" rel="stylesheet" type="text/css" >
    <link href="/css/homestyle.css" rel="stylesheet" type="text/css">
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


				<li class="dropdown"><a href="/profile">Profile</a>

                <li> <a href="/users/login">Log out</a></li>
				</li>
			</ul>
		</nav>
    </div>

<div class="list-event">
    <h1> MY EVENT</h1>
    @foreach ($event as $event)
        <ul id="utama">
            <li>
                 <div class="event">
                    <img src="{{$event->icon}}" alt="Icon" style="width:100%">
                    <h3><b>{{$event->judul_event}}</b></h3>
                    <p>{{$event->jenis_event}}</p>
                    <form action="/event/delete" method="post">
                        @csrf
                        @method("DELETE")
                        <input type="hidden" name="id" value="{{$event->id_event}}"/>
                        <input type="submit" value="Delete"/>
                    </form>
</div>
            </li>
        </ul>
    </div>
    @endforeach

</body>
</html>





