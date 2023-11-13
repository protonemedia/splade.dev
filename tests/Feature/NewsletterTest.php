<?php

namespace Tests\Feature;

use Spatie\MailcoachSdk\Facades\Mailcoach;
use Tests\TestCase;

class NewsletterTest extends TestCase
{
    /** @test */
    public function it_allows_you_to_subscribe_to_the_newsletter()
    {
        config(['honeypot.enabled' => false]);

        Mailcoach::shouldReceive('createSubscriber')
            ->once()
            ->with(
                'mailcoach-list',
                [
                    'email' => 'test@example.com',
                    'tags'  => ['Splade.dev'],
                ],
            );

        $this->post(route('newsletter.store'), [
            'email' => 'test@example.com',
        ])->assertRedirect(route('home'));
    }
}
