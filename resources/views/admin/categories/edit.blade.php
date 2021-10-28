@extends('admin.layouts.admin')

@section('title')
    ویرایش دسته بندی
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="mb-4 text-center text-md-right">
            <h5 class="font-weight-bold">ویرایش دسته بندی {{ $category->name }}</h5>
            </div>
            <hr>
            @include('admin.sections.errors')
            <form action="{{ route('admin.categories.update' , ['category' => $category->id]) }}" method="POST">
                @csrf
                @method('put')
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="title">عنوان</label>
                        <input class="form-control" id="title" name="title" type="text" value="{{ $category->title }}">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="slug">عنوان انگلیسی</label>
                        <input class="form-control" id="slug" name="slug" type="text" value="{{ $category->slug }}">
                    </div>

                    <div class="form-group col-md-4">
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

                <button class="btn btn-outline-primary mt-5" type="submit">ویرایش</button>
                <a href="{{ route('admin.categories.index') }}" class="btn btn-dark mt-5 mr-3">بازگشت</a>
            </form>
        </div>

    </div>

@endsection
