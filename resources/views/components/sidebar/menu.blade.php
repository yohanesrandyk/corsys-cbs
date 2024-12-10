@if (!empty($submenu) && $submenu == 'sub')
	<li class="menu-item menu-item-submenu menu-item-active menu-item-open" aria-haspopup="true" data-menu-toggle="hover">
		<a href="{{ $url }}" class="menu-link menu-toggle">
			<span class="{{ $menuIcon }}fas fa-cogs menu-icon text-danger"></span>
			<span class="menu-text {{ $menuStyle }} text-danger">{{ $menuText }}</span>
			<i class="menu-arrow"></i>
		</a>
		<x-sidebar.submenu>
			{{ $slot }}
		</x-sidebar.submenu>
	</li>
@else
	<li class="m-item menu-item" aria-haspopup="{{ $popup }}"
		@if (!empty($onclick)) onclick="{{ $onclick }}" @endif>
		<a href="{{ $url }}" class="menu-link">
			<span class="{{ $menuIcon }} menu-icon"></span>
			<span class="menu-text {{ $menuStyle }}">{{ $menuText }}</span>
		</a>
	</li>
@endif
