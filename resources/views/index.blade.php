@extends('layout.main')

@section('content')
    <div>
        <div class="pb-12">
            <strong class="text-4xl">料金計算処理プログラム</strong> 
        </div>
        <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group pb-4" style="max-width: 500px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>

            <button class="btn btn-primary mb-2">アップロード</button>
            <a class="btn btn-success mb-2" href="{{ route('file-export') }}">ダウンロード</a>
            <a class="btn btn-success mb-2" href="{{ route('data-show') }}">データページ</a>
            <a class="btn btn-warning mb-2 text-white" href="{{ route('file-reset') }}">データリセット</a>
        </form>
        
        @if ($message = Session::get('error'))
        <div class="alert alert-success alert-block">
            <p><strong>注意</strong></p>
            <small>{{ $message }}</small>
        </div>
        @elseif ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <p><strong>成功</strong></p>
                <small>{{ $message }}</small>
            </div>
        @endif
        
    </div>
@endsection