<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="memorygame.css">
</head>
<body>
<video class="Video" src="assets/video.mp4" playsinline autoplay muted loop ></video>

    <div class="wrapper">


        <div class="stats-container">
            <div id="moves-count"></div>
            <div id="time"></div>
        </div>
        <div class="game-container"></div>
        <button id="stop" class="hide">Stop Game</button>
    </div>

    <div class="controls-container">
        <p id="result"></p>

        <select class="theme"  name="theme" id="theme">
    <option  value="Pokemon">Pokemon</option>
    <option  value="Drapeau">Drapeau</option>
    <option  value="emoji">Emoji</option>
    </select>
        <select class="mode"  name="mode" id="mode">
    <option  value="Facile">Facile</option>
    <option  value="Intermediaire">Intermediaire</option>
    <option  value="Expert">Expert</option>
    <option  value="Impossible">Impossible</option>
    </select>

    

        <button  id="start">Start Game</button>
    </div>
    <script src="game.js"></script>
</body>
</html>
