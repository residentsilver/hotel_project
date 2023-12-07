@extends('layouts.adminbase')
@section('contents')
@auth
    {{-- ログインしている場合の表示 --}}
    <p>Welcome, {{ auth()->user()->name }}!</p>
@else
    {{-- ログインしていない場合の表示 --}}
    <p>Please log in to access this page.</p>
@endauth

  <table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>部屋タイプ</th>
        <th>宿泊可能人数</th>
        <th>部屋番号</th>
        <th>部屋イメージ</th>
    </tr>
    @foreach ($items as $item)
        <tr>
          <td>{{$item ->master_id}}</td>
          <td>{{$item ->room_name}}</td>
          <td>{{$item ->imitation}}</td>
     <!-- hasmany箇所 -->
          <td>
            @if ($item->Rooms !=null)
             <table width="100%">
                <tr>
                  @foreach($item->rooms as $obj)
                    <td>{{$obj->room_num}}</td>
                </tr>
              @endforeach
             </table>
            @endif
          </td>
          <td width="45%">
            <img width="55%"  src="{{ asset($item->room_image) }}" alt="Image">
        </td>
      </tr>
    @endforeach
</table>
@endsection