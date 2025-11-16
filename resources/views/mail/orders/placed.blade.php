<x-mail::message>
# Order telah berhasi dibuat!

Terimakasih telah order disini. Kami akan memberitahu jika order sudah diproses. No. Order : {{ $order->id }}.

<x-mail::button :url="$url">
Lihat Order
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
