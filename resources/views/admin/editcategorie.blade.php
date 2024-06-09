@extends('layouts.appadmin')

@section('title')
    Edit catégorie
@endsection
@section('contenu')
    <div class="main-panel">
        <div class="content-wrapper">

            <div class="row grid-margin">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit catégorie</h4>
                            @if (Session::has('status'))
                                <div class="alert alert-success">
                                    {{ Session::get('status') }}
                                </div>
                            @endif
                            @if (count($errors)>0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ( $errors->all() as $errors )
                                    <li>{{$errors}}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            {!! Form::open([
                                'action' => 'CategoryController@modifiecategorie',
                                'method' => 'POST',
                                'class' => 'cmxform',
                                'id' => 'commentForm',
                            ]) !!}
                            {{ csrf_field() }}

                            <div class="form-group">
                                {!! Form::hidden('id', $categorie->id) !!}
                                {!! Form::label('', 'Nom de la categorie', ['for' => 'cname']) !!}
                                {!! Form::text('category_name', $categorie->category_name, ['class' => 'form-control', 'id' => 'cname']) !!}
                            </div>

                            {!! Form::submit('Modifier', ['class' => 'btn btn-primary']) !!}

                            {!! Form::close() !!}
                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2018 <a
                            href="https://www.urbanui.com/" target="_blank">Urbanui</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                            class="ti-heart text-danger ml-1"></i></span>
                </div>
            </footer>

        </div>
    </div>
@endsection

@section('scripts')
    <!-- Custom js for this page-->
    <script src="backend/js/form-validation.js"></script>
  <script src="backend/js/bt-maxLength.js"></script>
@endsection
