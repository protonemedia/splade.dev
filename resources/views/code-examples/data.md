```blade
<x-splade-data remember="cookie-popup" local-storage>
    <h1 v-if="!data.accepted">Cookie warning</h1>
    <button @click.prevent="data.accepted = true">Accept</button>
</x-splade-data>
```