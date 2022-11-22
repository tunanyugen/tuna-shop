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
                    {{ theme()->getView('partials/product-library/_product-library', [
                        'media' => $product->media,
                    ]) }}
                </div>
                {{-- other stuff on the right --}}
                <div class="col-8">
                    {{-- name --}}
                    <input type="text" class="form-control form-control-transparent px-0" name="name"
                        value="{{ $product->name }}">
                    {{-- purchase count --}}
                    <div class="fs-9 mb-2">{{ $product->purchase_count }} purchases</div>
                    {{-- variants --}}
                    <div class="d-flex align-items-center mb-4">
                        <span class="me-3">Variants: </span>
                        <div class="d-flex gap-2 ">
                            @php
                                $productVariantsContainerId = 'a' . uniqid();
                            @endphp
                            <div id="{{ $productVariantsContainerId }}"
                                class="product-variants-container d-flex flex-wrap gap-2">
                                @foreach ($product->product_variants as $item)
                                    <input type="text" class="product-variant-input" name="product_variants_names[]"
                                        value="{{ $item->name }}">
                                @endforeach
                            </div>
                            <button class="btn btn-sm btn-primary fw-bolder"
                                onclick="KTProductsCreate.appendInput('#{{ $productVariantsContainerId }}')">
                                <img style="filter: invert(1)" src="{{ asset('demo1/media/icons/duotune/custom/Plus.svg') }}" />
                            </button>
                        </div>
                    </div>
                    {{-- quantity --}}
                    <div class="d-flex mb-16">
                        <button disabled class="btn btn-sm btn-danger fw-bolder">-</button>
                        <div class="user-select-none d-flex align-items-center justify-content-center px-8">0</div>
                        <button disabled class="btn btn-sm btn-primary fw-bolder">+</button>
                    </div>
                    {{-- add to cart + buy now --}}
                    <div class="d-flex gap-8">
                        <a class="btn btn-danger"><span class="svg-icon svg-icon-1"><img style="filter: invert(1)"
                                    src="{{ asset('demo1/media/icons/duotune/ecommerce/ecm002.svg') }}" /></span>Add to
                            cart</a>
                        <a class="btn btn-primary">Buy now</a>
                    </div>

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
