<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class UserReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Review::all();

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserReviewRequest $request)
    {
        $request->validated();
        $request->star_rating = (int) $request->star_rating;
        $user = Review::create([
            'name' => $request->name,
            'no_telp' => $request->no_telepon,
            'star_rating' => $request->star_rating,
            'comments' => $request->comments,
        ]);
        if ($user) {
            return redirect()->back()->with('flash_msg_success', 'Review kamu berhasil disimpan!');
        } else {
            return redirect()->back()->with('flash_msg_error', 'Your review has been submitted Unsuccessfully,');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Review $review)
    {
        if ($review->delete()) {
            toast("Review berhasil dihapus", "success");
        } else {
            toast("Review gagal dihapus", "error");
        }

        return redirect()->back();
    }
}
