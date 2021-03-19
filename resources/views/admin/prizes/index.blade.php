@extends('layouts.app', ['title' => __('獎品總攬')])
@stack('js')
@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        <div class="row">
            @foreach ($prizes as $prize)
            <div class="col-xl-3 col-lg-4">
                <div class="card mt-5">
                    @if(empty($prize->img))
                        <img class="card-img-top" src="{{ asset('img/prize01.gif') }}" alt="Card image cap">
                    @else
                        <img class="card-img-top" src="{{ asset('storage/'. $prize->img) }}" alt="Card image cap">
                    @endif
                    <div class="card-body">
                        <h2 class="card-title">標題 : {{$prize->title}}</h2>
                        <p class="card-text">內容 : {{$prize->content}}</p>
                        <p class="card-text">數量 : {{$prize->quantity}}</p>
                        <div class="text-center">
                            <a href="{{ route('admin.prizes.edit', ['prize'=> $prize ]) }}" class="btn btn-lg btn-block btn-outline-default">編輯</a>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @include('layouts.footers.auth')
    </div>

@endsection

@push('js')

@endpush
