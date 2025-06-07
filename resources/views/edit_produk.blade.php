<script src="https://cdn.tailwindcss.com"></script>

<div class="max-w-md mx-auto mt-20 bg-white p-6 rounded-lg shadow-md text-sm">
    <h1 class="text-lg font-semibold mb-4 text-gray-800">Edit Produk</h1>

    <form method="POST" action="{{ route('produk.update', $produk->id) }}">
        @csrf
        @method('PUT') 
        
        <div class="mb-4">
            <label for="nama" class="block mb-1 text-gray-700">Nama Produk</label>
            <input type="text" id="nama" name="nama" value="{{ $produk->nama }}"
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block mb-1 text-gray-700">Deskripsi</label>
            <textarea id="deskripsi" name="deskripsi"
                      class="w-full border border-gray-300 rounded px-3 py-2 h-24 resize-none focus:outline-none focus:ring-2 focus:ring-blue-400">{{ $produk->deskripsi }}</textarea>
        </div>

        <div class="mb-4">
            <label for="harga" class="block mb-1 text-gray-700">Harga</label>
            <input type="number" id="harga" name="harga" value="{{ $produk->harga }}"
                   class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="flex items-center">
            <button type="submit"
                    class="bg-green-500 hover:bg-green-600 text-white font-medium px-4 py-2 rounded shadow-sm transition duration-200">
                Update
            </button>
            <a href="{{ route('produk.list') }}"
               class="ml-4 text-blue-600 hover:underline text-sm">
                ← Kembali
            </a>
        </div>
    </form>
</div>
