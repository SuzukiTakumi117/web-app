<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登録画面</title>
    <style>
        body {
            font-family: sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #1e293b; /* ★ここが全体の背景：暗めの藍色（ディープネイビー） */
        }
        
        /* 全体の外枠（中央のカード） */
        .container {
            width: 340px;
            background-color: #ffffff; /* カード自体は白にして文字やフォームを見やすく */
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3); /* 背景が暗いので影を少し強めに */
        }
 
        /* ロゴのテキスト（枠線をなくしてスッキリさせました） */
        .logo-text {
            color: #1e293b; /* ロゴの文字色も背景とお揃いの藍色 */
            text-align: center;
            margin-bottom: 30px;
            font-size: 26px;
            font-weight: bold;
            letter-spacing: 2px;
        }
 
        /* 入力欄の隙間 */
        .input-group {
            margin-bottom: 18px;
        }
 
        /* 入力欄の四角枠 */
        .input-box {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            box-sizing: border-box;
            border-radius: 6px;
            font-size: 15px;
            background-color: #f8fafc;
        }
        /* 入力欄をクリックしたとき */
        .input-box:focus {
            outline: none;
            border-color: #1e293b; /* フォーカス時に藍色に */
            background-color: #ffffff;
        }
 
        /* ボタンの四角枠 */
        .btn {
            width: 100%;
            padding: 12px;
            background-color: #1e293b; /* ★ボタンも背景とお揃いの藍色 */
            color: #ffffff;
            border: none;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 6px;
            margin-top: 10px;
            transition: background-color 0.2s;
        }
        /* ボタンにマウスを乗せたとき */
        .btn:hover {
            background-color: #334155; /* 少しだけ明るい藍色に */
        }
    </style>
</head>
<body>
 
<div class="container">
    <!-- 上のロゴテキスト -->
    <div class="logo-text">ログイン</div>
    
    <!-- 下のフォーム -->
    <div class="input-group">
        <input type="text" class="input-box" placeholder="ユーザー名">
    </div>
    <div class="input-group">
        <input type="email" class="input-box" placeholder="メールアドレス">
    </div>
    <div class="input-group">
        <input type="password" class="input-box" placeholder="パスワード">
    </div>
    
    <!-- ボタン -->
    <button class="btn">登録</button>
</div>
 
</body>
</html>