<h1> VIEW </h1>
<a href="main/create"> CREATE </a>
@foreach($var as $var)
    <p> {{ $var->NomorByr}} </p>
    <p> {{ $var->KodePsn}} </p>
    <p> {{ $var->TanggalByr}} </p>
    <p> {{ $var->JumlahByr}} </p>
    <hr>
@endforeach
