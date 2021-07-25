
{{-- <h3>{{ $event->icon }}</h3>
<h3>{{ $event->judul_event }}</h3>
<h3>{{ $event->jenis_event }}</h3>
<h3>{{$event->tanggal}}</h3>
<h3>{{$event->waktu}}</h3>
<h3>{{$event->lokasi}}</h3>
<h3>{{$event->opsi_fee}}</h3>
<h3>{{$event->harga}}</h3>
<h3>{{$event->keterangan}}</h3> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/detailevent.css" rel="stylesheet" type="text/css">
    <link href="/css/homestyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
    </script>
    <title>Detail Event</title>
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
    <div class="detail">
        <form action="/event/list" method="GET">
            @csrf
            <h1>Detail Event</h1>
            <div class="icon">
                <div class="icon-event">
                <img src="{{$event->icon}}" alt="Icon" style="width:100%">
                </div>
            </div>
            <div id="input-right">
                <div>{{date('d M Y', strtotime($event->tanggal))}}</div>
                <h2>{{ $event->judul_event }}</h2>
                <div>Waktu{{$event->waktu}}</div>
                <div>{{$event->lokasi}}</div>
            </div>

                <div>
                    <label style="padding-top:13px">&nbsp;Keterangan</label>
                    <div class="form-content">
                        <p>{{$event->keterangan}}</p>
                    </div>
                </div>
        </form>
    </div>
    <div class="footer">
          <p> © Copyright EasyEvent 2021 </p>
	</div>
</body>
</html>
