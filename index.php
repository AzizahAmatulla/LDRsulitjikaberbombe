<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permintaan Berbaikan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f0f0f0;
            padding: 50px;
        }
        .message {
            font-size: 24px;
            margin-bottom: 30px;
        }
        button {
            font-size: 18px;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        #yes {
            background-color: #4CAF50;
            color: white;
        }
        #no {
            background-color: #f44336;
            color: white;
            position: relative;
        }
    </style>
</head>
<body>
    <div class="message">
        <h1>Maaf ya, sayang... 😘</h1>
        <p>Aku salah, maukah kamu maafin aku dan kita berbaikan?</p>
    </div>
    <button id="yes" onclick="alert('Yay! Terima kasih, sayang! Aku sayang kamu! 💕')">Ya</button>
    <button id="no" onmouseover="moveNoButton()">Tidak</button>

    <script>
        function moveNoButton() {
            const noButton = document.getElementById('no');
            // Gerakkan tombol "Tidak" ke posisi acak saat mouse mendekat
            const x = Math.random() * (window.innerWidth - 100);
            const y = Math.random() * (window.innerHeight - 100);
            noButton.style.position = 'absolute';
            noButton.style.left = x + 'px';
            noButton.style.top = y + 'px';
        }
    </script>
</body>
</html>