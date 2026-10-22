<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>船隻靠泊時間查詢系統</title>
    <style>
        body {
            font-family: Arial, "Microsoft JhengHei", sans-serif;
            background-color: #f4f7f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 320px;
        }
        h2 {
            color: #0056b3;
            margin-bottom: 20px;
        }
        .input-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #333;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        button:hover {
            background-color: #0056b3;
        }
        #result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
        }
        .normal {
            color: #155724;
            background-color: #d4edda;
            border: 1px solid #c3e6cb;
        }
        .long-term {
            color: #721c24;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>船隻靠泊查詢系統</h2>
    <div class="input-group">
        <label for="hours">輸入靠泊時間（小時）：</label>
        <input type="number" id="hours" min="0" placeholder="例如：15">
    </div>
    <button onclick="checkBerthingTime()">查詢狀態</button>
    <div id="result"></div>
</div>

<script>
function checkBerthingTime() {
    const hoursInput = document.getElementById('hours').value;
    const resultDiv = document.getElementById('result');

    // 檢查是否有輸入內容
    if (hoursInput === '' || hoursInput < 0) {
        resultDiv.className = '';
        resultDiv.style.color = 'red';
        resultDiv.innerText = '請輸入有效的靠泊小時數！';
        return;
    }

    const hours = parseFloat(hoursInput);

    // 判斷靠泊時間是否滿 20 小時
    if (hours >= 20) {
        resultDiv.className = 'long-term';
        resultDiv.innerText = '長時間靠泊';
    } else {
        resultDiv.className = 'normal';
        resultDiv.innerText = '一般靠泊';
    }
}
</script>

</body>
</html>