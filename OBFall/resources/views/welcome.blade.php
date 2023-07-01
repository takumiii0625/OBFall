<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    中略
</head>

<body>
    <div id="map" style="height:500px"> //追加
    </div>
    <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=[APIキーをここに入力]&callback=initMap" async defer>
    </script>
</body>

</html>