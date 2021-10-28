@extends('admin.layouts.admin')

@section('title')
    دسته بندی ها
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-md-0">دسته بندی ها</h5>
                <a class="btn btn-sm btn-outline-primary" href="{{route('admin.categories.create')}}">
                    <i class="fa fa-plus"></i>
                    ایجاد دسته جدید
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">

                    <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>عنوان</th>
                            <th>نام انگلیسی</th>
                            <th>دسته والد</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $key => $category)
                            <tr>
                                <th>
                                    {{ $key+1 }}
                                </th>
                                <th>
                                    {{ $category->title }}
                                </th>
                                <th>
                                    {{ $category->slug }}
                                </th>
                                <th>
                                    <span
                                        class="{{ $category->getRawOriginal('parent_id') ? 'text-success' : 'text-danger' }}">
                                        {{ $category->parent }}
                                    </span>
                                </th>
                                <th>                                    
                                    <a class="btn btn-sm btn-outline-info mr-3"
                                        href="{{ route('admin.categories.edit', $category->id) }}">ویرایش</a>                                    
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-center mt-5">
                {{-- {{ $categories->render() }} --}}
            </div>
        </div>
    </div>
@endsection
