<?php

$apiKey = "cca932132f0b4994b74151806190406";
$uriApi = "http://api.apixu.com/v1/forecast.json?key=" . $apiKey . "&q=" . $city . "%20" . $state . "&days=4";
$curl = curl_init();
curl_setopt($curl, CURLOPT_HEADER, 0);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl, CURLOPT_URL, $uriApi);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl, CURLOPT_VERBOSE, 0);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($curl);
curl_close($curl);
$data = json_decode($response, TRUE);

$dayUx1 = $data["forecast"]["forecastday"][1]["date_epoch"];
    $dt = new DateTime("@$dayUx1");
    $dayUx2 = $data["forecast"]["forecastday"][2]["date_epoch"]; 
    $dt2 = new DateTime("@$dayUx2");
    $dayUx3 = $data["forecast"]["forecastday"][3]["date_epoch"]; 
    $dt3 = new DateTime("@$dayUx3");
    
?>

<div class="container">
    <ul class="collection">
        <li class="collection-item ">
        <h4 class="header"><?php echo $data["location"]["name"];?>,<?php echo $data["location"]["region"];?>,<?php echo $data["location"]["country"];?></h4>
        <img src="<?php echo $data["current"]["condition"]["icon"];?>" alt="img">
        <h4><?php echo $data["current"]["temp_c"];?> °C</h4> <br>
    </li>

    <div class="row">
     <li class="collection-item avatar col s4">
        <img src="<?php echo $data["forecast"]["forecastday"][0]["day"]["condition"]["icon"];?>" alt="img" class="circle">
        <span class="title"><?php echo $dt->format('l');?></span>
        <p><?php echo $data["forecast"]["forecastday"][0]["day"]["avgtemp_c"];?> °C <br>
    </li> 
    <li class="collection-item avatar col s4">
        <img src="<?php echo $data["forecast"]["forecastday"][1]["day"]["condition"]["icon"];?>" alt="img" class="circle">
        <span class="title"><?php echo $dt2->format('l');?></span>
        <p><?php echo $data["forecast"]["forecastday"][1]["day"]["avgtemp_c"];?> °C <br>
    </li>
    <li class="collection-item avatar col s4">
        <img src="<?php echo $data["forecast"]["forecastday"][2]["day"]["condition"]["icon"];?>" alt="img" class="circle">
        <span class="title"><?php echo $dt3->format('l');?></span>
        <p><?php echo $data["forecast"]["forecastday"][2]["day"]["avgtemp_c"];?> °C <br>
    </li> 
    </ul>

     </div>

     </div>
    </div>
