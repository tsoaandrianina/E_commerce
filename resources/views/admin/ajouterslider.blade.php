@extends('layouts.appadmin')

@section('title')
Ajouter slider
@endsection
@section('contenu')
<div class="main-panel">
    <div class="content-wrapper">

        <div class="row grid-margin">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Ajouter slider</h4>

                    {!! Form::open(['action' => 'SliderController@sauverslider', 'method' => 'POST', 'class' => 'cmxform', 'id' => 'commentForm']) !!}
                    {{ csrf_field() }}

                      <div class="form-group">
                        {!! Form::label('', 'Description one', ['for' => 'cname']) !!}
                        {!! Form::text('description1', '', ['class' => 'form-control', 'id' => 'cname']) !!}
                      </div>

                      <div class="form-group">
                        {!! Form::label('', 'Description two', ['for' => 'cname']) !!}
                        {!! Form::text('description2', '', ['class' => 'form-control', 'id' => 'cname']) !!}
                      </div>

                      <div class="form-group">
                        {!! Form::label('', 'Image', ['for' => 'cname']) !!}
                        {!! Form::file('slider_image', ['class' => 'form-control', 'id' => 'cname']) !!}
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
