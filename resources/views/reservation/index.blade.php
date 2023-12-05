@extends('layouts.adminbase')

@section('contents')
    <table class="table">
        <thead class="table-dark">
            <th>予約ID</th>
            <th>お客様ID</th>
            <th>利用者名</th>
            <th>電話番号</th>
            <th>人数</th>
            <th>部屋種ID</th>
            <th>部屋番号</th>
            <th>チェックイン</th>
            <th>チェックアウト</th>
        </thead>
        <tbody>
            @foreach($items as $item)
    <tr>
        <th>{{$item->reservation_id}}</th>
        <td>{{$item->guest->guest_id}}</td>
        <td>{{$item->guest->name}}</td>
        <td>{{$item->guest->tel}}</td>
        <td>{{$item->people}}</td>
        <td></td>
        <td></td>
        <td>{{$item->checkin}}</td>
        <td>{{$item->checkout}}</td>
    </tr>
    @endforeach
        </tbody>
    
    
    </table>
    
@endsection