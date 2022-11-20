@php
    $fake = [
        'mainPhoto' => 'https://ichef.bbci.co.uk/news/976/cpsprodpb/67CF/production/_108857562_mediaitem108857561.jpg',
        'smallerPhotos' => [
            'https://ichef.bbci.co.uk/news/976/cpsprodpb/67CF/production/_108857562_mediaitem108857561.jpg',
            'https://ichef.bbci.co.uk/news/976/cpsprodpb/67CF/production/_108857562_mediaitem108857561.jpg',
            'https://ichef.bbci.co.uk/news/976/cpsprodpb/67CF/production/_108857562_mediaitem108857561.jpg',
            'https://ichef.bbci.co.uk/news/976/cpsprodpb/67CF/production/_108857562_mediaitem108857561.jpg',
        ]
    ];
@endphp
<x-base-layout>
    <style>
        #working div {
            /* outline: 1px solid black; */
        }
    </style>
    <div id="working">
        {{-- main part --}}
        <div class="container card mb-5 py-2">
            <div class="row">
                {{-- photos --}}
                <div style="height: 334px" class="col-4">
                    {{theme()->getView('partials/product-library/_product-library', [
                        'mainPhoto' => $fake['mainPhoto'],
                        'smallerPhotos' => $fake['smallerPhotos'],
                    ])}}
                </div>
                {{-- other stuff on the right --}}
                <div class="col-8">stuff on the right</div>
            </div>
        </div>
        {{-- description and related products --}}
        <div class="container card">
            <div class="row">
                {{-- description --}}
                <div class="card col-9">
                    description
                </div>
                {{-- related products --}}
                <div class="card col-3">
                    related products
                </div>
            </div>
        </div>
    </div>
</x-base-layout>
