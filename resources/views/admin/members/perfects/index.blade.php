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
                        </div>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>#</th>
                        <th>INDEX ID</th>
                        <th>TOPTEAM</th>
                        <th>WIN</th>
                        <th>DOWNTEAM</th>
                        <th>WIN</th>
                        <th>IP</th>
                        <th>UPDATE TIME</th>
                      </tr>
                    </thead>
                    <tbody class="list">
                    @foreach ($perfectSeries as $perfectSerie)
                    <tr>
                        <td>{{$perfectSerie->id}}</td>
                        <td>{{$perfectSerie->index_id}}</td>
                        <th>
                            <div class="media align-items-center">
                                <a href="https://tw.global.nba.com/teams/#!/{{$perfectSerie->topTeam->team_code}}" class="avatar rounded-circle mr-3">
                                <img alt="Image placeholder" src="https://nba.udn.com/assets/img/teams/{{$perfectSerie->topTeam->team_abbr_en}}.svg">
                                </a>
                                <div class="media-body">
                                <span class="name mb-0 text-sm">{{$perfectSerie->topTeam->team_name_zh}}</span>
                                </div>
                            </div>
                        </th>
                        <td>{{$perfectSerie->top_team_win}}</td>
                        <th>
                            <div class="media align-items-center">
                                <a href="https://tw.global.nba.com/teams/#!/{{$perfectSerie->downTeam->team_code}}" class="avatar rounded-circle mr-3">
                                <img alt="Image placeholder" src="https://nba.udn.com/assets/img/teams/{{$perfectSerie->downTeam->team_abbr_en}}.svg">
                                </a>
                                <div class="media-body">
                                <span class="name mb-0 text-sm">{{$perfectSerie->downTeam->team_name_zh}}</span>
                                </div>
                            </div>
                        </th>
                        <td>{{$perfectSerie->down_team_win}}</td>
                        <td>{{$perfectSerie->ip}}</td>
                        <td>{{$perfectSerie->updated_at}}</td>
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
