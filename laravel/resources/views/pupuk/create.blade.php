@extends('layouts.masterpupuk')
@section('content')

<div class="flex flex-wrap justify-center mt-4">
    <div class="p-4 w-full max-w-sm mb-3 bg-white rounded-md border border-gray-200 shadow-md sm:p-6 md:p-8 dark:bg-gray-800 dark:border-gray-700">
        <h4 class="text-1xl font-bold uppercase text-center mb-2">Tambah Data Pupuk</h4>
        <form action="{{ route('pupuk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if($errors->any())
                <div class="text-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="mb-3">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama Orang</label>
                <input type="text" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}">
                @error('name') 
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div> 
            <div class="mb-3">
                <label for="luaslahan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Luas Lahan Pupuk</label>
                <input type="text" id="luaslahan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control @error('luaslahan') is-invalid @enderror" name="luaslahan" value="{{ old('luaslahan') }}" >
                @error('luaslahan') 
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jumlah Pupuk</label>
                <input type="text" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-72 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlah') }}">
                @error('jumlah') 
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div> 
            <button type="submit" name="submit" class="text-white bg-primary hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mb-3">Tambah</button>
        </form>
</div>
</div>

@endsection