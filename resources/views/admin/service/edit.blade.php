@extends('admin.layouts.index')

@section('content')
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Услуги</h1>
            </div>
        </div>
    </div>
    <div class="card card-body border-0 shadow mb-4">
        <h2 class="h5 mb-4">Обновить услугу</h2>
        <form action="{{route('service.update', $service)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="tm_content" class="form-label">Контент TM</label>
                     <input type="text" class="form-control" id="ru_content" name="ru_content" value="{{$service->tm_content}}">
                    @error('tm_content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ru_content" class="form-label">Контент RU</label>
                     <input type="text" class="form-control" id="ru_content" name="ru_content" value="{{$service->ru_content}}">
                    @error('ru_content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="en_content" class="form-label">Контент EN</label>
                     <input type="text" class="form-control" id="en_content" name="en_content" value="{{$service->en_content}}">
                    @error('en_content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="formFile" class="form-label">Изображение</label>
                    <input class="form-control" name="image" type="file" id="formFile" accept="image/jpeg, image/jpg image/png" value="{{$service->image}}">
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
