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
   <form action="{{ route('barang_masuk.update', ['barang_masuk' => $barang_masuk->id]) }}" method="POST">
     @csrf
     @method('put')
     <div class="border-b border-gray-900/10 pb-12">
       <h2 class="text-base/7 font-semibold text-gray-900">Edit Barang Masuk</h2>
       <p class="mt-1 text-sm/6 text-gray-600">Update the necessary information carefully.</p>

       <div class="mt-10">
         <label for="id_supplier" class="block text-sm/6 font-medium text-gray-900">ID Barang</label>
         <div class="mt-2">
           <input id="id_supplier" name="id_supplier" type="text" value="{{ old('id_supplier', $barang_masuk->id_supplier) }}" class="block w-full rounded-md" readonly>
         </div>
       </div>

       <div class="mt-5">
         <label for="nama_barang" class="block text-sm/6 font-medium text-gray-900">Nama Barang</label>
         <div class="mt-2">
           <input id="nama_barang" name="nama_barang" type="text" value="{{ old('nama_barang', $barang_masuk->nama_barang) }}" class="block w-full rounded-md">
         </div>
       </div>

       <div class="mt-5">
         <label for="jml_masuk" class="block text-sm/6 font-medium text-gray-900">jml_masuk</label>
         <div class="mt-2">
           <input id="jml_masuk" name="jml_masuk" type="number" value="{{ old('jml_masuk', $barang_masuk->jml_masuk) }}" class="block w-full rounded-md">
         </div>
       </div>

       <div class="mt-5">
         <label for="tgl_masuk" class="block text-sm/6 font-medium text-gray-900">Tanggal Masuk</label>
         <div class="mt-2">
           <input id="tgl_masuk" name="tgl_masuk" type="date" value="{{ old('tgl_masuk', $barang_masuk->tgl_masuk) }}" class="block w-full rounded-md">
         </div>
       </div>
     </div>

     <div class="mt-6 flex items-center justify-end gap-x-6">
       <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
       <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white">Update</button>
     </div>
   </form>
 </div>
</div>
@endsection
