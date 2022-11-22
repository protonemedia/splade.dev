```blade
<h1>Today's news items</h1>

<x-splade-lazy>
    <x-slot:placeholder>The items are loading...</x-slot:placeholder>

    <ul>
        @foreach($items as $item)
            <li>{{ $item->title }}</li>
        @endforeach
    </ul>
</x-splade-lazy>
```