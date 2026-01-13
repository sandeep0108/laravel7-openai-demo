<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Orhanerday\OpenAi\OpenAi;

class OpenAIController extends Controller
{
    public function index()
    {
        return view('openai');
    }

    public function ask(Request $request)
    {
        $request->validate([
            'prompt' => 'required|string',
        ]);

        $openai = new OpenAi(env('OPENAI_API_KEY'));

        $response = $openai->chat([
            'model' => 'gpt-3.5-turbo',
            'messages' => [
                [
                    'role' => 'user',
                    'content' => $request->prompt
                ]
            ],
            'temperature' => 0.7,
        ]);

        $result = json_decode($response, true);

        return back()->with(
            'result',
            $result['choices'][0]['message']['content'] ?? 'No response'
        );
    }
}

