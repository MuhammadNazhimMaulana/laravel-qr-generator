<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'QR Generator'
        ];

        return view('QR/index', $data);
    }

    public function qr(Request $request)
    {
        $data = [
            'title' => 'QR Generator',
            'converteds' => explode("\r\n", $request->data)
        ];

        return view('QR/result', $data);
    }
}
