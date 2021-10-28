@extends('admin.layouts.admin')

@section('title')
    ایجاد دسته جدید
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">ایجاد دسته جدید</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="title">عنوان</label>
                        <input class="form-control" id="title" name="title" type="text" value="{{ old('title') }}" >
                    </div>

                    <div class="form-group col-md-4">
                        <label for="slug">عنوان انگلیسی</label>
                        <input class="form-control" id="slug" name="slug" type="text" value="{{ old('slug') }}" >
                    </div>

                    <div class="form-group col-md-4">
                        <label for="parent_id">دسته ی والد</label>
                        <select class="form-control" id="parent_id" name="parent_id">
                            <option value="" selected>ندارد</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <button class="btn btn-outline-primary mt-5" type="submit">ثبت</button>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>

    </div>

@endsection
