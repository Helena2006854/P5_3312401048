@extends('layouts.app')

@section('content')
<div class="ml-10 mt-20">
    <h1 class="text-2xl font-bold mb-4 text-orange-600">Daftar Produk</h1>
    <table class="min-w-[80%] border border-orange-400 shadow-lg rounded-lg overflow-hidden">
        <thead>
            <tr class="bg-orange-500 text-white">
                <th class="px-6 py-3 text-left text-sm font-semibold">No</th>
                <th class="px-6 py-3 text-left text-sm font-semibold">Nama Produk</th>
                <th class="px-6 py-3 text-left text-sm font-semibold">Deskripsi Produk</th>
                <th class="px-6 py-3 text-left text-sm font-semibold">Harga Produk</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nama as $index => $item)
            <tr class="bg-yellow-100 border-b border-orange-300 hover:bg-yellow-200">
                <td class="px-6 py-4">{{ $index + 1 }}</td>
                <td class="px-6 py-4">{{ $item }}</td>
                <td class="px-6 py-4">{{ $desc[$index] }}</td>
                <td class="px-6 py-4">{{ $harga[$index] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
