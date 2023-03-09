@extends('layouts.app')
{{-- 
@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('orders.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.orders.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.orders.inputs.number')</h5>
                    <span>{{ $order->number ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.orders.inputs.total')</h5>
                    <span>{{ $order->total ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.orders.inputs.user_id')</h5>
                    <span>{{ optional($order->user)->name ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('orders.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Order::class)
                <a href="{{ route('orders.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection --}}
