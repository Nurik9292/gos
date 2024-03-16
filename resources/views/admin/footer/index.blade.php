@extends('admin.layouts.index')

@section('content')
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Footer</h1>
            </div>
        </div>
    </div>
    <div class="card card-body border-0 shadow mb-4">
        <h2 class="h5 mb-4">Обновить footer</h2>
        <form action="{{route('footer.update', $footer)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="tm_content" class="form-label">Контент TM</label>
                    <textarea class="form-control" name="tm_content" id="tm_content" rows="3">{{$footer->tm_content}}</textarea>
                    @error('tm_content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ru_content" class="form-label">Контент RU</label>
                    <textarea class="form-control" name="ru_content" id="ru_content" rows="3">{{$footer->ru_content}}</textarea>
                    @error('ru_content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="en_content" class="form-label">Контент EN</label>
                    <textarea class="form-control" name="en_content" id="en_content" rows="3">{{$footer->en_content}}</textarea>
                    @error('en_content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mt-3">
                <button class="btn btn-info mt-2 animate-up-2" type="submit">Обновить</button>
            </div>
        </form>
    </div>
@endsection
