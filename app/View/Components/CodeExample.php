<?php

namespace App\View\Components;

use App\Documentation;
use Illuminate\View\Component;

class CodeExample extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(private string $markdown, public string $docs)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $content = file_get_contents(resource_path("views/code-examples/{$this->markdown}.md"));

        return view('components.code-example', [
            'markdown' => Documentation::markdown($content)->__toString(),
        ]);
    }
}
