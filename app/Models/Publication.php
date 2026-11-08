<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Publication extends Model
{
    use HasFactory, SoftDeletes;

    // أضفنا user_id هنا لكي نتمكن من ربط المنشور بصاحبه
    protected $fillable = ['titre', 'contenu', 'categorie_id', 'image', 'user_id'];

    // علاقة: المنشور ينتمي لتصنيف واحد
    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    // علاقة: المنشور له عدة تعليقات
    public function commentaires()
    {
        return $this->hasMany(Commentaire::class);
    }

    // علاقة: المنشور ينتمي لمستخدم (مؤلف) واحد
    public function auteur()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
} 