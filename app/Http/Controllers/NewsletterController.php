<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use ProtoneMedia\Splade\Facades\Toast;
use Spatie\MailcoachSdk\Facades\Mailcoach;

class NewsletterController
{
    public function create()
    {
        return view('newsletter', []);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
        ]);

        Mailcoach::createSubscriber(
            emailListUuid: config('mailcoach-sdk.list'),
            attributes: [$data + ['tags' => 'Splade.dev']]
        );

        Toast::success('You have been subscribed to the newsletter!');

        return to_route('home');
    }
}
