@extends('layouts.plantilla')

@section('Show Content', 'User' . $user->name)

@section('content')


<div class="cardInformationStyle">
    <div class="padding">
        <div class="font">
            <div class="top">
                <img src="{{ asset('../img/userShowIcon.svg') }}">
            </div>
            <div class="bottom">
                <p>{{ $user->name }}</p>
                <p class="noLast">{{ $user->last_name }}</p>
                <p class="desi"><strong>ID</strong><br>{{ $user->id }}</p>
                <div class="barcode">
                    <div id="qrcode">
                        <img src="https://www.codigos-qr.com/qr/php/qr_img.php?d=https%3A%2F%2Fgithub.com%2FJpdzRamirez&s=8&e=m" alt="Generador de Códigos QR Codes"/>
                        </div>
                </div>
                <p class="no"><strong>{{ $user->sex_gender }}</strong></p>
                <p class="no">part-1,89 harinadad d...sdv..sdf..sfd..sd.</p>
            </div>
        </div>
    </div>
    <div class="back">
        <h1 class="Details">Information</h1>
        <hr class="hr">
        <div class="details-info">
            <p><b>Email : </b></p>
            <p>{{ $user->email }}</p>
            <p><b>User: </b></p>
            <p>{{ $user->user }}</p>
            <p><b>Office Address:</b></p>
            <p>part-1,89 harinadad d...sdv..sdf..sfd..sd.road,india</p>
            </div>      
          
            <div class="logo">
                <div class="noDecorationLink logo" id="button-3">
                    <a class="noDecorationLink animate__pulse" href="{{ route('crud.index') }}">
                        <img src="{{ asset('../img/iconsButtons/backButton.svg') }}">
                    </a>
                    <button class="noDecorationLink noBackground " onclick="window.location.href='{{ route('crud.index') }}'">
                        <b>Back</b>
                    </button>
                </div>
               
         
            </div>    
            <hr>

        </div>
    </div>
</div>
 



@endsection
