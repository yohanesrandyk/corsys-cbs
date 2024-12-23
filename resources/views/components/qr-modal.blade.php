<!-- Button trigger modal-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal{{ $barcode }}"
	@if ($onclick) onclick="{{ $onclick }}" @endif>
	{!! $text !!}
</button>

<div class="modal fade" id="modal{{ $barcode }}" tabindex="-1" role="dialog"
	aria-labelledby="{{ $barcode }}Label" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="{{ $barcode }}Label">Barcode {{ $namaAset }}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<div class="modal-body">
				<div class="spinner-border" role="status">
					<span class="sr-only">Loading...</span>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light-danger font-weight-bold me-auto" data-dismiss="modal">
					<i class='icon-xl la la-times'></i>
					Close
				</button>
				<a href="{{ route('fixaset.barcode', $barcode) }}">
					<button type="button" class="btn btn-primary font-weight-bold">
						<i class='icon-xl la la-print'></i>
						Print
					</button>
				</a>
				<a href="{{ route('fixaset.barcode', $barcode) }}">
					<button type="button" class="btn btn-primary font-weight-bold">
						<i class='icon-xl la la-download'></i>
						Download
					</button>
				</a>
			</div>
		</div>
	</div>
</div>
