<?php

namespace App\Http\Controllers;

use App\Console\Commands\UpdateDocumentationRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class UpdateDocumentationController
{
    public function __invoke(Request $request)
    {
        abort_unless($request->query('signature') === config('services.update_docs_signature'), 403);

        dispatch(fn () => Artisan::call(UpdateDocumentationRepository::class));

        return response('OK');
    }
}
