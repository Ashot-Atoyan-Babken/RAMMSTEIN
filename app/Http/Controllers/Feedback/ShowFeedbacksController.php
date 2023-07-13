<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use App\Models\User;
use Carbon\Carbon;

class ShowFeedbacksController extends Controller
{
    public function __invoke(Feedback $feedback)
    {
        $date = Carbon::parse($feedback->created_at);
        $feedback = Feedback::paginate(5);
        return view('feedback.show', compact('feedback', 'date'));
    }
}
