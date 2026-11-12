<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #1e293b;
        }
        .container {
            width: 340px;
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3);
        }
        .logo-text {
            color: #1e293b;
            text-align: center;
            margin-bottom: 30px;
            font-size: 26px;
            font-weight: bold;
            letter-spacing: 2px;
        }
        .input-group {
            margin-bottom: 18px;
        }
        .input-box {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            box-sizing: border-box;
            border-radius: 6px;
            font-size: 15px;
            background-color: #f8fafc;
        }
        .input-box:focus {
            outline: none;
            border-color: #1e293b;
            background-color: #ffffff;
        }
        .btn {
            width: 100%;
            padding: 12px;
            background-color: #1e293b;
            color: #ffffff;
            border: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 6px;
            margin-top: 10px;
            transition: background-color 0.2s;
        }
        .btn:hover {
            background-color: #334155;
        }
    </style>
</head>
<body>

<div class="container">
    <form action="/login" method="POST">
        @csrf
        <div class="logo-text">ログイン</div>
        
        <div class="input-group">
            <input type="email" name="email" class="input-box" placeholder="メールアドレス">
        </div>
        <div class="input-group">
            <input type="password" name="password" class="input-box" placeholder="パスワード">
        </div>
        
        <button type="submit" class="btn">ログイン</button>
    </form>
</div>

</body>
</html>