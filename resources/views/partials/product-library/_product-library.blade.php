@php
    // params
    // $medias: images or videos
    
    $productLibraryId = 'kt_product-library_' . uniqid();
    $popupId = $productLibraryId . '-popup';
@endphp
<div class="product-library" id="{{ $productLibraryId }}">
    {{-- main photo --}}
    <div class="h-75 d-flex align-items-center justify-content-center">
        @if (isset($medias[0]))
            <img class="product-library__main" src="{{ $medias[0] }}" />
        @else
            <img class="product-library__main" src="{{ asset('demo1/media/icons/duotune/custom/Plus.svg') }}" />
        @endif
    </div>
    {{-- smaller photos --}}
    <div class="product-library__container h-25 d-flex align-items-center justify-content-center">
        @foreach ($medias as $index=>$src)
            @if ($index > 0)
                <img src="{{ $src }}">
            @endif
        @endforeach
        <img src="{{ asset('demo1/media/icons/duotune/custom/Plus.svg') }}">
    </div>
</div>
