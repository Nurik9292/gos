@extends('admin.layouts.index')

@section('content')
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Баннер о нас</h1>
            </div>
        </div>
    </div>
    <div class="card card-body border-0 shadow mb-4">
        <h2 class="h5 mb-4">Обновить баннер</h2>
        <form action="{{route('about-image.update', $aboutImage)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="formFile" class="form-label">Изображение</label>
                    <input class="form-control" name="image" type="file" id="formFile" accept="image/jpeg, image/jpg image/png" value="{{$aboutImage->image}}">
                    @error('image')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="mt-3">
                <button class="btn btn-info mt-2 animate-up-2" type="submit">Обновить</button>
            </div>
        </form>
    </div>
@endsection
