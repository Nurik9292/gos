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
        <form action="{{route('footer-contact.update', $footerContent)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="tel" class="form-label">Телефон</label>
                    <input type="text" class="form-control" id="tel" name="tel" value="{{$footerContent->tel}}">
                    @error('tel')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">Почта</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{$footerContent->email}}">
                    @error('email')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="address_tm" class="form-label">Адрес TM</label>
                    <input type="text" class="form-control" id="address_tm" name="address_tm" value="{{$footerContent->address_tm}}">
                    @error('address_tm')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="address_ru" class="form-label">Адрес RU</label>
                    <input type="text" class="form-control" id="address_ru" name="address_ru" value="{{$footerContent->address_ru}}">
                    @error('address_ru')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="address_en" class="form-label">Адрес EN</label>
                    <input type="text" class="form-control" id="address_en" name="address_en" value="{{$footerContent->address_en}}">
                    @error('address_en')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="work_tm" class="form-label">Рабочие часы TM</label>
                    <input type="text" class="form-control" id="work_tm" name="work_tm" value="{{$footerContent->work_tm}}">
                    @error('work_tm')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 mb-3">
                    <label for="work_ru" class="form-label">Рабочие часы RU</label>
                    <input type="text" class="form-control" id="work_ru" name="work_ru" value="{{$footerContent->work_ru}}">
                    @error('work_ru')
                    <div style="color: red">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="work_wn" class="form-label">Рабочие часы EN</label>
                    <input type="text" class="form-control" id="work_wn" name="work_wn" value="{{$footerContent->work_en}}">
                    @error('work_wn')
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
