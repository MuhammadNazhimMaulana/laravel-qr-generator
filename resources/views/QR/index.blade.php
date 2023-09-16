@extends('layout.main_admin')

@section('content')
<div class="container">
    <div class="card text-center">
        <div class="card-header text-dark fs-1 fw-bold text-uppercase">
          {{ __('Insert Value') }}
        </div>

        {{-- Text Area --}}
        <form action="/qr/view" method="post">
            @csrf
            <div class="form-group p-3">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="data"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mb-3">{{ __('Submit') }}</button>
        </form>
        
        {{-- <div class="mb-3">{!! DNS2D::getBarcodeHTML("P211301319380", 'QRCODE') !!}</div> --}}
    </div>
</div>

@endsection