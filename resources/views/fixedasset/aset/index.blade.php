@extends('layout')
@section('content')
	<link href="{{ asset('custom/css/datatable.min.css') }}" rel="stylesheet" type="text/css" />

	<div class="table-responsive container">
		<table class="table-striped table-hover display table-row-bordered gy-5 table" id="fixaset_listaset">
			<thead class="table-primary">
				<tr class="fw-semibold fs-6">
					<th scope="col">No</th>
					<th scope="col">Nama Aset dan Inventaris</th>
					<th scope="col">Kondisi</th>
					<th scope="col">No Referensi</th>
					<th scope="col">QR Code</th>
					<th scope="col">Nilai Aset</th>
					<th scope="col">Nilai Awal</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($asetList as $key => $aset)
					<tr>
						<th scope="row">{{ $key + 1 }}</th>
						<td>{{ $aset->ket }}</td>
						<td>{{ $aset->kondisi }}</td>
						<td>{{ $aset->noref }}</td>
						<td class="text-right">@rupiah($aset->nlperubahan)</td>
						<td class="text-right">@rupiah($aset->nilai)</td>
						<td><x-button-link type="light-primary" :url="route('fixaset.barcode', $aset->qrcode)">Lihat</x-button-link></td>
					</tr>
				@endforeach

			</tbody>
		</table>
		{{-- @dd($asetList) --}}
	</div>
	<script>
		$(document).ready(function() {
			$('#fixaset_listaset').DataTable();
		});
	</script>
@endsection
