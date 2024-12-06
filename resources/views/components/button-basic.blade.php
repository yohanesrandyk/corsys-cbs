@php
	// Style
	// Docs https://preview.keenthemes.com/html/metronic/docs/base/buttons
	// Type :light,primary,secondary,succes,info,warning,danger,dark
	if (!empty($type)) {
	    $style = 'btn btn-' . $type . ' ' . $style;
	} else {
	    $style = 'btn btn-light ' . $style;
	}
@endphp

<button class="{{ $style }}" @if (!empty($id) && $id !== false) id="{{ $id }}" @endif
	@if (!empty($disable) && $disable === true) disabled @endif {{ $action }}>
	{{ $slot }}
</button>
