<!-- Button trigger modal-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{ $idModal }}">
	{{ $text }}
</button>

<div class="modal fade" id="{{ $idModal }}" tabindex="-1" role="dialog" aria-labelledby="{{ $idModal }}Label"
	aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="{{ $idModal }}Label"></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<i aria-hidden="true" class="ki ki-close"></i>
				</button>
			</div>
			<div class="modal-body">
				{{ $slot }}
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
				@if ($type == 'save')
					<button type="button" class="btn btn-primary font-weight-bold" id="save">
						Save
					</button>
				@endif
			</div>
		</div>
	</div>
</div>
