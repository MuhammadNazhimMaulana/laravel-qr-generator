@extends('layout.main_admin')

@section('content')
<div class="container h-100 mt-5 p-3">
    <div class="card text-center">
        <div class="card-header text-dark fs-1 fw-bold text-uppercase">
          {{ __('Result') }}
        </div>

        {{-- Table Result --}}
        <div class="text-center p-3">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Code</th>
                    <th scope="col">QR</th>
                  </tr>
                </thead>
                <tbody>
                @for($i = 1; $i < count($converteds) + 1; $i++)
                  <tr>
                    <td>{{ $i }}</td>
                    <td>{{ $converteds[$i-1] }}</td>
                    <td><div class="mb-3 d-flex justify-content-center">{!! DNS2D::getBarcodeHTML($converteds[$i-1], 'QRCODE') !!}</div></td>
                  </tr>
                @endfor
                </tbody>
              </table>
        </div>
        
        {{-- <div class="mb-3">{!! DNS2D::getBarcodeHTML("P211301319380", 'QRCODE') !!}</div> --}}
    </div>
</div>

@endsection