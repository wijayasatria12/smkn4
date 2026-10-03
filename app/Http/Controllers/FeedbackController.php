<?php

namespace App\Http\Controllers;

use App\Models\Feedback;    
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'pesan' => 'required|string',
        ]);

        Feedback::create([
            'nama' => $request->nama,
            'rating' => $request->rating,
            'pesan' => $request->pesan,
        ]);

        return redirect()->route('home');
    }

    public function index()
    {
        $feedbacks = Feedback::latest()->get();

        return view('dashboard.feedback.index', compact('feedbacks'));
    }

    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        return redirect()->route('dashboard.feedback');
    }
}