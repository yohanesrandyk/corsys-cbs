<?php function button($label = '') {?>

<button class='btn btn-primary px-6'>{{ $label }}</button>

<?php } function input($label = '', $required = false, $disabled = false, $id = '', $type = 'text', $value = '', $onchange = '') { ?>

<div class="form-group row">
    <label class="col-4 col-form-label">{{ $label .= $required ? ' <span class="text-danger">*</span>' : '' }}</label>
    <div class="col-8">
        <input class="form-control {{ $disabled ? 'form-control-solid' : '' }}" id="{{ $id }}"
            type="{{ $type }}" name="{{ $id }}" value="{{ $value }}"
            {{ $disabled ? 'readonly' : '' }} onchange="{{ $onchange }}" {{ $required ? 'required' : '' }} />
    </div>
</div>

<?php } ?>
