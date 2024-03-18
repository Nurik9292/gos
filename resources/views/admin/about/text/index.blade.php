@extends('admin.layouts.index')

@section('content')
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">О нас</h1>
            </div>
        </div>
    </div>
    <div class="card card-body border-0 shadow mb-4">
        <h2 class="h5 mb-4">Обновить текст</h2>
        <form action="{{route('about-text.update', $aboutText->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="tm_text" class="form-label">Текст шапки TM</label>
                    <textarea class="form-control" id="tm_text"  rows="5" name="tm_text">{{$aboutText->tm_text}}</textarea>
                    @error('tm_text')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="ru_text" class="form-label">Текст шапки RU</label>
                    <textarea class="form-control" id="ru_text"  rows="5" name="ru_text">{{$aboutText->ru_text}}</textarea>
                    @error('ru_text')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="en_text" class="form-label">Текст шапки EN</label>
                        <textarea class="form-control" id="en_text"  rows="5" name="en_text">{{$aboutText->en_text}}</textarea>
                    @error('en_text')
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
