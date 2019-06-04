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
$arrayData = array();
$dayUx1 = $data["forecast"]["forecastday"][1]["date_epoch"];
$dt = new DateTime("@$dayUx1");

?>


<div class="container">
    <table class="responsive-table">
        <thead>
            <h2 class="center">Clima de hoy:</h2>
            <tr>
                <th class="center">
                    <h3>Ciudad:</h3>
                </th>
                <th class="center">
                    <h4><?php echo $data["location"]["name"]; ?>,<?php echo $data["location"]["region"]; ?>,<?php echo $data["location"]["country"]; ?> </h4>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="center">
                    <h3>Estado del tiempo:</h3>
                </td>
                <td class="center"><img src="<?php echo $data["current"]["condition"]["icon"]; ?>" alt="img"></td>
            </tr>
            <tr class="center">
                <td class="center">
                    <h3>Temperatura actual:</h3>
                </td>
                <td class="center">
                    <h4><?php echo $data["current"]["temp_c"]; ?> centigrados</h4>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<br><br>
<div class="container">
    <table class="responsive-table">
        <thead>
            <h2 class="center">Próximos dias:</h2>
        </thead>
        <tbody>
            <tr>
                <td class="center">
                    <h3><?php echo $dt->format('l'); ?></h3>
                </td>
                <td class="center"><img src="<?php echo $data["forecast"]["forecastday"][0]["day"]["condition"]["icon"]; ?>" alt="img">
                    <h4><?php echo $data["forecast"]["forecastday"][0]["day"]["avgtemp_c"]; ?> centigrados </h4>
                </td>
            </tr>
            <tr>
                <td class="center">
                    <h3>Pasado Mañana:</h3>
                </td>
                <td class="center"><img src="<?php echo $data["forecast"]["forecastday"][1]["day"]["condition"]["icon"]; ?>" alt="img">
                    <h4><?php echo $data["forecast"]["forecastday"][0]["day"]["avgtemp_c"]; ?> centigrados </h4>
                </td>
            </tr>
        </tbody>
    </table>
    <br><br>
</div>

<div>
</div>