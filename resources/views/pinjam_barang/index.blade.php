@extends('layouts.app')

@section('content')
<!-- component -->
<div class="max-w-[720px] mx-auto py-32 sm:py-8 lg:py-16">
  <div class="w-full flex justify-between items-center mb-3 mt-1 pl-3">
    <div>
      <h3 class="text-lg font-semibold text-slate-800">Data Peminjaman Barang</h3>
      <p class="text-slate-500">Daftar barang yang dipinjam oleh pengguna.</p>
    </div>
    <div class="ml-3">
      <div class="w-full max-w-sm min-w-[200px] relative">
        <div class="relative">
          <input
            class="bg-white w-full pr-11 h-10 pl-3 py-2 bg-transparent placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded transition duration-200 ease focus:outline-none focus:border-slate-400 hover:border-slate-400 shadow-sm focus:shadow-md"
            placeholder="Cari data pinjam_barang..."
          />
          <button
            class="absolute h-8 w-8 right-1 top-1 my-auto px-2 flex items-center bg-white rounded"
            type="button"
          >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor" class="w-8 h-8 text-slate-600">
              <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>

  <div class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md rounded-lg bg-clip-border">
    <table class="w-full text-left table-auto min-w-max">
      <thead>
        <tr>
          <th class="p-4 border-b border-slate-200 bg-slate-50">
            <p class="text-sm font-normal leading-none text-slate-500">No</p>
          </th>
          <th class="p-4 border-b border-slate-200 bg-slate-50">
            <p class="text-sm font-normal leading-none text-slate-500">Peminjam</p>
          </th>
          <th class="p-4 border-b border-slate-200 bg-slate-50">
            <p class="text-sm font-normal leading-none text-slate-500">Tanggal Pinjam</p>
          </th>
          <th class="p-4 border-b border-slate-200 bg-slate-50">
            <p class="text-sm font-normal leading-none text-slate-500">Nama Barang</p>
          </th>
          <th class="p-4 border-b border-slate-200 bg-slate-50">
            <p class="text-sm font-normal leading-none text-slate-500">Jumlah Barang</p>
          </th>
          <th class="p-4 border-b border-slate-200 bg-slate-50">
            <p class="text-sm font-normal leading-none text-slate-500">Kondisi Barang</p>
          </th>
          <th class="p-4 border-b border-slate-200 bg-slate-50">
            <p class="text-sm font-normal leading-none text-slate-500">Edit</p>
          </th>
          <th class="p-4 border-b border-slate-200 bg-slate-50">
            <p class="text-sm font-normal leading-none text-slate-500">Hapus</p>
          </th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pinjam_barangs as $pinjam_barang)
        <tr class="hover:bg-slate-50 border-b border-slate-200">
          <td class="p-4 py-5">
            <p class="text-sm text-slate-500">{{ $loop->iteration }}</p>
          </td>
          <td class="p-4 py-5">
            <p class="text-sm text-slate-500">{{ $pinjam_barang->peminjam }}</p>
          </td>
          <td class="p-4 py-5">
            <p class="text-sm text-slate-500">{{ $pinjam_barang->tgl_pinjam }}</p>
          </td>
          <td class="p-4 py-5">
            <p class="text-sm text-slate-500">{{ $pinjam_barang->nama_barang }}</p>
          </td>
          <td class="p-4 py-5">
            <p class="text-sm text-slate-500">{{ $pinjam_barang->jml_barang }}</p>
          </td>
          <td class="p-4 py-5">
            <p class="text-sm text-slate-500">{{ $pinjam_barang->kondisi }}</p>
          </td>
          <td class="p-4 py-5">
            <a href="{{ route('pinjam_barang.edit', $pinjam_barang->id) }}" class="font-medium text-blue-600 hover:text-blue-800">Edit</a>
          </td>
          <td class="p-4 py-5">
            <a href="{{ route('pinjam_barang.destroy', $pinjam_barang->id) }}" class="font-medium text-blue-600 hover:text-blue-800" onclick="event.preventDefault(); if(confirm('Hapus pinjam_barang ini?')) { document.getElementById('delete-form-{{ $pinjam_barang->id }}').submit(); }">Hapus</a>
            <form id="delete-form-{{ $pinjam_barang->id }}" action="{{ route('pinjam_barang.destroy', $pinjam_barang->id) }}" method="POST" style="display: none;">
              @csrf
              @method('DELETE')
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <div class="relative flex flex-col w-full h-full justify-between items-center mt-5">
    <button class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded items-center">
      <a href="{{ route('pinjam_barang.create') }}">Tambah Data pinjam_barang</a>
    </button>
  </div>
</div>
@endsection
