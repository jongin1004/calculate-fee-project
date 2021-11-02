@extends('layout.main')

@section('content')        
    <div class="justify-center w-5/6">  
        <div>
            <strong class="text-4xl">データページ</strong>
        </div>    
        <div class="py-4">
            <form action="{{ route('data-search') }}" method="post">
                @csrf
                <div class="search_container">
                    <input type="text" name="search" placeholder="Search" class="border-2 border-gray-800 rounded-md w-64 pl-8 w-full">                
                    <i class="fas fa-search" id="search"></i>    
                </div>                            
            </form>
        </div>

        @if ($message = Session::get('error'))
            <div class="alert alert-success alert-block">
                <p><strong>注意</strong></p>
                <small>{{ $message }}</small>
            </div>
        @endif
        
        <table class="table w-full mt-4">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">会社名</th>
                    <th scope="col">住所</th>
                    <th scope="col">料金</th>
                </tr>
            </thead>
            <tbody>         
                @if(count($datas) > 0)       
                    @foreach ($datas as $data)                    
                        <tr>
                            <th scope="row" style="width: 50px;">{{ $data -> id }}</th>
                            <td style="width: 300px;">
                                <span class="ellipsis">{{ $data -> name }}</span>
                            </td>
                            <td style="width: 300px;">
                                <span class="ellipsis">{{ $data -> address }}</span>
                            </td>
                            <td style="width: 100px;">{{ $data -> price }}</td>
                        </tr>                            
                    @endforeach   
                @else
                    <tr>
                        <td scope="row" colspan="4">{{ "データがありません。" }}</td>
                    </tr>                    
                @endif                                 
            </tbody>                
        </table>
        
        <div class="d-flex justify-content-center w-full" id="pagination">
            {!! $datas->render() !!}
        </div>
    </div>
    
@endsection