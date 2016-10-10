@extends('layouts.app')

@section('content')


                    <div class="panel-body">
                        <h1>LISTE DES PROJETS BAP VALIDES</h1>
                        <hr>

                        @foreach($baps as $bap)
                            @if($bap->valid == 1)
                            <div class="bap col-md-offset-1 col-md-10" style="background-color:#e6e6fa;margin-bottom:30px">

                                <h2><label>Titre de la BAP :</label> <a href="{{route('bap.show', $bap->id)}}">{{$bap->title}} </a></h2>
                                <div class="col-md-offset-1 col-md-10" style="background-color:white; margin-bottom:10px">
                          <h3><label>Nom du client : </label>{{$bap->client}}</h3>
                                <p><label>Adresse postale du client : </label>{{$bap->adress}}</p>
                                <p><label>Email du client : </label>{{$bap->email}}</p>
                                <p><label>Téléphone du client :</label> {{$bap->phone}}</p></div><div style="margin-bottom:10px;background-color:white;" class="col-md-offset-1 col-md-10">
                            <p><label>Presenation de la BAP :</label> {{$bap->presentation}} </p>
<label>Type de projet : </label>
    @if( $bap->type == 1)
        Site Web
        @endif
                                    @if( $bap->type == 2)
                                        Installation multimédia
                                    @endif
                                    @if( $bap->type == 3)
                                       Jeu Video
                                    @endif
                                    @if( $bap->type == 4)
                                       3D
                                    @endif
                                    @if( $bap->type == 5)
                                       DVD
                                    @endif
                                    @if( $bap->type == 6)
                                        Print
                                    @endif
                                    @if( $bap->type == 7)
                                        CDROM
                                    @endif
                                    @if( $bap->type == 8)
                                      Autre
                                    @endif
                                    @if( $bap->type == 9)
                                       Evenement
                                    @endif
                                    @if( $bap->type == 10)
                                       Animation 2D
                                    @endif



<p><label>Demande du client : </label>{{$bap->demande}}</p>
                                <p><label>Contexte du projet :</label> {{$bap->contexte}}</p>
                                <p><label>Objectifs du  projet : </label>{{$bap->objectif}}</p>
<p><label>Contraintes :</label> {{$bap->contraintes}}</p>
                                    </div>

                                @if( Auth::user()->admin == 1)
                                    <div class="row">
<div class="col-md-2 col-md-offset-5">
    <a href="{{route('bap.edit', $bap->id)}}"><button class="btn btn-lg btn-success">

                                    Modifier(seulement pour l'admin)
                                    </button></a>
</div>

                            </div>
                                <form class="col-md-2 col-md-offset-3" action="{{route('bap.destroy', $bap->id)}}" method="POST">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-lg btn-info">SUPPRIMER (visible seulement pour l'admin)</button>
                                </form>


                                @endif

                            </div>


@endif
                        @endforeach
                    </div>

@endsection
