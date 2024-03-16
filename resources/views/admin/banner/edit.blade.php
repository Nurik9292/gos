@extends('admin.layouts.index')

@section('content')
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Баннер</h1>
            </div>
        </div>
    </div>
    <div class="card card-body border-0 shadow mb-4">
        <h2 class="h5 mb-4">Обновить баннер</h2>
        <form action="{{route('banner.update', $banner)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="tm_title" class="form-label">Заголовок TM</label>
                    <input type="text" class="form-control" id="tm_title" name="tm_title" value="{{$banner->tm_title}}">
                    @error('tm_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ru_title" class="form-label">Заголовок RU</label>
                    <input type="text" class="form-control" id="ru_title" name="ru_title" value="{{$banner->ru_title}}">
                    @error('ru_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="en_title" class="form-label">Заголовок En</label>
                    <textarea class="form-control" name="en_title" id="en_title" rows="3">{{$banner->en_title}}</textarea>
                    @error('en_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="tm_content" class="form-label">Контент TM</label>
                    <textarea class="form-control" name="tm_content" id="tm_content" rows="3">{{$banner->tm_content}}</textarea>
                    @error('tm_content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ru_content" class="form-label">Контент RU</label>
                    <textarea class="form-control" name="ru_content" id="ru_content" rows="3">{{$banner->ru_content}}</textarea>
                    @error('ru_content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="en_content" class="form-label">Контент En</label>
                    <textarea class="form-control" name="en_content" id="en_content" rows="3">{{$banner->en_content}}</textarea>
                    @error('tm_content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="formFile" class="form-label">Изображение</label>
                    <input class="form-control" name="image" type="file" id="formFile" accept="image/jpeg, image/jpg image/png" value="{{$banner->image}}">
                    @error('image')
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
