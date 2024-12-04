<?php function button($label = '') {?>

<button class='btn btn-primary btn-block'>{{ $label }}</button>

<?php } function input($label = '', $required = false, $disabled = false, $id = '', $type = 'text', $value = '', $onchange = '', $inline = false) { ?>

<div class="form-group @if ($inline) row @endif">
    <label
        class="@if ($inline) col-4 @endif col-form-label">{{ $label .= $required ? ' <span class="text-danger">*</span>' : '' }}</label>

    @if ($inline)
        <div class="col-8">
    @endif

    <input class="form-control {{ $disabled ? 'form-control-solid' : '' }}" id="{{ $id }}"
        type="{{ $type }}" name="{{ $id }}" value="{{ $value }}" {{ $disabled ? 'readonly' : '' }}
        onchange="{{ $onchange }}" {{ $required ? 'required' : '' }} />

    @if ($inline)
</div>
@endif
</div>

<?php } function select($label = '', $required = false, $disabled = false, $id = '', $type = 'text', $value = '', $onchange = '', $inline = false, $option = array()) { ?>

<div class="form-group @if ($inline) row @endif">
    <label
        class="@if ($inline) col-4 @endif col-form-label">{{ $label .= $required ? ' <span class="text-danger">*</span>' : '' }}</label>

    @if ($inline)
        <div class="col-8">
    @endif

    <select class="form-control" name="{{ $id }}" id="{{ $id }}">
        {{-- @foreach ($option as $item)
            <option>{{ $item }}</option>
        @endforeach --}}
    </select>

    @if ($inline)
</div>
@endif

</div>

<?php } ?>


@if (Session::has('error'))
    <div class="modal fade show active" id="modal-errmsg" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">KESALAHAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close"></i>
                    </button>
                </div>
                <div class="modal-body">
                    xxxxxx
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#modal-errmsg").modal();
        });
    </script>
@endif
