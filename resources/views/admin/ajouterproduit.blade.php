@extends('layouts.appadmin')

@section('title')
    Ajouter produit
@endsection
@section('contenu')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row grid-margin">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Ajouter produit</h4>
                            @if (Session::has('status'))
                                <div class="alert alert-success">
                                    {{ Session::get('status') }}
                                </div>
                            @endif
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $errors)
                                            <li>{{ $errors }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            {!! Form::open([
                                'action' => 'ProductController@sauverproduit',
                                'method' => 'POST',
                                'class' => 'cmxform',
                                'id' => 'commentForm',
                                'enctype' =>'multipart/form-data'
                            ]) !!}
                            {{ csrf_field() }}

                            <div class="form-group">
                                {!! Form::label('', 'Nom du produit', ['for' => 'cname']) !!}
                                {!! Form::text('product_name', '', ['class' => 'form-control', 'id' => 'cname']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('', 'Prix du produit', ['for' => 'cname']) !!}
                                {!! Form::number('product_price', '', ['class' => 'form-control', 'id' => 'cname']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('', 'Categorie du produit', ['for' => 'cname']) !!}
                                {!! Form::select('product_category', $categories, null, [
                                    'class' => 'form-control',
                                    'placeholder' => 'Select category',
                                ]) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('', 'Image du produit', ['for' => 'cname']) !!}
                                {!! Form::file('product_image', ['class' => 'form-control', 'id' => 'cname']) !!}
                            </div>

                            {!! Form::submit('Ajouter', ['class' => 'btn btn-primary']) !!}

                            {!! Form::close() !!}
                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <!-- Custom js for this page-->
    <script src="js/form-validation.js"></script>
    <script src="js/bt-maxLength.js"></script>
@endsection
