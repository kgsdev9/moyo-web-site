<?php

namespace App\Http\Controllers\Register;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterEncadreurProController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        User::create([
            'nomcomplet' => $data['nomComplet'] ?? '',
            'telephone'  => $data['numero'] ?? '',
            'email'      => $data['email'] ?? '',
            'adresse'    => $data['adresse'] ?? '',
            'description' => $data['description'] ?? '',
        ]);
        return response()->json([
            'message' => 'Inscription réussie',
        ], 201);
    }
}
