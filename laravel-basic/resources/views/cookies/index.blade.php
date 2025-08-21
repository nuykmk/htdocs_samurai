<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>25章 クッキーの基本と使い方を学ぼう</title>
</head>

<body>
    <h1>ショッピングカート</h1>
    @if (isset($product))
        <table>
            <tr>
                <th>商品名</th>
                <td>{{ $product->product_name }}</td>
            </tr>
            <tr>
                <th>価格</th>
                <td>{{ $product->price }}円</td>
            </tr>
        </table>
        <form action="{{ route('cookies.destroy') }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="カートを空にする">
        </form>
    @else
        <p>カートの中身は空です。</p>
    @endif
    <a href="{{ route('cookies.create') }}">商品選択ページ</a>
</body>

</html>
