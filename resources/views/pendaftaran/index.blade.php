<h1> pendaftaran </h1>
<a href="pendaftaran/create"> CREATE </a>

<!-- STYLE MULAI DISINI -->
<style>

table {
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
}

</style>

<!-- TABLE MULAI DISINI -->
<table>
    <tr>
        <th>Nomor Pendaftaran</th>
        <th>Tanggal Pendaftaran</th>
        <th>Kode Dokter</th>
        <th>Kode Pasien</th>
        <th>Kode Poliklinik</th>
        <th>Biaya Pendaftaran</th>
        <th>Keterangan</th>
    </tr>
    @foreach($var as $var)
        <tr>
            <td>{{ $var->NomorPendf}}</td>
            <td>{{ $var->TanggalPendf}}</td>
            <td>{{ $var->KodeDkt}}</td>
            <td>{{ $var->KodePsn}}</td>
            <td>{{ $var->KodePlk}}</td>
            <td>{{ $var->Biaya}}</td>
            <td>{{ $var->Ket}}</td>
        </tr>
    @endforeach
</table>
