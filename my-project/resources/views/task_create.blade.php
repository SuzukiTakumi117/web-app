<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タスク登録</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #1e293b;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .card {
            background-color: #ffffff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 340px;
        }
        .logo-text {
            color: #1e293b;
            text-align: center;
            margin-bottom: 25px;
            font-size: 24px;
            font-weight: bold;
        }
        .input-group {
            margin-bottom: 18px;
        }
        .input-label {
            display: block;
            margin-bottom: 6px;
            font-size: 13px;
            font-weight: bold;
            color: #475569;
        }
        .input-box {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            box-sizing: border-box;
            border-radius: 6px;
            font-size: 15px;
            background-color: #f8fafc;
            color: #1e293b;
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
            margin-top: 5px;
            transition: background-color 0.2s;
        }
        .btn:hover {
            background-color: #334155;
        }
        .link-text {
            text-align: center;
            margin-top: 15px;
        }
        .link-text a {
            color: #475569;
            font-size: 14px;
            text-decoration: none;
        }
        .link-text a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="logo-text">タスク登録</div>
    <form action="/task" method="POST">
        @csrf
        <div class="input-group">
            <label class="input-label">タスク内容</label>
            <input type="text" name="task_name" class="input-box" placeholder="新しいタスクを入力..." required>
        </div>

        <div class="input-group">
            <label class="input-label">期限</label>
            <input type="date" name="due_date" class="input-box" required>
        </div>

        <button type="submit" class="btn">登録する</button>
    </form>
    <div class="link-text">
        <a href="/task">👉 タスク一覧へ戻る</a>
    </div>
</div>

</body>
</html>