<x-base-layout>
    <style>
        #working div {
            outline: 1px solid black;
        }
    </style>
    <div id="working">
        {{-- main part --}}
        <div class="container card mb-5 py-2">
            <div class="row">
                {{-- photos --}}
                <div style="height: 334px" class="col-4">
                    {{theme()->getView('partials/product-library/_product-library', [
                        'medias' => $product->medias,
                    ])}}
                </div>
                {{-- other stuff on the right --}}
                <div class="col-8">
                    <div class="text-dark fw-bolder fs-4 mb-2">{{$product['name']}}</div>
                    <div class="fs-9">{{$product->purchase_count}} purchases</div>
                </div>
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
