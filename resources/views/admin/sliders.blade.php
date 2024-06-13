@extends('layouts.appadmin')

@section('title')
    Sliders
@endsection
{!! Form::hidden('', $increment = 1) !!}
@section('contenu')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Sliders</h4>
                    @if (Session::has('status'))
                        <div class="alert alert-success">
                            {{ Session::get('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                        <tr>
                                            <th>Order #</th>
                                            <th>Image</th>
                                            <th>Description one</th>
                                            <th>Description two</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sliders as $sliders)
                                            <tr>
                                                <td>{{ $increment }}</td>
                                                <td><img src="/storage/slider_image/{{ $sliders->slider_image}}"
                                                        alt=""></td>
                                                <td>{{ $sliders->description1 }}</td>
                                                <td>{{ $sliders->description2 }}</td>
                                                <td>
                                                    @if ($sliders->status == 1)
                                                        <label class="badge badge-success">Activé</label>
                                                    @else
                                                        <label class="badge badge-danger">Desactivé</label>
                                                    @endif

                                                </td>
                                                <td>
                                                    <button class="btn btn-outline-primary"
                                                        onclick="window.location = '{{ url('/edit_slider/' . $sliders->id) }}'">Edit</button>
                                                    <a href="{{ URL::to('/supprimerslider/' . $sliders->id) }}"
                                                        id="delete" class="btn btn-outline-danger">Delete</a>
                                                    @if ($sliders->status == 1)
                                                        <button class="btn btn-outline-warning"
                                                            onclick="window.location = '{{ url('/desactiver_slider/' . $sliders->id) }}'">Desactivé</button>
                                                    @else
                                                        <button class="btn btn-outline-success"
                                                            onclick="window.location = '{{ url('/activer_slider/' . $sliders->id) }}'">Activé</button>
                                                    @endif

                                                </td>
                                            </tr>
                                            {!! Form::hidden('', $increment = $increment + 1) !!}
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@section('scripts')
    <script src="backend/js/data-table.js"></script>
@endsection
