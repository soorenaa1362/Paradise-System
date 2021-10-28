@extends('admin.layouts.admin')

@section('title')
    نمایش دسته بندی
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
                <h5 class="font-weight-bold">دسته : {{ $category->name }}</h5>
            </div>
            <hr>

            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="title">عنوان</label>
                    <input class="form-control" type="text" value="{{ $category->title }}" disabled>
                </div>

                <div class="form-group col-md-3">
                    <label for="slug">عنوان انگلیسی</label>
                    <input class="form-control" type="text" value="{{ $category->slug }}" disabled>
                </div>

                <div class="form-group col-md-3">
                    <label for="parent_id">دسته والد</label>
                    <select class="form-control" id="parent_id" name="parent_id">
                        {{-- <option value="1" {{ $category->getRawOriginal('parent_id') ? 'selected' : '' }}>فعال</option>
                        <option value="0" {{ $category->getRawOriginal('parent_id') ? 'selected' : '' }} >غیرفعال</option> --}}
                        <option value="">ندارد</option>
                        @foreach ($categories as $categoryItem)
                            <option value="{{ $categoryItem->id }}" 
                                @if($categoryItem->id == $category->parent_id) selected @endif>
                                {{ $categoryItem->title }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <a href="{{ route('admin.categories.index') }}" class="btn btn-dark mt-5">بازگشت</a>

        </div>

    </div>

@endsection
