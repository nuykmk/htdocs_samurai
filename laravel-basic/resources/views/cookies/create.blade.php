<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>25章 クッキーの基本と使い方を学ぼう</title>
</head>

<body>
    <h1>商品選択</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cookies.store') }}" method="post">
        @csrf
        <select name="product_id">
            <option disabled selected value="">選択してください</option>
            @foreach ($products as $product)
                <option value="{{ $product->id }}">{{ $product->product_name }}</option>
            @endforeach
        </select>
        <input type="submit" value="カートに入れる">
    </form>
</body>

</html>
