@extends('blank')

@section('page-title', 'Personnel information');
@section('page-description', 'Gestion du personnel');

@section('main-content')

<div class="br-pagebody">
    <div class="br-section-wrapper">
      <h6 class="br-section-label">Personnal Member Information</h6>
      {{-- <p class="br-section-text">A basic form control with disabled and readonly mode.</p> --}}

        <div class="row">
            <div class="col-lg-4">
                Nom : <b>{{  $personnel->name }} {{  $personnel->lastname }}</b></b>

            </div><!-- col -->
            <div class="col-lg-8">
                Poste : <b>{{  $personnel->poste->nom }}</b>

            </div><!-- col -->
        </div><!-- row -->
        @if($personnel->info)
        <div class="row">
            <div class="col-lg-4">
                Date de naissance : <b>{{  $personnel->info->date_de_naissance }}</b>

            </div><!-- col -->
            <div class="col-lg-4">
                Telephone : <b>{{  $personnel->info->telephone }}</b>

            </div><!-- col -->
            <div class="col-lg-4">
                Adresse : <b>{{ $personnel->info->adresse }}</b>

            </div><!-- col -->
        </div><!-- row -->
        @endif
</div>

@endsection
