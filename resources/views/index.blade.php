<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon</title>

    <style>
        body {
            height: 95vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .container1 a div img{
            width: 400px;
        }

        .container {
            display: flex;
        }

        .container a div img {
            width: 150px;
        }

        .container a div {
            width: 175px;
            height: 200px;
            background-color: rgb(255, 200, 60);
            margin: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            align-items: center;
            border-radius: 10px;
        }

    </style>

</head>
<body>
    

    <div class="container1">
        <a>
            <div>
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/International_Pok%C3%A9mon_logo.svg/1200px-International_Pok%C3%A9mon_logo.svg.png">
                
            </div>
        </a>
    </div>

    <h1>Escolha o seu Pokemon e prepare-se para a aventura:</h1>

    <div class="container">
        <a href="/pokemon/Bulbasaur">
            <div>
                <img src="https://www.serebii.net/swordshield/pokemon/001.png">
                
            </div>
        </a>
        <a href="/pokemon/Druddigon">
            <div>
                <img src="https://images.gameinfo.io/pokemon/256/p621.png">
                
            </div>
        </a>
        <a href="/pokemon/Arbok">
            <div>
                <img src="https://images.gameinfo.io/pokemon/256/p24f308.png">
                
            </div>
        </a>
        <a href="/pokemon/Pidgey">
            <div>
                <img src="https://www.serebii.net/Shiny/SWSH/016.png">
                
            </div>
        </a>
        <a href="/pokemon/Venusaur">
            <div>
                <img src="https://images.gameinfo.io/pokemon/256/p3f93.png">
                
            </div>
        </a>
    </div>

</body>
</html>