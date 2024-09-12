<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Продукты</title>
    <style>
        .product-card {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            list-style: none;
            display: flex;
            flex-direction: column;
            text-align: center;
        }
        .roduct-cards{
            max-width: 1440px;
            display: flex;
            justify-content: space-between;

            
        }
        .product-card span {
            color: #333;
        }
        .product-card.red {
            background-color: #ffebee;
        }
        .product-card.red b {
            color: red;
        }
        .product-card.red span {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Продукты</h1>
    <div class="roduct-cards">
         @foreach($products as $row)
            <li class="product-card {{ $row['amount'] == 0 ? 'red' : '' }}">
                <b>{{ $row['name'] }}</b>
                <span>Cost: {{ $row['cost'] }}</span>
                <span>Amount: {{ $row['amount'] }}</span>
            </li>
        @endforeach
    </div>
</body>
</html>
