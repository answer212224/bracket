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
                            <h3 class="mb-0">戰況</h3>
                        </div>
                        <div class="col-4 text-right">
                            <form action="{{ route('admin.series.update') }}" method="post">
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
                        <th>INDEX ID</th>
                        <th>TOP TEAM</th>
                        <th>TOP TEAM WIN</th>
                        <th>DOWN TEAM WIN</th>
                        <th>DOWN TEAM</th>
                        <th>Conference</th>
                        <th>UPDATED AT</th>
                      </tr>
                    </thead>
                    <tbody class="list">
                        @foreach ($series as $serie)
                        <tr>
                            <td>{{$serie->index_id}}</td>
                            <th>
                                <div class="media align-items-center">
                                    <a href="https://tw.global.nba.com/teams/#!/{{$serie->topTeam->team_code}}" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="https://nba.udn.com/assets/img/teams/{{$serie->topTeam->team_abbr_en}}.svg">
                                    </a>
                                    <div class="media-body">
                                    <span class="name mb-0 text-sm">{{$serie->topTeam->team_name_zh}}</span>
                                    </div>
                                </div>
                            </th>
                            @if ($serie->top_team_win > $serie->down_team_win)
                                <td><span class="badge badge-success">{{$serie->top_team_win}}</span></td>
                                <td><span class="badge badge-warning">{{$serie->down_team_win}}</span></td>
                            @else
                            <td><span class="badge badge-warning">{{$serie->top_team_win}}</span></td>
                            <td><span class="badge badge-success">{{$serie->down_team_win}}</span></td>
                            @endif

                            <td>
                                <div class="media align-items-center">
                                    <a href="https://tw.global.nba.com/teams/#!/{{$serie->downTeam->team_code}}" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="https://nba.udn.com/assets/img/teams/{{$serie->downTeam->team_abbr_en}}.svg">
                                    </a>
                                    <div class="media-body">
                                    <span class="name mb-0 text-sm">{{$serie->downTeam->team_name_zh}}</span>
                                    </div>
                                </div>
                            </td>
                            <td>{{$serie->conference}}</td>
                            <td>{{$serie->updated_at}}</td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4 mx-auto">
                    {{ $series->links() }}
                </div>
              </div>
            </div>
          </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')

@endpush
