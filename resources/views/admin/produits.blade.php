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
                                                <td><img src="/storage/product_images/{{ $products->product_image }}" alt=""></td>
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
                                                    <button class="btn btn-outline-primary">View</button>
                                                    <button class="btn btn-outline-danger">Delete</button>
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
