@extends('layouts.appadmin')

@section('title')
    Produits
@endsection
{!! Form::hidden('', $increment = 1) !!}
@section('contenu')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Produits</h4>
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
                                            <th>Nom du produit</th>
                                            <th>Catégorie du produit</th>
                                            <th>Prix</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $products)
                                            <tr>
                                                <td>{{ $increment }}</td>
                                                <td><img src="/storage/product_images/{{ $products->product_image }}"
                                                        alt=""></td>
                                                <td>{{ $products->product_name }}</td>
                                                <td>{{ $products->product_category }}</td>
                                                <td>{{ $products->product_price }}</td>
                                                <td>
                                                    @if ($products->status == 1)
                                                        <label class="badge badge-success">Activé</label>
                                                    @else
                                                        <label class="badge badge-danger">Desactivé</label>
                                                    @endif

                                                </td>
                                                <td>
                                                    <button class="btn btn-outline-primary"
                                                        onclick="window.location = '{{ url('/edit_produit/' . $products->id) }}'">Edit</button>
                                                    <a href="{{ URL::to('/supprimerproduit/' . $products->id) }}"
                                                        id="delete" class="btn btn-outline-danger">Delete</a>
                                                    @if ($products->status == 1)
                                                        <button class="btn btn-outline-warning"
                                                            onclick="window.location = '{{ url('/desactiver_produit/' . $products->id) }}'">Desactivé</button>
                                                    @else
                                                        <button class="btn btn-outline-success"
                                                            onclick="window.location = '{{ url('/activer_produit/' . $products->id) }}'">Activé</button>
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
