@extends('layout')
@section('title')
    Products Page
@endsection
@section('content')
    <div class="float-end" style="margin-right: 10pt; margin-top:10pt">
        <a href="{{ route('products.index') }}" style="margin-right: 10pt" class="btn btn-outline-danger">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg"
                viewBox="0 0 16 16">
                <path
                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
            </svg></a>
    </div>

    <div class="card-body" style="margin-left: 40pt; margin-right:; padding-top:40pt">
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">

            @csrf

            <div class="form-group mb-3">
                <label class="font-weight-bold">IMAGE</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">

                <!-- error message untuk image -->
                @error('image')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label class="font-weight-bold">name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" placeholder="Masukkan Judul Product">

                <!-- error message untuk name -->
                @error('name')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-3">
                <label class="font-weight-bold">DESCRIPTION</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" rows="5"
                    placeholder="Masukkan Description Product">{{ old('description') }}</textarea>

                <!-- error message untuk description -->
                @error('description')
                    <div class="alert alert-danger mt-2">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">PRICE</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                            value="{{ old('price') }}" placeholder="Masukkan Harga Product">

                        <!-- error message untuk price -->
                        @error('price')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">STOCK</label>
                        <input type="number" class="form-control @error('stock') is-invalid @enderror" name="stock"
                            value="{{ old('stock') }}" placeholder="Masukkan Stock Product">

                        <!-- error message untuk stock -->
                        @error('stock')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group mb-3">
                        <label class="font-weight-bold">ID Satuan</label>


                        {{-- <p>{{ $kode }}</p> --}}
                        {{-- <p x-text="kode"></p> --}}
                        <select name="unitId" id="unitId">
                            <option value="">Select</option>
                            @forelse ($satuans as $item)
                                <option value="{{ $item->id }}">

                                    {{ $item->satuan }}
                                </option>
                            @endforeach
                        </select>

                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-md btn-primary me-3">SAVE</button>
            <button type="reset" class="btn btn-md btn-warning">RESET</button>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
