{{-- @foreach ($event as $event)
    {{-- <h3>{{$event->id_event}}</h3> --}}
    {{-- <h3>{{$event->icon}}</h3>
    <h3>{{$event->judul_event}}</h3>
    <h3>{{$event->jenis_event}}</h3>
    <h3>{{$event->tanggal}}</h3>
    <h3>{{$event->waktu}}</h3>
    <h3>{{$event->lokasi}}</h3>
    <h3>{{$event->opsi_fee}}</h3>
    <h3>{{$event->harga}}</h3>
    <h3>{{$event->keterangan}}</h3> --}}

    {{-- <form action="/event/input" method="post">
        @csrf
        @method("INPUT")
        <input type="hidden" name="id" value="{{$event->id_event}}"/>
        <input type="submit" value="Input"/>
    </form>
@endforeach --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>List Event</title>
    <link href="/css/myevent.css" rel="stylesheet" type="text/css" >
    <link href="/css/homestyle.css" rel="stylesheet" type="text/css">
    
</head>
<body>
<!-- bagian header template -->
<header>
    <font face="Century Gothic"> <h1 class="judul">EasyEvent</h1> </font>
</header>
<!-- akhir bagian header template -->

<div class="menu">
    <!-- bagian menu		 -->
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
    @foreach ($event as $event)
        <ul id="utama">
                <li>
                    <div class="event">
                        <a href="{{$event->id_event}}" >
                        <img src="{{$event->icon}}" alt="Icon">
                        <h4><b>{{$event->judul_event}}</b></h4>
                        <p>{{$event->jenis_event}}</p>
                        </a>
                    </div>
                </li>
        </ul>
    @endforeach
 </div>

</body>

</html>

