@php
    // params
    // $mainPhoto: the big photo
    // $smallerPhotos: photos in the slider
    
    $productLibraryId = 'kt_product-library_' . uniqid() ;
@endphp
<div class="product-library" id="{{$productLibraryId}}">
    {{-- main photo --}}
    <div class="h-75 d-flex align-items-center justify-content-center">
        @if (isset($mainPhoto))
            <img class="product-library__main" src="{{$mainPhoto}}" />
        @else
            <img class="product-library__main" src="{{asset('demo1/media/icons/duotune/custom/Plus.svg')}}" />
        @endif
    </div>
    {{-- smaller photos --}}
    <div class="product-library__container h-25 d-flex align-items-center justify-content-center">
        @foreach ($smallerPhotos as $src)
            <img src="{{$src}}">
        @endforeach
        <img src="{{asset('demo1/media/icons/duotune/custom/Plus.svg')}}">
    </div>
</div>