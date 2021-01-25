<?php

namespace App\Http\Controllers\main;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function feedback()
    {
        $feedback = Feedback::all();
        return view('feedback', [
            'feedback'=>$feedback,
        ]);
    }

    public function create(Request $request)
    {

        Feedback::create([
            'user_id' => \Auth::id(),
            'rating' => $request->post('rating'),
            'dignities' => $request->post('dignities'),
            'disadvantages' => $request->post('disadvantages'),
            'comment' => $request->post('comment'),
        ]);
        return redirect()->route('feedback');
    }
}
