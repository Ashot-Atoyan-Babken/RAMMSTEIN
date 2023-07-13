<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormFeedbackController extends Controller
{
    public function __invoke()
    {
        $auth = auth()->user()->id;
        return view('feedback.feedback', compact('auth'));
    }
}
