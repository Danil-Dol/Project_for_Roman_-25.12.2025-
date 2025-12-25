@csrf
<a href="{{route('orders.create')}}">Создать заказ</a>
@foreach ($orders as $order)
<p>{{$order->id}}</p>
<p>{{$order->date}}</p>
<p>{{$order->time}}</p>
<p>{{$order->type}}</p>
<p>{{$order->payment}}</p>
<p>{{$order->adress}}</p>
<p>{{$order->status_id}}</p>
<p>{{$order->user_id}}</p>
<form method="POST" action="{{route('orders.destroy', $order->id)}}">
    @method('delete')
    @csrf
    <input type="submit" value="Удалить">
</form>
@endforeach