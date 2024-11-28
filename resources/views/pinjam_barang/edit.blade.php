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
   <form action="{{ route('peminjaman.update', $peminjaman->id) }}" method="POST">
     @csrf
     @method('PUT')

     <div class="border-b border-gray-900/10 pb-12">
       <h2 class="text-base/7 font-semibold text-gray-900">Edit Data Peminjaman Barang</h2>
       <p class="mt-1 text-sm/6 text-gray-600">Perbarui informasi peminjaman barang dengan benar.</p>

       <!-- Pemohon -->
       <div class="mt-10 col-span-full gap-y-8">
         <label for="pemohon" class="block text-sm/6 font-medium text-gray-900">Pemohon</label>
         <div class="mt-2">
           <input id="pemohon" name="pemohon" type="text" value="{{ old('pemohon', $peminjaman->pemohon) }}" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
         </div>
       </div>

       <!-- Tanggal Pinjam -->
       <div class="mt-5 col-span-full gap-y-8">
         <label for="tanggalPinjam" class="block text-sm/6 font-medium text-gray-900">Tanggal Pinjam</label>
         <div class="mt-2">
           <input id="tanggalPinjam" name="tanggal_pinjam" type="date" value="{{ old('tanggal_pinjam', $peminjaman->tanggal_pinjam) }}" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
         </div>
       </div>

       <!-- Barang -->
       <div class="mt-5 col-span-full gap-y-8">
         <label for="barang" class="block text-sm/6 font-medium text-gray-900">Barang</label>
         <div class="mt-2">
           <select id="barang" name="barang" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
             <option value="">Pilih Barang</option>
             @foreach ($barang as $item)
                 <option value="{{ $item->id }}" {{ $peminjaman->barang_id == $item->id ? 'selected' : '' }}>
                     {{ $item->nama_barang }}
                 </option>
             @endforeach
           </select>
         </div>
       </div>

       <!-- Jumlah Barang -->
       <div class="mt-5 col-span-full gap-y-8">
         <label for="jumlahBarang" class="block text-sm/6 font-medium text-gray-900">Jumlah Barang</label>
         <div class="mt-2">
           <input id="jumlahBarang" name="jumlah_barang" type="number" value="{{ old('jumlah_barang', $peminjaman->jumlah_barang) }}" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
         </div>
       </div>

       <!-- Kondisi Barang -->
       <div class="mt-5 col-span-full gap-y-8">
         <label for="kondisiBarang" class="block text-sm/6 font-medium text-gray-900">Kondisi Barang</label>
         <div class="mt-2">
           <input id="kondisiBarang" name="kondisi_barang" type="text" value="{{ old('kondisi_barang', $peminjaman->kondisi_barang) }}" class="block w-full rounded-md border-0 py-1.5 pl-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
         </div>
       </div>
     </div>

     <!-- Tombol -->
     <div class="mt-6 flex items-center justify-end gap-x-6">
       <button type="button" class="text-sm/6 font-semibold text-gray-900">Batal</button>
       <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Simpan</button>
     </div>
   </form>
 </div>
</div>
@endsection
