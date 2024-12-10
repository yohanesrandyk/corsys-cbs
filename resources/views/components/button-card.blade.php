<a href="{{ $link }}" class="card {{ $bgColor }} text-white card-stretch gutter-b"> 
    <div class="card-body">
        <img src="{{ asset($image) }}" alt="Logo" class="mr-3 logo">
        <div>
            <div class="font-weight-bolder font-size-h2">{{ $title }}</div>
            <div class="{{ $descriptionSize }}">{{ $description }}</div>
        </div>
    </div>
</a>