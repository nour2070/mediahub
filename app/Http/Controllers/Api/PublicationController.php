<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use App\Http\Resources\PublicationResource;

class PublicationController extends Controller
{
    public function index()
    {
        // جلب المنشورات مع العلاقات
        return PublicationResource::collection(Publication::with('categorie')->get());
    }

    public function show(Publication $publication)
    {
        return new PublicationResource($publication->load('categorie'));
    }
}