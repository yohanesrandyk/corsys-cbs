@php
	/**
	 * Target untuk membukan halaman
	 * Docs : https://developer.mozilla.org/en-US/docs/Web/HTML/Element/a#target
	 */
@endphp
@if (!empty($target))
	<a href="{{ $url }}" target="{{ $target }}">
		<x-button-basic :type="$type" :style="$style" :action="$action" :disable="$disable" :id="$id">
			{{ $slot }}
		</x-button-basic>
	</a>
@else
	<a href="{{ $url }}">
		<x-button-basic :type="$type" :style="$style" :action="$action" :disable="$disable" :id="$id">
			{{ $slot }}
		</x-button-basic>
	</a>
@endif
