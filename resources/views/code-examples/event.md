```php
class HighServerLoadDetected implements ShouldBroadcast
{
    public function broadcastWith()
    {
        return [
            Splade::toastOnEvent('High server load detected')->warning(),
        ];
    }
}
```