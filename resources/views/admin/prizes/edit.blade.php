@extends('layouts.app')
@stack('js')
@section('content')
    @include('layouts.headers.cards')

    <div class="container-fluid mt--7">
        <form action="{{ route('admin.prizes.update', ['prize'=> $prize ]) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class=".col-xl-5 mx-auto">
                    <div class="card">
                        @if(empty($prize->img))
                        <img class="card-img-top" src="{{ asset('img/prize01.gif') }}" id="preview" alt="Card image cap">
                        @else
                        <img class="card-img-top" id="preview" src="{{ asset('storage/'. $prize->img) }}" alt="Card image cap">
                        @endif

                        <div class="form-group col-8 mx-auto">
                            <input name="input-img"  class="form-control form-control-alternative" type="file" id="prizeInput" accept="image/gif, image/jpeg, image/png" class="form-control-file mb-3" data-toggle="tooltip" data-placement="right" title="限制檔案大小為300kb">
                        </div>
                        <hr class>
                        <div class="card-body">
                                <div class="form-group">
                                    <label class="form-control-label" for="input-title">標題</label>
                                    <input type="text" value="{{$prize->title}}" name="input-title" id="input-title" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="標題" value="{{ old('title', $prize->title) }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-content">內容</label>
                                    <input type="text" value="{{$prize->content}}" name="input-content" id="input-content" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="內容" value="{{ old('title', $prize->title) }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label class="form-control-label" for="input-quantity">數量</label>
                                    <input type="number" value="{{$prize->quantity}}" name="input-quantity" id="input-quantity" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="0" value="{{ old('title') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">儲存</button>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </form>
        @include('layouts.footers.auth')
    </div>


@endsection

@push('js')
<script>
    $(document).ready(function() {

        $("#prizeInput").change(function(e) {
            readURL(e.target);

        });


        function readURL(input) {

            if(input.files.length == 0){
                alert('並未上傳圖檔');
                location.reload();
            }
            if (input.files && input.files[0] && input.files[0].size < 300 * 1024) {
                var reader = new FileReader();
                reader.onload = function(e) {

                    $("#preview").attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            } else if(input.files[0].size > 200 * 1024){
                alert('檔案超過 200 kb');
                location.reload();
            }else{
                alert('unknow')
            }
        }
    });
</script>

@endpush
