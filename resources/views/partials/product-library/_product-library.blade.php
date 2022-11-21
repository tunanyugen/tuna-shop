@php
    // params
    // $media: images or videos
    
    $productLibraryId = 'kt_product-library_' . uniqid();
    $popupId = $productLibraryId . '-popup';
@endphp
<div class="product-library" id="{{ $productLibraryId }}">
    {{-- main photo --}}
    <div class="h-75 d-flex align-items-center justify-content-center">
        @if (isset($media[0]))
            <img class="product-library__main" src="{{ $media[0]->url }}" />
        @else
            <img class="product-library__main" src="{{ asset('demo1/media/icons/duotune/custom/Plus.svg') }}" />
        @endif
    </div>
    {{-- smaller photos --}}
    <div class="product-library__container h-25 d-flex align-items-center justify-content-center">
        @foreach ($media as $index=>$singleMedia)
            @if ($index > 0)
                <img src="{{ $singleMedia->url }}">
            @endif
        @endforeach
        <img src="{{ asset('demo1/media/icons/duotune/custom/Plus.svg') }}">
    </div>
</div>
