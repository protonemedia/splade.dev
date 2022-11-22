```blade
<x-splade-form :default="$user" confirm>
    <x-splade-input name="email" />
    <x-splade-select name="country_code" :options="$countries" />
    <x-splade-file name="avatar" filepond preview min-width="400" />
    <x-splade-submit>
</x-splade-form>
```