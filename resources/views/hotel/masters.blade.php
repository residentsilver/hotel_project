
@extends('layouts.hotelowner')

@section('title','Hotel.index')

@section('menubar')
    @parent
    部屋マスターを表示
@endsection


@section('content')
@if(Auth::check())
<p>ログインユーザ: {{$user->name . '('. $user->email . ')'}}</p>

@else
@endif
{{-- DBの内容を表示 --}}
  <table>
    <tr>
        <th>ID</th>
        <th>部屋タイプ</th>
        <th>宿泊可能人数</th>
        <th>部屋番号</th>
    </tr>
    @foreach ($items as $item)
        <tr>
          <td>{{$item ->master_id}}</td>
          <td>{{$item ->room_name}}</td>
          <td>{{$item ->imitation}}</td>
<!-- hasmany箇所 -->
<td>@if ($item->Rooms !=null)
            <table width="100%">
              <tr>
              @foreach($item->rooms as $obj)
                <td>{{$obj->room_num}}</td>
              </tr>
              @endforeach
              </table>
              @endif
          </td>
          <td>
            <img src="{{ asset($item->room_image) }}" alt="Image">
        </td>
        </tr>
    @endforeach
</table>
<table>
  



@endsection
