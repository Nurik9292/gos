@extends('admin.layouts.index')

@section("content")
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Галлерея</h1>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-between w-100 flex-wrap">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Изображения</h1>
        </div>
        <div>
            <a href="{{route('gallery.create')}}" class="btn btn-outline-info d-inline-flex align-items-center">
                Добавить
            </a>
        </div>
    </div>
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-centered table-nowrap mb-0 rounded">
                    <thead class="thead-light">
                    <tr>
                        <th class="border-0 rounded-start">#</th>
                        <th class="border-0">Название</th>
                        <th class="border-0 w-25">Деействия</th>
                    </tr>
                    </thead>
                    <tbody>
                    <!-- Item -->
                    @for($i = 1; $i <= count($galleries); $i++)
                    <tr>
                        <td>
                            <p class="mt-2">{{$i}}</p>
                        </td>
                        <td>
                            <p class="mt-2">{{$galleries[$i - 1]->title}}</p>
                        </td>
                        <td>
                            <form action="{{route('gallery.destroy', $galleries[$i - 1]->id)}}" method="POST" >
                               @csrf
                                @method("DELETE")
                                <button class="btn btn-sm btn-outline-danger svg" type="submit" style="margin-left: 2px">
                                    <svg  class="icon icon-xs text-danger me-2" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0"></path>
                                    </svg>
                                    Удалить
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endfor
                    <!-- End of Item -->

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
