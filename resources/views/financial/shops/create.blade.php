@extends('financial.layouts.financial')

@section('title')
    فرم ثبت فروشگاه
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">فرم ثبت فروشگاه</h5>
            </div>
            <hr>
            @include('financial.sections.errors')
            <form action="{{ route('financial.shops.store') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="name">نام فروشگاه</label>
                        <input class="form-control" id="name" name="name" type="text" value="{{ old('name') }}" >
                    </div>

                    <div class="form-group col-md-4">
                        <label for="seller">فروشنده</label>
                        <input class="form-control" id="seller" name="seller" type="text" value="{{ old('seller') }}" >
                    </div>

                    <div class="form-group col-md-2">
                        <label for="mobile">موبایل</label>
                        <input class="form-control" id="mobile" name="mobile" type="text" value="{{ old('mobile') }}" >
                    </div>

                    <div class="form-group col-md-2">
                        <label for="phone">تلفن ثابت</label>
                        <input class="form-control" id="phone" name="phone" type="text" value="{{ old('phone') }}" >
                    </div>

                    <div class="form-group col-md-12">
                        <label for="address">آدرس</label>
                        <textarea class="form-control" id="address" name="address">
                            {{ old('address') }}
                        </textarea>
                    </div>
                </div>

                <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                <a href="{{ route('financial.shops.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>

    </div>

@endsection
