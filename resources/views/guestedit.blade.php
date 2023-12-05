@extends('layouts.adminbase')

@section('contents')
    <div class="edit">
        <table>
            @csrf
            <tr>
                <th>お名前</th>
                <th>ご住所</th>
                <th>電話番号</th>
            </tr>

            {{-- @foreach ($guests as $guest) --}}
            {{-- コントローラーのfind()で取得したデータは単数形。なので単数形guestだし、foreach回すとバグるのでだめ --}}
            <tr>
                <form action="/guest/edit" method="post">
                    @csrf
                    <td><input type="text" name="name" value="{{ $guest->name }}"></td>

                    <td><input type="text" name="address" value="{{ $guest->address }}"></td>

                    <td><input type="text" name="tel" value="{{ $guest->tel }}"></td>

                    <td>
                        <input type="hidden" name="id" value="{{ $guest->guest_id }}">
                        <input type="submit" value="更新">
                    </td>
                </form>
            </tr>
            {{-- @endforeach --}}
        </table>


    </div>
@endsection
