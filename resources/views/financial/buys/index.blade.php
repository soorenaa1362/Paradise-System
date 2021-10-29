@extends('financial.layouts.financial')

@section('title')
    لیست خرید
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-md-0">لیست خرید</h5>
                <a class="btn btn-sm btn-outline-primary" href="{{route('financial.buys.create')}}">
                    <i class="fa fa-plus"></i>
                    فرم خرید
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>عنوان</th>
                            <th>تعداد</th>
                            <th>قیمت واحد</th>
                            <th>پرداختی</th>
                            <th>دسته بندی</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($buys as $key => $buy)
                            <tr>
                                <th>
                                    {{ $key+1 }}
                                </th>
                                <th>
                                    {{ $buy->title }}
                                </th>
                                <th>
                                    {{ $buy->number }}
                                </th>
                                <th>
                                    {{ $buy->unit_price }}
                                </th>
                                <th>
                                    {{ $buy->payment }}
                                </th>
                                <th>
                                    <span
                                        class="{{ $buy->getRawOriginal('category_id') ? 'text-success' : 'text-danger' }}">
                                        {{ $buy->category }}
                                    </span>
                                </th>
                                <th>                                    
                                    <a class="btn btn-sm btn-outline-info mr-3"
                                        href="{{ route('financial.buys.edit', $buy->id) }}">ویرایش</a>                                    
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
