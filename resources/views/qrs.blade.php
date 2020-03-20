<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Laravel QR Code Example</title>
</head>
<body>

<div class="text-center" style="margin-top: 50px;">
<h3>{{$boleto->Eventos->nombre_evento}}</h3>

{!! QrCode::size(300)->generate($boleto->id); !!}

<h5>{{$boleto->id}}</h5>
<h5>{{$boleto->Eventos->descripcion_evento}}</h5>
<p>{{$boleto->Eventos->empresa}}</p>
</div>

</body>
</html>