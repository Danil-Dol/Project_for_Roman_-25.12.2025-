<form method="POST" action="{{route('orders.store')}}">
    @csrf
    <input type="date" placeholder="Введите дату" name="date">
    <input type="time" placeholder="Введите время" name="time">
    <input placeholder="Введите тип" name="type">
    <input placeholder="Введите систему оплаты" name="payment">
    <input placeholder="Введите адрес" name="adress">
    <input type="submit" value="Создать">
</form>