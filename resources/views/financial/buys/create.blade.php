@extends('financial.layouts.financial')

@section('title')
    فرم خرید
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">فرم خرید</h5>
            </div>
            <hr>
            @include('financial.sections.errors')
            <form action="{{ route('financial.buys.store') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="title">عنوان</label>
                        <input class="form-control" id="title" name="title" type="text" value="{{ old('title') }}" >
                    </div>

                    <div class="form-group col-md-4">
                        <label for="unit">واحد شمارش</label>
                        <input class="form-control" id="unit" name="unit" type="text" value="{{ old('unit') }}" >
                    </div>

                    <div class="form-group col-md-4">
                        <label for="number">تعداد</label>
                        <input class="form-control" id="number" name="number" type="text" value="{{ old('number') }}" >
                    </div>

                    <div class="form-group col-md-4">
                        <label for="unit_price">قیمت واحد</label>
                        <input class="form-control" id="unit_price" name="unit_price" type="text" value="{{ old('unit_price') }}" >
                    </div>

                    <div class="form-group col-md-4">
                        <label for="payment">مبلغ پرداختی</label>
                        <input class="form-control" id="payment" name="payment" type="text" value="{{ old('payment') }}" >
                    </div>

                    <div class="form-group col-md-4">
                        <label for="category_id">دسته بندی</label>
                        <select class="form-control" id="category_id" name="category_id">
                            <option value="" selected>---</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="description">توضیحات</label>
                        <textarea class="form-control" id="description" name="description">
                            {{ old('description') }}
                        </textarea>
                    </div>
                </div>

                <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                <a href="{{ route('financial.buys.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>

    </div>

@endsection
