@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
              <div class="card shadow">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">預測時間設定</h3>
                        </div>
                        <div class="col-4 text-right">
                        </div>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>ROUND</th>
                        <th>TITLE</th>
                        <th>START DATE</th>
                        <th>END DATE</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody class="list">
                        @foreach ($schedules as $schedule)
                        <tr>
                            <td>{{$schedule->id}}</td>
                            <td>{{$schedule->title}}</td>
                            <td>{{$schedule->start}}</td>
                            <td>{{$schedule->end}}</td>
                            <td><a href="{{ route('admin.schedules.edit', ['schedule'=> $schedule]) }}" class="btn btn-outline-default">edit</a></td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                </div>
              </div>
            </div>
          </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')

@endpush
