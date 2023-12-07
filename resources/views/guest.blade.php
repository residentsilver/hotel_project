@extends('layouts.adminbase')

@section('contents')
    <form action="/guest/add" method="POST" class="form-group addform">
        @if (count($errors) > 0)
            <p>入力に問題があります。再入力してください。</p>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        @endif
        <br>

        <table>
            @csrf
            {{-- name属性 = name --}}
            <label for="name">お名前</label>
            <input type="text" name="name" placeholder="お名前" class="form-control" required autofocus>
            <br>

            {{-- name属性 = address --}}
            <label for="address">ご住所</label>
            <input type="text" name="address" placeholder="ご住所" class="form-control" required>
            <br>


            {{-- name属性 = tel --}}
            <label for="tel">電話番号</label>
            <input type="tel" name="tel" placeholder="電話番号" class="form-control" required>
            <br>

            {{-- 確定ボタン --}}
            <input type="submit" value="登録" class="form-control-sm">

        </table>
    </form>

    <div class="table-wrap">
        <table>
            <th>お名前</th>
            <th>ご住所</th>
            <th>電話番号</th>
            @foreach ($guests as $guest)
                <tr>
                    <td>{{ $guest->name }}</td>
                    <td>{{ $guest->address }}</td>
                    <td>{{ $guest->tel }}</td>

                    <!--  更新ボタン -->
                    <td>
                        <form action="/guest/edit?id={{ $guest->guest_id }}" method="get">
                            {{-- <a href="/guest/edit?id={{$guest ->guest_id}}">更新</a> --}}
                            <input type="hidden" name="id" value="{{ $guest->guest_id }}">
                            <input type="submit" value="更新">
                        </form>
                    </td>

                    <!--  削除ボタン -->
                    <td>
                        <form action="{{ url('guest/' . $guest->guest_id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">
                                削除
                            </button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </table>
    </div>
@endsection

<style>
    /* テーブル */
    @media screen and (max-width: 991px) {
        .table-wrap {
            overflow-x: scroll;
        }
    }

    table {
        width: 80%;
        border-collapse: collapse;
        border-spacing: 0;
        white-space: nowrap;
        margin: auto;
    }

    table th {
        /*テーブルのth幅調整*/
        min-width: 140px;
    }

    table th,
    table td {
        padding: 10px 0;
        text-align: center;
        border: solid 1px #333;
    }


    /* table tr:nth-child(odd) {
            background-color: #eee;
        } */

    table th {
        background-color: #eee;
    }


    .addform {
        margin: auto auto 3vw;
        max-width: 80%;
    }

    form {
        margin: auto;
    }
</style>
