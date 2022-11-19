<x-base-layout>
    <style>
        #working div {
            outline: 1px solid black;
        }
    </style>
    <div id="working">
        {{-- main part --}}
        <div class="container card mb-5">
            <div class="row">
                {{-- photos --}}
                <div style="height: 334px" class="col-4">
                    {{-- main photo --}}
                    <div class="h-75 d-flex align-items-center justify-content-center">
                        <img src="{{asset('demo1/media/icons/duotune/custom/Plus.svg')}}">
                    </div>
                    {{-- smaller photos --}}
                    <div class="h-25 d-flex align-items-center justify-content-center">
                        <img src="{{asset('demo1/media/icons/duotune/custom/Plus.svg')}}">
                    </div>
                </div>
                {{-- other stuff on the right --}}
                <div class="col-8">stuff on the right</div>
            </div>
        </div>
        {{-- description and related products --}}
        <div class="container">
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
