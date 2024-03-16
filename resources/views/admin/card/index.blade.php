@extends('admin.layouts.index')

@section("content")
    <div class="py-4">
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Карточки</h1>
            </div>
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
                    @for($i = 1; $i <= count($cards); $i++)
                    <tr>
                        <td>
                            <p class="mt-2">{{$i}}</p>
                        </td>
                        <td>
                            <p class="mt-2">Card {{$i}}</p>
                        </td>
                        <td>
                            <div class="d-inline-flex align-content-between">
                                <a class="btn btn-sm btn-outline-success svg"
                                   href="{{route('card.edit', $cards[$i - 1]->id)}}">
                                    <svg class="icon icon-xs text-success me-2" fill="none" stroke-width="1.5" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L6.832 19.82a4.5 4.5 0 0 1-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 0 1 1.13-1.897L16.863 4.487Zm0 0L19.5 7.125"></path>
                                    </svg>
                                    Изменить
                                </a>
                            </div>
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
