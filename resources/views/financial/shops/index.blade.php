@extends('financial.layouts.financial')

@section('title')
    لیست فروشگاه ها
@endsection

@section('content')

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-md-12 mb-4 p-4 bg-white">
            <div class="d-flex flex-column text-center flex-md-row justify-content-md-between mb-4">
                <h5 class="font-weight-bold mb-3 mb-md-0">لیست فروشگاه ها</h5>
                <a class="btn btn-sm btn-outline-primary" href="{{route('financial.shops.create')}}">
                    <i class="fa fa-plus"></i>
                    فرم ثبت فروشگاه
                </a>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">

                    <thead>
                        <tr>
                            <th>#</th>
                            <th>نام فروشگاه</th>
                            <th>فروشنده</th>
                            <th>موبایل</th>
                            <th>تلفن ثابت</th>
                            <th>عملیات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($shops as $key => $shop)
                            <tr>
                                <th>
                                    {{ $key+1 }}
                                </th>
                                <th>
                                    {{ $shop->name }}
                                </th>
                                <th>
                                    {{ $shop->seller }}
                                </th>
                                <th>
                                    {{ $shop->mobile }}
                                </th>
                                <th>
                                    {{ $shop->phone }}
                                </th>
                                <th>                                    
                                    <a class="btn btn-sm btn-outline-success mr-3"
                                        href="{{ route('financial.shops.show', $shop->id) }}">نمایش</a>                                    
                                    <a class="btn btn-sm btn-outline-info mr-3"
                                        href="{{ route('financial.shops.edit', $shop->id) }}">ویرایش</a>                                    
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
