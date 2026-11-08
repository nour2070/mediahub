<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publication;
use App\Models\Categorie; // أضفنا هذا لاستخدامه في دالة create

class ContenuController extends Controller
{
    // 1. عرض قائمة المنشورات (القراءة)
    public function index()
    {
        $publications = Publication::with('categorie')->get();
        return view('contenus.index', ['publications' => $publications]);
    }

    // 2. عرض صفحة إضافة منشور جديد
    public function create()
    {
        $categories = Categorie::all(); // جلب التصنيفات للاختيار منها
        return view('contenus.create', ['categories' => $categories]);
    }

    // 3. حفظ المنشور الجديد في قاعدة البيانات
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'categorie_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('publications', 'public');
        }

        Publication::create($data);

        return redirect()->route('contenus.index')->with('success', 'Publication créée avec succès !');
    }

    // 4. عرض تفاصيل منشور واحد
    public function show(Publication $publication) // استخدمنا Liaison implicite
    {
        return view('contenus.show', ['publication' => $publication]);
    }

    // 5. عرض صفحة تعديل منشور
    public function edit(Publication $publication)
    {
        $categories = Categorie::all();
        return view('contenus.edit', ['publication' => $publication, 'categories' => $categories]);
    }

    // 6. تحديث المنشور في قاعدة البيانات
    public function update(Request $request, Publication $publication)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'categorie_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('publications', 'public');
        }

        $publication->update($data);

        return redirect()->route('contenus.index')->with('success', 'Publication modifiée avec succès !');
    }

    // 7. حذف المنشور
    public function destroy(Publication $publication)
    {
        $publication->delete();
        return redirect()->route('contenus.index')->with('success', 'Publication supprimée avec succès !');
    }
}