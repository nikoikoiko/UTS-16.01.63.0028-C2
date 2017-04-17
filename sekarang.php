	<html>
	<body>
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>                        
			</button>
			<a class="navbar-brand" href="?m=apercuripan"><b>Apercuripan ?</b></a>
		  <!--a class="navbar-brand img-responsive" href="#"><img src="images/logosmall.png"></a-->
		</div>
		<div class="collapse navbar-collapse" id="myNavbar">
		  <ul class="nav navbar-nav navbar-right">
			<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">Forecast
			<span class="caret"></span></a>
			<ul class="dropdown-menu">
			  <li><a href="?m=sekarang">Perkiraan Hari Ini</a></li>
			  <li><a href="?m=besok">Perkiraan Esok Hari</a></li>
			</ul>
		  </ul>
		</div>
	  </div>
	</nav>
	
	<style>
	input {
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
	}
	</style>
	
	<form method="post">
	Kota : 
    <div class="btn-group">
    <button type="submit" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Pilih Kota <span class="caret"></span></button>
    <ul class="dropdown-menu" role="menu">
      <li><a><input type="submit" name="Ambon" value="Ambon"></input></a></li>
      <li><a><input type="submit" name="Balikpapan" value="Balikpapan"></input></a></li>
	  <li><a><input type="submit" name="Biak" value="Biak"></input></a></li>
      <li><a><input type="submit" name="Bogor" value="Bogor"></input></a></li>
	  <li><a><input type="submit" name="Manokwari" value="Manokwari"></input></a></li>
	  <li><a><input type="submit" name="Pangkalpinang" value="Pangkalpinang"></input></a></li>
	  <li><a><input type="submit" name="Poso" value="Poso"></input></a></li>
	  <li><a><input type="submit" name="Sentani" value="Sentani"></input></a></li>
	  <li><a><input type="submit" name="Sorong" value="Sorong"></input></a></li>
	  <li><a><input type="submit" name="Tarakan" value="Tarakan"></input></a></li>
	  <li><a><input type="submit" name="Ternate" value="Ternate"></input></a></li>
    </ul>
	</div><br><br>
	</form>
	
	<div class="container-fluid">
	<div class="row">
	<div class="col-sm-8">
	<?php
	  if(isset($_POST['Ambon']))
        $geolookup = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/geolookup/q/Ambon%20/%20Pattimura.json");
	  else if(isset($_POST['Balikpapan']))
        $geolookup = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/geolookup/q/Balikpapan.json");
	  else if(isset($_POST['Biak']))
        $geolookup = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/geolookup/q/Biak%20/%20Mokmer.json");
	  else if(isset($_POST['Bogor']))
        $geolookup = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/geolookup/q/Indonesia/Bogor%20/%20Citeko.json");
	  else if(isset($_POST['Manokwari']))
        $geolookup = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/geolookup/q/Manokwari%20/%20Rendani.json");
	  else if(isset($_POST['Pangkalpinang']))
        $geolookup = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/geolookup/q/Pangkalpinang%20/%20Pangkalpinang.json");
	  else if(isset($_POST['Poso']))
        $geolookup = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/geolookup/q/Poso%20/%20Kasiguncu.json");
	  else if(isset($_POST['Sentani']))
        $geolookup = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/geolookup/q/jayapura%20/%20Sentani.json");
	  else if(isset($_POST['Sorong']))
        $geolookup = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/geolookup/q/Indonesia/Sorong%20/%20Jefman.json");
	  else if(isset($_POST['Tarakan']))
        $geolookup = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/geolookup/q/Tarakan%20/%20Juwata.json");
	  else if(isset($_POST['Ternate']))
        $geolookup = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/geolookup/q/Ternate%20/%20Babullah.json");
	  else 
		  echo "";
	  $parsed_geolookup = json_decode($geolookup);
	  
	  $kota = $parsed_geolookup->{'location'}->{'city'};
	  if ($kota == "Pattimura")
		  $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Ambon%20/%20Pattimura.json");
	  else if ($kota == "Balikpapan")
		  $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Balikpapan.json");
	  else if ($kota == "Mokmer")
		  $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Biak%20/%20Mokmer.json");
	  else if ($kota == "Citeko")
		  $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Indonesia/Bogor%20/%20Citeko.json");
	  else if ($kota == "Rendani")
		  $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Manokwari%20/%20Rendani.json");
	  else if ($kota == "Pangkalpinang")
		  $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Pangkalpinang%20/%20Pangkalpinang.json");
	  else if ($kota == "Kasiguncu")
		  $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Poso%20/%20Kasiguncu.json");
	  else if ($kota == "Sentani")
		  $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Jayapura%20/%20Sentani.json");
	  else if ($kota == "Jefman")
		  $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Indonesia/Sorong%20/%20Jefman.json");
	  else if ($kota == "Juwata")
		  $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Tarakan%20/%20Juwata.json");
	  else if ($kota == "Babullah")
		  $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Ternate%20/%20Babullah.json");
	  else
		  echo "";
	  
	  $parsed_forecast = json_decode($forecast);
	  $weekday2 = $parsed_forecast->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'date'}->{'weekday'};
	  $day2 = $parsed_forecast->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'date'}->{'day'};
	  $monthname2 = $parsed_forecast->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'date'}->{'monthname'};
	  $year2 = $parsed_forecast->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'date'}->{'year'};
	  $conditions2 = $parsed_forecast->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'conditions'};
	  $lowf2 = $parsed_forecast->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'low'}->{'fahrenheit'};
	  $lowc2 = $parsed_forecast->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'low'}->{'celsius'};
	  $avehumidity2 = $parsed_forecast->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'avehumidity'};
	  
	  if ($kota == "Pattimura")
		  echo "AMBON HARI INI<br><br>";
	  else if ($kota == "Balikpapan")
		  echo "BALIKPAPAN HARI INI<br><br>";
	  else if ($kota == "Mokmer")
		  echo "BIAK HARI INI<br><br>";
	  else if ($kota == "Citeko")
		  echo "BOGOR HARI INI<br><br>";
	  else if ($kota == "Rendani")
		  echo "MANOKWARI HARI INI<br><br>";
	  else if ($kota == "Pangkalpinang")
		  echo "PANGKALPINANG HARI INI<br><br>";
	  else if ($kota == "Kasiguncu")
		  echo "POSO HARI INI<br><br>";
	  else if ($kota == "Sentani")
		  echo "SENTANI HARI INI<br><br>";
	  else if ($kota == "Jefman")
		  echo "SORONG HARI INI<br><br>";
	  else if ($kota == "Juwata")
		  echo "TARAKAN HARI INI<br><br>";
	  else if ($kota == "Babullah")
		  echo "TERNATE HARI INI<br><br>";
	  else
		  echo "";
	  
	  echo "Perkiraan : ${weekday2}, ${day2} ${monthname2} ${year2}<br>";
	  echo "Cuaca : ${conditions2}<br>";
	  echo "Suhu : ${lowf2}F / ${lowc2}C<br>";
	  echo "Kelembaban : ${avehumidity2}%<br><br>";
	  
	  echo "Saran Hari Ini : <br><br>";
	  
	  if ($conditions2 == "Chance of Flurries")
			echo "Hari ini kemungkinan hujan deras berpotensi banjir, siapkan jas hujan, hindari daerah rawan banjir.<br>";
	  else if ($conditions2 == "Chance of Rain")
			echo "Hari ini kemungkinan hujan, siapkan jas hujan, datang lebih awal agar penanganan gangguan lebih maksimal.<br>";
	  else if ($conditions2 == "Chance Rain")
			echo "Hari ini kemungkinan hujan, siapkan jas hujan, datang lebih awal agar penanganan gangguan lebih maksimal.<br>";
	  else if ($conditions2 == "Chance of Freezing Rain")
			echo "Hari ini kemungkinan hujan es, siapkan jas hujan, apabila berkendara motor menepi sampai kondisi lebih baik.<br>";
	  else if ($conditions2 == "Chance of Sleet")
			echo "Hari ini kemungkinan hujan salju, siapkan jas hujan dan pakaian tebal, apabila berkendara motor menepi sampai kondisi lebih baik.<br>";
	  else if ($conditions2 == "Chance of Snow")
			echo "Hari ini kemungkinan turun salju,  siapkan jas hujan dan pakaian tebal, apabila berkendara motor menepi sampai kondisi lebih baik.<br>";
	  else if ($conditions2 == "Chance of Thunderstorms")
			echo "Hari ini kemungkinan terjadi hujan dan petir, siapkan jas hujan, hentikan pekerjaan jika kondisi tidak mendukung.<br>";
	  else if ($conditions2 == "Chance of a Thunderstorm")
			echo "Hari ini kemungkinan terjadi hujan badai, siapkan jas hujan, hentikan pekerjaan jika kondisi tidak mendukung.<br>";
	  else if ($conditions2 == "Clear")
			echo "Hari ini kemungkinan cuaca bersih, siapkan daftar gangguan, tuntaskan gangguan semaksimal mungkin.<br>";
	  else if ($conditions2 == "Cloudy")
			echo "Hari ini kemungkinan cuaca mendung, datang lebih awal dan siapkan jas hujan, datang lebih awal agar penanganan gangguan lebih maksimal.<br>";
	  else if ($conditions2 == "Flurries")
			echo "Hari ini kemungkinan hujan deras berpotensi banjir, siapkan jas hujan, hindari daerah rawan banjir.<br>";
	  else if ($conditions2 == "Fog")
			echo "Hari ini kemungkinan cuaca berkabut, hidupkan lampu ketika berkendara, tuntaskan gangguan semaksimal mungkin.<br>";
	  else if ($conditions2 == "Haze")
			echo "Hari ini kemungkinan cuaca berembun, siapkan jas hujan dan hidupkan lampu ketika berkendara, datang lebih awal agar penanganan gangguan lebih maksimal.<br>";
	  else if ($conditions2 == "Mostly Cloudy")
			echo "Hari ini kemungkinan cuaca berawan, siapkan peralatan untuk bekerja, tuntaskan gangguan semaksimal mungkin.<br>";
	  else if ($conditions2 == "Mostly Sunny")
			echo "Hari ini kemungkinan cuaca cerah, siapkan peralatan untuk bekerja, tuntaskan gangguan semaksimal mungkin.<br>";
	  else if ($conditions2 == "Partly Cloudy")
			echo "Hari ini kemungkinan cuaca sebagian mendung, datang lebih awal dan siapkan jas hujan, tuntaskan gangguan semaksimal mungkin.<br>";
	  else if ($conditions2 == "Partly Sunny")
			echo "Hari ini kemungkinan cuaca sebagian cerah, siapkan peralatan untuk bekerja, tuntaskan gangguan semaksimal mungkin.<br>";
	  else if ($conditions2 == "Freezing Rain")
			echo "Hari ini kemungkinan hujan es, siapkan jas hujan dan pakaian tebal, apabila berkendara motor menepi sampai kondisi lebih baik.<br>";
	  else if ($conditions2 == "Rain")
			echo "Hari ini kemungkinan hujan, siapkan jas hujan, datang lebih awal agar penanganan gangguan lebih maksimal.<br>";
	  else if ($conditions2 == "Sleet")
			echo "Hari ini kemungkinan hujan salju, siapkan jas hujan dan pakaian tebal, apabila berkendara motor menepi sampai kondisi lebih baik.<br>";
	  else if ($conditions2 == "Snow")
			echo "Hari ini kemungkinan bersalju, siapkan jas hujan dan pakaian tebal, apabila berkendara motor menepi sampai kondisi lebih baik.<br>";
	  else if ($conditions2 == "Sunny")
			echo "Hari ini kemungkinan cuaca cerah, siapkan daftar gangguan, tuntaskan gangguan semaksimal mungkin.<br>";
	  else if ($conditions2 == "Thunderstorms")
			echo "Hari ini kemungkinan terjadi hujan dan petir siapkan jas hujan, hentikan pekerjaan jika kondisi tidak mendukung.<br>";
	  else if ($conditions2 == "Thunderstorm")
			echo "Hari ini kemungkinan terjadi hujan badai, siapkan jas hujan, hentikan pekerjaan jika kondisi tidak mendukung.<br>";
	  else if ($conditions2 == "Unknown")
			echo "Hari ini cuaca tidak dapat diprediksi, siapkan peralatan yang dibutuhkan, hentikan pekerjaan jika kondisi tidak mendukung.<br>";
	  else if ($conditions2 == "Overcast")
			echo "Hari ini kemungkinan cuaca mendung, siapkan jas hujan, datang lebih awal agar penanganan gangguan lebih maksimal.<br>";
	  else if ($conditions2 == "Scattered Clouds")
			echo "Hari ini kemungkinan cuaca bersih sedikit berawan, siapkan peralatan untuk bekerja, tuntaskan gangguan semaksimal mungkin.<br>";
	  else
			echo "";
	?>	
	</div>
    <div class="col-sm-4">
	<br>
	<?php
	if(isset($_POST['Ambon']))
        $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Ambon%20/%20Pattimura.json");
	  else if(isset($_POST['Balikpapan']))
        $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Balikpapan.json");
	  else if(isset($_POST['Biak']))
        $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Biak%20/%20Mokmer.json");
	  else if(isset($_POST['Bogor']))
        $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Indonesia/Bogor%20/%20Citeko.json");
	  else if(isset($_POST['Manokwari']))
        $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Manokwari%20/%20Rendani.json");
	  else if(isset($_POST['Pangkalpinang']))
        $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Pangkalpinang%20/%20Pangkalpinang.json");
	  else if(isset($_POST['Poso']))
        $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Poso%20/%20Kasiguncu.json");
	  else if(isset($_POST['Sentani']))
        $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/jayapura%20/%20Sentani.json");
	  else if(isset($_POST['Sorong']))
        $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Indonesia/Sorong%20/%20Jefman.json");
	  else if(isset($_POST['Tarakan']))
        $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Tarakan%20/%20Juwata.json");
	  else if(isset($_POST['Ternate']))
        $forecast = file_get_contents("http://api.wunderground.com/api/1c9f756c0fa9493b/forecast/q/Ternate%20/%20Babullah.json");
	  else 
		  echo "";
	  
	  $conditions = $parsed_forecast->{'forecast'}->{'simpleforecast'}->forecastday[0]->{'conditions'};
	  
	  if ($conditions == "Chance of Flurries")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/chanceflurries.svg");
	  else if ($conditions == "Chance of Rain")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/chancerain.svg");
	  else if ($conditions == "Chance Rain")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/chancerain.svg");
	  else if ($conditions == "Chance of Freezing Rain")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/chancesleet.svg");
	  else if ($conditions == "Chance of Sleet")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/chancesleet.svg");
	  else if ($conditions == "Chance of Snow")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/chancesnow.svg");
	  else if ($conditions == "Chance of Thunderstorms")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/chancetstorms.svg");
	  else if ($conditions == "Chance of a Thunderstorm")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/chancetstorms.svg");
	  else if ($conditions == "Clear")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/clear.svg");
	  else if ($conditions == "Cloudy")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/cloudy.svg");
	  else if ($conditions == "Flurries")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/flurries.svg");
	  else if ($conditions == "Fog")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/fog.svg");
	  else if ($conditions == "Haze")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/hazy.svg");
	  else if ($conditions == "Mostly Cloudy")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/mostlycloudy.svg");
	  else if ($conditions == "Mostly Sunny")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/mostlysunny.svg");
	  else if ($conditions == "Partly Cloudy")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/partlycloudy.svg");
	  else if ($conditions == "Partly Sunny")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/partlysunny.svg");
	  else if ($conditions == "Freezing Rain")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/sleet.svg");
	  else if ($conditions == "Rain")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/rain.svg");
	  else if ($conditions == "Sleet")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/sleet.svg");
	  else if ($conditions == "Snow")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/snow.svg");
	  else if ($conditions == "Sunny")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/sunny.svg");
	  else if ($conditions == "Thunderstorms")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/tstorms.svg");
	  else if ($conditions == "Thunderstorm")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/tstorms.svg");
	  else if ($conditions == "Unknown")
			echo file_get_contents("https://image.flaticon.com/icons/svg/376/376993.svg");
	  else if ($conditions == "Overcast")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/cloudy.svg");
	  else if ($conditions == "Scattered Clouds")
			echo file_get_contents("https://icons.wxug.com/i/c/v4/cloudy.svg");
	  else
			echo "";
	?>
	</div>
	</div>
	</div>
	</body>
	</html>

