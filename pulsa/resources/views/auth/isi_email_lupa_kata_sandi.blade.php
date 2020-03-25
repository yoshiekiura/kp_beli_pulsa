<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<h2>Hai {{$nama}}</h2><br>
<p>Klik Link Dibawah Untuk Merubah Password Anda!<br>
</p><br>
<button type="button" class="btn btn-success"><a href="{{ url('/lupas')}}?email={{$email}}&kode={{$kode}}">Lupa Kata Sandi!</a></button>
<p><a href="{{ url('/lupas')}}?email={{$email}}&kode={{$kode}}">{{ url('/lupas')}}?email={{$email}}&kode={{$kode}}</a></p>
<p><a href="{{ url('/lupas')}}?email={{$email}}&kode={{$kode}}">LINK SKUY</a></p>
<br><br><p>Demikian kami sampaikan.
    <br><br>Salam Hangat <br><br>Tukupulsa.com
</p>
