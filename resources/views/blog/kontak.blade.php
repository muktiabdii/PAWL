<!-- Menghubungkan dengan view template master -->
@extends('../master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('title', 'Halaman Kontak')


<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('content')

	<p>Ini Adalah Halaman Kontak</p>

	<table border="1">
		<tr>
			<td>Email</td>
			<td>:</td>
			<td>filkom@ub.ac.id</td>
		</tr>
		<tr>
			<td>Hp</td>
			<td>:</td>
			<td>081-123-123-123</td>
		</tr>
	</table>

@endsection