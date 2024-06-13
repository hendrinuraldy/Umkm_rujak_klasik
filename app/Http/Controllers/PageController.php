<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Promo;
use App\Models\Review;
use App\Models\Testimoni;

class PageController extends Controller
{
    public function landingPage()
    {
        $promos = Promo::all();
        $menuRujak = Menu::where('category_id', 1)->get();
        $menuUbi = Menu::where('category_id', 2)->get();
        $testimonis = Testimoni::all();
        $reviews = Review::all();
        return view('landing.layouts.master', compact('promos', 'menuRujak', 'menuUbi', 'testimonis', 'reviews'));
    }

    public function contact()
    {
        return view('landing.contact');
    }

    public function admin()
    {
        $menuRujak = Menu::where('category_id', 1)->get();
        $menuUbi = Menu::where('category_id', 2)->get();
        $menu = count($menuRujak) + count($menuUbi);
        $promos = Promo::all();
        $testimonis = Testimoni::all();
        $reviews = Review::all();
        return view("admin.admin", compact('menu', 'menuRujak', 'menuUbi', 'promos', 'testimonis', 'reviews'));
    }

    public function addMenu()
    {
        return view('admin.tambah_menu.tambah_menu');
    }

    public function updateMenu($slug)
    {
        $data = Menu::where('slug', $slug)->first();
        if (!$data) {
            toast("Data tidak ditemukan", "error");
            return redirect()->back();
        }
        return view('admin.ubah_menu.ubah_menu', compact('data'));

    }

    public function reviewAdmin()
    {
        $datas = Review::all();
        return view('admin.review.admin_review', compact('datas'));
    }

    public function testimoniAdmin()
    {
        return view('admin.testimoni.testimoni');
    }

    public function showListTestimoni()
    {
        $testimoni = Testimoni::all();

        return view('admin.testimoni.list', compact('testimoni'));
    }

    public function showListPromo()
    {
        $datas = Promo::all();
        return view('admin.promo.listPromo', compact('datas'));
    }

    public function createPromo()
    {
        $menu = Menu::all();
        $datas = Promo::all();
        return view('admin.promo.addPromo', compact('datas', 'menu'));
    }

    public function showPromo($slug)
    {
        $promo = Promo::where('slug', $slug)->first();
        $menu = Menu::all();
        if (!$promo) {
            toast("Data tidak ditemukan", "error");
            return redirect()->back();
        }
        return view('admin.promo.showPromo', compact('promo', 'menu'));

    }

}
