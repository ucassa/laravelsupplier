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
   <form action="{{ route('barang_keluar.update', ['barang_keluar' => $barang_keluar->id_barang]) }}" method="POST">
     @csrf
     @method('put')
     <div class="border-b border-gray-900/10 pb-12">
       <h2 class="text-base font-semibold text-gray-900">Edit Barang Keluar</h2>
       <p class="mt-1 text-sm text-gray-600">Update the necessary information carefully.</p>

       {{-- ID Barang --}}
       <div class="mt-10">
         <label for="id_barang" class="block text-sm font-medium text-gray-900">ID Barang</label>
         <div class="mt-2">
           <input id="id_barang" name="id_barang" type="text" value="{{ old('id_barang', $barang_keluar->id_barang) }}" class="block w-full rounded-md" readonly>
         </div>
       </div>

       {{-- Nama Barang --}}
       <div class="mt-5">
         <label for="nama_barang" class="block text-sm font-medium text-gray-900">Nama Barang</label>
         <div class="mt-2">
           <input id="nama_barang" name="nama_barang" type="text" value="{{ old('nama_barang', $barang_keluar->nama_barang) }}" class="block w-full rounded-md">
         </div>
       </div>

       {{-- Jumlah Keluar --}}
       <div class="mt-5">
         <label for="jml_keluar" class="block text-sm font-medium text-gray-900">Jumlah Keluar</label>
         <div class="mt-2">
           <input id="jml_keluar" name="jml_keluar" type="number" value="{{ old('jml_keluar', $barang_keluar->jml_keluar) }}" class="block w-full rounded-md">
         </div>
       </div>

       {{-- Tanggal Keluar --}}
       <div class="mt-5">
         <label for="tgl_keluar" class="block text-sm font-medium text-gray-900">Tanggal Keluar</label>
         <div class="mt-2">
           <input id="tgl_keluar" name="tgl_keluar" type="date" value="{{ old('tgl_keluar', $barang_keluar->tgl_keluar) }}" class="block w-full rounded-md">
         </div>
       </div>

       {{-- Lokasi --}}
       <div class="mt-5">
         <label for="lokasi" class="block text-sm font-medium text-gray-900">Lokasi</label>
         <div class="mt-2">
           <input id="lokasi" name="lokasi" type="text" value="{{ old('lokasi', $barang_keluar->lokasi) }}" class="block w-full rounded-md">
         </div>
       </div>

       {{-- Penerima --}}
       <div class="mt-5">
         <label for="penerima" class="block text-sm font-medium text-gray-900">Penerima</label>
         <div class="mt-2">
           <input id="penerima" name="penerima" type="text" value="{{ old('penerima', $barang_keluar->penerima) }}" class="block w-full rounded-md">
         </div>
       </div>

     </div>

     {{-- Buttons --}}
     <div class="mt-6 flex items-center justify-end gap-x-6">
       <button type="button" class="text-sm font-semibold text-gray-900">Cancel</button>
       <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white">Update</button>
     </div>
   </form>
 </div>
</div>

@endsection
