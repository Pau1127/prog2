<?php
session_start();

// Definir los cuentos en varios idiomas dentro de un array PHP
$cuentos = [
    'es' => [
        'titulo' => 'El Pobre León',
        'cuento' => 'Todos los días en el zoológico, la gente iba a ver a los animales, los osos, monos, jirafas, leones, etc., los cuales, si  los sigo nombrando no alcanzaré a narrar la historia.
          
          Todos pensaban que estaban todos los leones en su jaula, pero... no era así, hay un gran león que está encerrado en una  jaula más pequeña.
        
          Un día un hombre le fue a pegar con un látigo, el guardia no le dijo nada, pues al león nadie lo quería, excepto por la señorita de la limpieza, ella siempre le daba carne a este león a escondidas, además ella lo había criado. El león se llamaba Tristón y no estoy bromeando, pero así se llamaba, coincidencia, ¿verdad?. 

           Tristón, no sabía ni atacar, ni cazar; le daban la comida en platos, como a los perros o gatos, o sea, lo domesticaron por lo  tanto no aprendió lo que los demás sabían. Una noche, la señorita de la limpieza fue a la jaula del león, ella llevaba una mochila bastante grande, cuando dejó la mochila en el suelo, Tristón la olfateó sintiendo olor a carne y la señorita le dijo:
           
           - Vengo a entrenarte para que aprendas a cazar.
             Cada miércoles y viernes en la noche el león era entrenado; el día lunes en la noche, la señorita volvió pero sin llevar la mochila:
           - Tristón, he venido a entrenarte los días anteriores para poder liberarte, así podrás conseguir tu propia comida allá en la selva. 

           Entonces realizaron el viaje; cuando llegaron, tuvieron una despedida muy cariñosa. 

           Pasó un tiempo y Tristón encontró una leona y formaron una bella familia, siendo muy feliz, por lo
            que ya no sería más Tristón, pero no  se le puede cambiar el nombre a nadie, que ya fue criado con 
            tal fama. Por otra parte, en el zoológico, la señorita se volvió la jefa del zoo y declaró la ley de igualdad entre todos los animales',
    ],
    'en' => [
        'titulo' => 'The Poor Lion',
        'cuento' => "Every day at the zoo, people went to see the animals, the bears, monkeys, giraffes, lions, etc., which, if I keep naming them I won't be able to narrate the story. Everyone thought that all the lions were in their cage, but it was not like that, there is a great lion that is locked in a smaller cage.

       One day a man went to beat him with a whip, the guard did not say anything, because nobody wanted the lion, except for the cleaning lady, she always gave meat to this lion secretly, besides she had raised him. The lion was called Tristón and I'm not kidding, but that's what it was called, coincidence, right?

       Tristón didn't know how to attack or hunt; they gave him food in plates, like dogs or cats, that is, they domesticated him so he didn't learn what the others knew. One night the cleaning lady went to the lion's cage, she was carrying a backpack quite big. When she left the backpack on the ground, Tristón sniffed it, sensing the smell of meat, and the lady told him:
    
     - I come to train you so that you learn to hunt.
    
     Every Wednesday and Friday night the lion was trained. On Monday night, the lady returned but without carrying the backpack:
    
     - Tristón, I have come to train you the previous days, to be able to free you, so you can get your own food there in the jungle.
    
    So they made the trip; when they arrived, they had a very affectionate farewell.
    
    Some time passed and Tristón found a lioness and they formed a beautiful family, being very happy, so he would no longer be Tristón, but you cannot change the name of anyone who was already raised with such fame. On the other hand, in the zoo, the lady became the boss of the zoo and she declared the law of equality between all animals."
    ],
    'pt' => [
        'titulo' => 'O Pobre Leão',
        'cuento' =>  'Todos os dias no zoológico, as pessoas iam ver os animais, os ursos, macacos, girafas, leões, etc., que, se continuo a nomeá-los, não vou conseguir narrar a história.
           Todos pensavam que todos os leões estavam em sua jaula, mas não era assim, há um grande leão que
            está trancado em uma  gaiola menor.

           Um dia um homem foi bater nele com um chicote, o guarda não disse nada, porque ninguém queria o leão, exceto a senhora da limpeza, ela sempre dava carne a esse leão secretamente, além de tê-lo criado. O leão chamava-se Tristón e não estou brincando, mas era assim que se chamava, coincidência, certo?

           Tristón, não sabia atacar nem caçar, deram-lhe comida em pratos, como cães ou gatos, ou seja, domesticaram-no para que ele não aprendesse o que os outros sabiam. Uma noite a faxineira foi para a jaula do leão, ela estava carregando uma mochila bastante grande, quando deixou a mochila no chão, Tristón a cheirou, sentindo o cheiro da carne e a senhora lhe disse:
           
           - Venho treinar você para que aprenda a caçar.
           
           Todas as quartas e sextas à noite o leão era treinado. Na segunda à noite a senhora voltava, mas sem carregar a mochila.
           
           - Tristón, vim treinar você nos dias anteriores para poder libertá-lo, para que você consiga sua própria comida lá na selva.
           
           Assim fizeram a viagem; quando chegaram, tiveram uma despedida muito carinhosa.

           Algum tempo passou e Tristón encontrou uma leoa e formaram uma linda família, sendo muito felizes, então ele não seria mais Tristón, mas não se pode mudar o nome de ninguém que já foi criado com tanta fama. Por outro lado, no zoológico, a senhora virou a patroa do zoológico e declarou a lei da igualdade entre todos os animais.',
    ]
];

// Establecer el idioma predeterminado y verificar si se ha cambiado
if (isset($_POST['idioma'])) {
    $idioma = $_POST['idioma'];
    $_SESSION['idioma'] = $idioma;
} else {
    // Si no se ha enviado idioma, toma el valor de $_SESSION o usa español como predeterminado
    $idioma = isset($_SESSION['idioma']) ? $_SESSION['idioma'] : 'es';
}
// Obtener el título y el cuento en el idioma seleccionado
$titulo = $cuentos[$idioma]['titulo'];
$cuento = $cuentos[$idioma]['cuento'];
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/estilo.css">
    <title><?php echo $titulo; ?></title>
</head>

<body>
    <div class="container text-center">
        <h1><?php echo $titulo; ?></h1>

        <!-- Formulario para cambiar idioma -->
        <form method="POST" class="my-3">
            <label for="idioma">Selecciona el idioma:</label>
            <select name="idioma" id="idioma">
                <option value="es" <?php if ($idioma == 'es') echo 'selected'; ?>>Español</option>
                <option value="en" <?php if ($idioma == 'en') echo 'selected'; ?>>Inglés</option>
                <option value="pt" <?php if ($idioma == 'pt') echo 'selected'; ?>>Portugués</option>
            </select>
            <button type="submit" class="btn btn-primary">Cambiar idioma</button>
        </form>

        <!-- Imagen y cuento -->
        <div class="imagen-cuento">
            <img src="1cuento/img/tristón.jpeg" alt="Tristón" class="img-fluid">
        </div>
        <p class="texto-cuento"><?php echo nl2br($cuento); ?></p>
    </div>
</body>

</html>