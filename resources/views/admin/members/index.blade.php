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
                            <h3 class="mb-0">Members Data</h3>
                        </div>
                        <div class="col-4 text-right">
                            <form action="{{ route('admin.god_series.update') }}" method="post">
                                @method('PUT')
                                @csrf
                                <button class="btn btn-outline-default"><i class="ni ni-cloud-download-95"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>FB ID</th>
                        <th>FB NAME</th>
                        <th>FB EMAIL</th>
                        <th>FULL NAME</th>
                        <th>PHONE</th>
                        <th>CODE</th>
                        <th>IP</th>
                        <th>UPDATED AT</th>
                        <th>PERFECT</th>
                        <th>GOD</th>
                      </tr>
                    </thead>
                    <tbody class="list">
                    @foreach ($members as $member)
                    <tr>
                        <td>{{$member->id}}</td>
                        <td>{{$member->fb_id}}</td>
                        <td>{{$member->fb_name}}</td>
                        <td>{{$member->fb_email}}</td>
                        <td>{{$member->name}}</td>
                        <td>{{$member->phone}}</td>
                        <td>{{$member->code}}</td>
                        <td>{{$member->ip}}</td>
                        <td>{{$member->updated_at}}</td>
                        <td><a href="{{ route('admin.perfect_series.show', ['member' => $member]) }}">DETAIL</a></td>
                        <td><a href="{{ route('admin.god_series.show', ['member' => $member]) }}">DETAIL</a></td>
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
