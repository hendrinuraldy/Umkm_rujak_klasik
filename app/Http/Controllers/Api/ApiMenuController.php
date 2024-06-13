<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Menu;

class ApiMenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();

        return response()->json([
            'messages' => 'Successfully Retrieve',
            'Data' => $menus,
        ], 200);
    }

    public function show($slug)
    {
        $menu = Menu::where('slug', $slug)->get();

        if (!$menu) {
            return response()->json([
                'messages' => 'Data not found',
            ], 404);
        }

        return response()->json([
            'messages' => 'Successfully Retrieve',
            'Data' => $menu,
        ]);
    }

    public function showById($id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return response()->json([
                'messages' => 'Data not found',
            ], 404);
        }

        return response()->json([
            'messages' => 'Successfully Retrieve',
            'Data' => $menu,
        ]);
    }
}
