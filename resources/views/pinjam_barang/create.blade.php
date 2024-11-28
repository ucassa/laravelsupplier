@extends('layouts.app')

@section('content')
<!-- component -->

@if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="max-w-[720px] mx-auto py-32 sm:py-8 lg:py-16">
    <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border px-6 py-6">
        {{-- Form --}}
        <form action="{{ route('stok.store') }}" method="POST">
            @csrf
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Add Stock Data</h2>
                <p class="mt-1 text-sm/6 text-gray-600">Fill in the details of the stock below carefully.</p>

                {{-- ID Barang --}}
                <div class="mt-10 col-span-full gap-y-8">
                    <label for="id_barang" class="block text-sm/6 font-medium text-gray-900">ID Barang</label>
                    <div class="mt-2">
                        <input id="id_barang" name="id_barang" type="text" autocomplete="id_barang" value="{{ old('id_barang') }}" required class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                {{-- Nama Barang --}}
                <div class="mt-5 col-span-full gap-y-8">
                    <label for="nama_barang" class="block text-sm/6 font-medium text-gray-900">Nama Barang</label>
                    <div class="mt-2">
                        <input id="nama_barang" name="nama_barang" type="text" autocomplete="nama_barang" value="{{ old('nama_barang') }}" required class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                {{-- Jumlah Masuk --}}
                <div class="mt-5 col-span-full gap-y-8">
                    <label for="jml_masuk" class="block text-sm/6 font-medium text-gray-900">Jumlah Masuk</label>
                    <div class="mt-2">
                        <input id="jml_masuk" name="jml_masuk" type="number" autocomplete="jml_masuk" value="{{ old('jml_masuk') }}" required class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                {{-- Jumlah Keluar --}}
                <div class="mt-5 col-span-full gap-y-8">
                    <label for="jml_keluar" class="block text-sm/6 font-medium text-gray-900">Jumlah Keluar</label>
                    <div class="mt-2">
                        <input id="jml_keluar" name="jml_keluar" type="number" autocomplete="jml_keluar" value="{{ old('jml_keluar') }}" required class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>

                {{-- Total Barang --}}
                <div class="mt-5 col-span-full gap-y-8">
                    <label for="total_barang" class="block text-sm/6 font-medium text-gray-900">Total Barang</label>
                    <div class="mt-2">
                        <input id="total_barang" name="total_barang" type="number" autocomplete="total_barang" value="{{ old('total_barang') }}" required class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
                    </div>
                </div>

            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('stok.index') }}" class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection
