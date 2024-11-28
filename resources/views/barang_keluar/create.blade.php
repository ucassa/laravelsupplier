@extends('layouts.app')

@section('content')

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
        <form action="{{ route('barang_keluar.store') }}" method="POST">
            @csrf
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold text-gray-900">Tambahkan Data Barang Keluar</h2>
                <p class="mt-1 text-sm text-gray-600">Isi formulir ini dengan data barang keluar yang sesuai.</p>

                {{-- ID Barang --}}
                <div class="mt-5">
                    <label for="id_barang" class="block text-sm font-medium text-gray-900">ID Barang</label>
                    <div class="mt-2">
                        <input id="id_barang" name="id_barang" type="number" value="{{ old('id_barang') }}" required 
                               class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                {{-- Nama Barang --}}
                <div class="mt-5">
                    <label for="nama_barang" class="block text-sm font-medium text-gray-900">Nama Barang</label>
                    <div class="mt-2">
                        <input id="nama_barang" name="nama_barang" type="text" value="{{ old('nama_barang') }}" required 
                               class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                {{-- Tanggal Keluar --}}
                <div class="mt-5">
                    <label for="tgl_keluar" class="block text-sm font-medium text-gray-900">Tanggal Keluar</label>
                    <div class="mt-2">
                        <input id="tgl_keluar" name="tgl_keluar" type="date" value="{{ old('tgl_keluar') }}" required 
                               class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                {{-- Jumlah Keluar --}}
                <div class="mt-5">
                    <label for="jml_keluar" class="block text-sm font-medium text-gray-900">Jumlah Keluar</label>
                    <div class="mt-2">
                        <input id="jml_keluar" name="jml_keluar" type="number" value="{{ old('jml_keluar') }}" required 
                               class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                {{-- Lokasi --}}
                <div class="mt-5">
                    <label for="lokasi" class="block text-sm font-medium text-gray-900">Lokasi</label>
                    <div class="mt-2">
                        <input id="lokasi" name="lokasi" type="text" value="{{ old('lokasi') }}" required 
                               class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>

                {{-- Penerima --}}
                <div class="mt-5">
                    <label for="penerima" class="block text-sm font-medium text-gray-900">Penerima</label>
                    <div class="mt-2">
                        <input id="penerima" name="penerima" type="text" value="{{ old('penerima') }}" required 
                               class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-gray-300 placeholder-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm">
                    </div>
                </div>
            </div>

            {{-- Tombol --}}
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="button" class="text-sm font-semibold text-gray-900">Cancel</button>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:ring-2 focus-visible:ring-indigo-600">Save</button>
            </div>
        </form>
    </div>
</div>

@endsection
