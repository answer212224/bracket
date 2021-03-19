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
                            <h3 class="mb-0">隊伍排行</h3>
                        </div>
                        <div class="col-4 text-right">
                            <form action="{{ route('admin.playoff.update') }}" method="post">
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
                        <th>Ranking</th>
                        <th>Conference</th>
                        <th>TEAM</th>
                        <th>TEAM ID</th>
                        <th>UPDATED AT</th>
                      </tr>
                    </thead>
                    <tbody class="list">
                        @foreach ($playoffTeams as $playoffTeam)
                        <tr>
                            <td>{{$playoffTeam->ranking}}</td>
                            <td>{{$playoffTeam->detail->conference}}</td>
                            <th>
                                <div class="media align-items-center">
                                    <a href="https://tw.global.nba.com/teams/#!/{{$playoffTeam->detail->team_code}}" class="avatar rounded-circle mr-3">
                                    <img alt="Image placeholder" src="https://nba.udn.com/assets/img/teams/{{$playoffTeam->detail->team_abbr_en}}.svg">
                                    </a>
                                    <div class="media-body">
                                    <span class="name mb-0 text-sm">{{$playoffTeam->detail->team_name_zh}}</span>
                                    </div>
                                </div>
                            </th>
                            <td>{{$playoffTeam->team_id}}</td>
                            <td>{{$playoffTeam->updated_at}}</td>
                      </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>

                <!-- Card footer -->
                <div class="card-footer py-4 mx-auto">
                    {{ $playoffTeams->links() }}
                </div>
              </div>
            </div>
          </div>

        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')

@endpush
