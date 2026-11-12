<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>タスク一覧</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #1e293b; /* ディープネイビー */
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }
        .card {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 800px; /* 表が入りやすいように少し広めに調整 */
        }
        .logo-text {
            color: #1e293b;
            text-align: center;
            margin-bottom: 25px;
            font-size: 24px;
            font-weight: bold;
        }
        
        /* テーブルのスタイル */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
            font-size: 14px;
            color: #1e293b;
        }
        th {
            background-color: #f8fafc;
            font-weight: bold;
            color: #475569;
        }
        
        /* 状態のバッジ（ステータス表示用） */
        .badge {
            display: inline-block;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: bold;
        }
        .badge-done { background-color: #e2e8f0; color: #475569; } /* 済 */
        .badge-ok { background-color: #dbeafe; color: #1d4ed8; }   /* 可 */
        .badge-ng { background-color: #fee2e2; color: #b91c1c; }   /* 不可（要確認など） */

        .btn-create {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #1e293b;
            color: #ffffff;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            border-radius: 6px;
            box-sizing: border-box;
            transition: background-color 0.2s;
        }
        .btn-create:hover {
            background-color: #334155;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="logo-text">タスク一覧</div>
    
    <table>
        <thead>
            <tr>
                <th style="width: 10%;">No.</th>
                <th style="width: 45%;">内容</th>
                <th style="width: 25%;">期限</th>
                <th style="width: 20%;">状態</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>サンプル1</td>
                <td>2026-06-01</td>
                <td><span class="badge badge-done">済</span></td>
            </tr>
            <tr>
                <td>2</td>
                <td>サンプル2</td>
                <td>2026-06-05</td>
                <td><span class="badge badge-ok">可</span></td>
            </tr>
            <tr>
                <td>3</td>
                <td>サンプル3</td>
                <td>2026-06-10</td>
                <td><span class="badge badge-ng">不可</span></td>
            </tr>
        </tbody>
    </table>

    <a href="/task/create" class="btn-create">＋ 新規タスク登録へ</a>
</div>

</body>
</html>