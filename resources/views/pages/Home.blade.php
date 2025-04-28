@extends('layouts.app')

@section('title', 'Home')
@section('page_title', 'Selamat datang di Berita Batam')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Selamat Pagi</h1>
    <p class="mb-4">Berikut adalah berita update di hari ini</p>

    @include('components.card', [
        'imgsrc' => 'images/studio 1.jpeg',
        'title' => 'Gonggong goreng Tepung mak Limah',
        'description' => 'Kuliner unik satu ini wajib dicoba untuk menguji ketahanan gigi.'
    ])
@endsection

