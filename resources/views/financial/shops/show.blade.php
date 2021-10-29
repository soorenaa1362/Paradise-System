@extends('financial.layouts.financial')

@section('title')
    نمایش فروشگاه
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">نمایش فروشگاه</h5>
            </div>
            <hr>
            @include('financial.sections.errors')
            <form action="{{ route('financial.shops.store') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="name">نام فروشگاه</label>
                        <input class="form-control" type="text" value="{{ $shop->name }}" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="seller">فروشنده</label>
                        <input class="form-control" type="text" value="{{ $shop->seller }}" disabled>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="mobile">موبایل</label>
                        <input class="form-control" type="text" value="{{ $shop->mobile }}" disabled>
                    </div>

                    <div class="form-group col-md-2">
                        <label for="phone">تلفن ثابت</label>
                        <input class="form-control" type="text" value="{{ $shop->phone }}" disabled>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="address">آدرس</label>
                        <textarea class="form-control" disabled>
                            {{ $shop->address }}
                        </textarea>
                    </div>
                </div>

                <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                <a href="{{ route('financial.shops.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>

    </div>

@endsection
