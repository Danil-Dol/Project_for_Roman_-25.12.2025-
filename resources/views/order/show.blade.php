<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Обновить</title>
</head>
<body>
<form action="{{route('orders.update', $order->id)}}" method="POST">
    @csrf
    @method('put')
    <input type="date" placeholder="{{$order->date}}" name="date">
    <input type="time" placeholder="Введите время" name="time">
    <input placeholder="Введите тип" name="type">
    <input placeholder="Введите систему оплаты" name="payment">
    <input placeholder="Введите адрес" name="adress">
    <input type="submit" value="Обновить">
</form>