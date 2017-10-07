<h1> VIEW </h1>
<a href="main/create"> CREATE </a>
@foreach($var as $var)
    <p> {{ $var->NomorPendf}} </p>
    <p> {{ $var->TanggalPendf}} </p>
    <p> {{ $var->KodeDkt}} </p>
    <p> {{ $var->KodePsn}} </p>
    <p> {{ $var->KodePlk}} </p>
    <p> {{ $var->Biaya}} </p>
    <p> {{ $var->Ket}} </p>
    <hr>
@endforeach
