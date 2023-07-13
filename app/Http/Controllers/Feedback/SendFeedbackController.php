<?php

namespace App\Http\Controllers\Feedback;

use App\Http\Controllers\Controller;
use App\Http\Requests\Feedback\StoreRequest;
use App\Models\Feedback;
use Illuminate\Http\Request;

class SendFeedbackController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Feedback::create($data);
        return redirect()->route('feedback.show')->with('success', 'Спасибо за ваш отзыв ');

    }
}
