<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/addeventstyle.css" rel="stylesheet" type="text/css">
    <link href="/css/homestyle.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $( function() {
      $( "#datepicker" ).datepicker({
        dateFormat: 'yy-mm-dd',
        autoclose: true,
        todayHighlight: true
      });
    } );
    </script>
    <title>Add Event</title>
</head>
<body>


	<header>
		<font face="Century Gothic"> <h1 class="judul">Event Kita</h1> </font>
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

    <div class="add">
        <form action="/event/add" method="POST" >
            @csrf
            <div class="upload-btn-wrapper">
                <p>Event Poster</p>
                <button class="tombol">+
                    <input type="file" name="icon" accept="image/x-png,image/gif,image/jpeg"/>
                    </button>
            </div>
            <div id="input-right">
                <label for="judul" style="padding-top:13px">&nbsp;Judul Event</label>
                <input id="judul" class="form-content" type="text" name="judul event"
                    placeholder="Masukkan judul event anda"/>
                    <br>
                <label for="jenis" style="padding-top:13px">&nbsp;Jenis Event</label>
                <br>
                <select name="jenis_event" id="jenis" >
                <option value="seminar"> seminar</option>
                <option value="konser musik"> konser musik</option>
                <option value="workshop"> workshop</option>
                <option value="kompetisi"> kompetisi</option>
                </select>
            </div>
            <div class="form">
            <div >
                <label>Tanggal :</label>
                <br>
                <input type="text" name="tanggal" id="datepicker" class="form-content"
                    placeholder="Tentukan tanggal event anda"/>
            </div>
            <div>
                <label>Waktu :</label>
                <br>
                <input type="time" name="waktu" id="timepicker" class="form-content"
                    placeholder="Tentukan waktu event anda"/>
            </div>
            <div>
                <label for="lokasi" style="padding-top:13px">&nbsp;Lokasi</label>
                <br>
                <input id="lokasi" class="form-content" type="text" name="lokasi"
                    placeholder="Masukkan lokasi event anda"/>
            </div>
            <div>
                <label for="opsi_fee" style="padding-top:13px" >&nbsp;Option Fee</label>
                <br>
                <select name="opsi_fee" id="opsi_fee" class="form-content">
                <option value="bayar">Bayar</option>
                <option value="gratis">Gratis</option>
                </select>
            </div>
            <div>
                <label for="harga" style="padding-top:13px">&nbsp;Harga</label>
                <br>
                <input id="harga" class="form-content" type="text" name="harga"
                    placeholder="Masukkan harga event"/>
            </div>
            <div>
                <label for="keterangan" style="padding-top:13px">&nbsp;Keterangan</label>
                <br>
                <input id="keterangan" class="form-content" type="text" name="keterangan"
                    placeholder="Masukkan keterangan event"/>
            </div>

            <div class="btncreate">
                <br>
            <input id="btncreate"
                    type="submit" value="Create Event"/>
            </div>

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    </div>
                @endif

        </form>
    </div>
   
</body>
</html>
