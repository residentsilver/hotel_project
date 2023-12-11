<x-app-layout>

    <!-- CSSの読み込み -->
    {{-- <x-slot name="head">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </x-slot> --}}

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Adminのダッシュボード
        </h2>
        <p style="color: red; margin-bottom:10px;">利用者用</p>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-white">Adminのダッシュボード</h1>
                    {{ __("ログインに成功しました!") }}

                    <div>ようこそ、{{ Auth::user()->name }}さん</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>