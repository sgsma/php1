<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuento: El Renacuajo Paseador</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f7f7f7;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        
        .paragraph-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: justify;
        }
    </style>
</head>
<body>
    <div class="paragraph-container">
        <h2>El Renacuajo Paseador</h2>
        <?php
        $cuento = "Había una vez un renacuajo que, bajo la luna, paseaba por el prado. Saltó de la rama de un sauce al lomo de un caballo. '¡Qué bonito soy!', gritaba, y el eco le respondía: '¡Qué bonito soy!'.\n";
        $cuento .= "Por ser tan presumido, cayó al agua, dio un brinco, se subió a una piedra y de allí a un tomate. '¡Qué bonito soy!', gritaba, y el eco le respondía: '¡Qué bonito soy!'.\n";
        $cuento .= "Pero el tomate resbaló, cayó al agua, dio un brinco, se subió a una burra y de allí a un bizcocho. '¡Qué bonito soy!', gritaba, y el eco le respondía: '¡Qué bonito soy!'.\n";
        $cuento .= "Pero el bizcocho se acabó, cayó al agua, dio un brinco, se subió a un tejado y de allí a un zapote. '¡Qué bonito soy!', gritaba, y el eco le respondía: '¡Qué bonito soy!'.\n";
        $cuento .= "Pero el zapote resbaló, cayó al agua, dio un brinco, se subió a una media y de allí a un melón. '¡Qué bonito soy!', gritaba, y el eco le respondía: '¡Qué bonito soy!'.\n";
        $cuento .= "Pero el melón también se hundió, cayó al agua, dio un brinco, se subió a un farol y de allí a una pera. '¡Qué bonito soy!', gritaba, y el eco le respondía: '¡Qué bonito soy!'.\n";
        $cuento .= "Pero la pera resbaló, cayó al agua, dio un brinco, se subió a una maceta y de allí a una mora. '¡Qué bonito soy!', gritaba, y el eco le respondía: '¡Qué bonito soy!'.\n";
        $cuento .= "Pero la mora se hundió, cayó al agua, dio un brinco, se subió a una jaula y de allí a una bola. '¡Qué bonito soy!', gritaba, y el eco le respondía: '¡Qué bonito soy!'.\n";
        $cuento .= "Pero la bola también se hundió, cayó al agua, dio un brinco, se subió a un pajarito y de allí a una loma. '¡Qué bonito soy!', gritaba, y el eco le respondía: '¡Qué bonito soy!'.\n";
        $cuento .= "Pero la loma resbaló, cayó al agua, dio un brinco, se subió a un palo y de allí a un zapote. '¡Qué bonito soy!', gritaba, y el eco le respondía: '¡Qué bonito soy!'.\n";
        $cuento .= "Pero el zapote se hundió, cayó al agua, dio un brinco, se subió a un bote y de allí al espacio. '¡Qué bonito soy!', gritaba, y el eco le respondía: '¡Qué bonito soy!'.\n";
        $cuento .= "Y como en el espacio no hay quien responda, al último brinco, ¡plum!, se fue para el fondo, quedándose sin un 'eco' que le diga '¡Qué bonito soy!'.\n";
        
        echo '<p class="paragraph-text">' . $cuento . '</p>';
        ?>
    </div>
</body>
</html>
