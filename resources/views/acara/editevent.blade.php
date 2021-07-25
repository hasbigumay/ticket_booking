<form action="/event/edit" method="post">
    @csrf
    <input type="hidden" name="id_event" value="{{ $event->id_event }}" />
        <label>icon :</label>
<input type="text" name="icon" placeholder="icon" value="{{ $event->icon}}"/>
   </p>
   <p>
        <label>Judul Event :</label>
         <input type="text" name="judul event" value="{{ $event->judul_event }}"/>
   </p>
   <p>
        <label> Jenis Event </label>
        <select name="jenis_event">
            <option value="seminar" @if ("seminar"==$event->jenis_event)
                {{ "selected" }}
            @endif> seminar</option>
            <option value="konser musik" @if ("konser musik"==$event->jenis_event)
                {{ "selected" }}
            @endif> konser musik</option>
            <option value="workshop" @if ("workshop"==$event->jenis_event)
                {{ "selected" }}
            @endif> workshop</option>
            <option value="kompetisi" @if ("kompetisi"==$event->jenis_event)
                {{ "selected" }}
            @endif> kompetisi</option>
        </select>
   </p>
   <p>
       <label>Tanggal :</label>
       <input type="date" name="tanggal" value="{{ $event->tanggal }}"/>
   </p>
   <p>
        <label>Waktu :</label>
        <input type="time" name="waktu" value="{{ $event->waktu }}"/>
   </p>
   <p>
        <label> lokasi :</label>
        <input type="text" name="lokasi" value="{{ $event->lokasi }}"/>
   </p>
   <p>
        <label>Option Fee :</label>
        <label><input type="radio" name="opsi_fee" value="bayar" @if ("bayar"==$event->opsi_fee)
            {{ "checked" }}
        @endif/> Bayar </label>
        <label><input type="radio" name="opsi_fee" value="gratis" @if ("gratis"==$event->opsi_fee)
            {{ "checked" }}
        @endif/> Gratis </label>
   </p>
   <p>
        <label>Harga :</label>
        <input type="text" name="harga" value="{{ $event->harga }}">
   </p>
   <p>
       <label>Keterangan</label>
       <input type="text" name="keterangan" value="{{ $event->harga }}">
   </p>
   <input type="submit" value="update"/>

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
