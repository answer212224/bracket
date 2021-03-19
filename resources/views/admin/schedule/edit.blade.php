@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
                <div class="col-xl-6 order-xl-1 mx-auto">
                    <div class="card bg-secondary shadow">
                        <div class="card-header border-0">
                            <div class="row align-items-center">
                                <h4 class="mb-0 ml-1">{{$schedule->title}}</h4>
                            </div>
                        </div>
                        <div class="card-body mx-auto">
                            <form action="{{ route('admin.schedules.update', ['schedule'=>$schedule]) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="input-daterange datepicker row align-items-center my-6">
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">START DATE</label>
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                                <input class="form-control" name="start" placeholder="Start date" type="text" value="{{$schedule->start}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-group">
                                            <label for="">END DATE</label>
                                            <div class="input-group input-group-alternative">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                                </div>
                                                <input class="form-control" name="end" placeholder="End date" type="text" value="{{$schedule->end}}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
<script src="{{ asset('js/bootstrap-datepicker.min.js') }}"></script>
<script>

    $('.datepicker').datepicker({
    format: 'yyyy-mm-dd',

});

</script>
@endpush
