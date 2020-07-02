<?php

session_start();

class Main
{
    public function container(array $data, $i)
    {
        
        if($i <= 3){
?>

        <!DOCTYPE HTML>
        <html>

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Самый тяжелый тест</title>
        </head>

        <body>

            <form method="POST">
                <div>
                    <p><?= $data[$i]['q'] . ' ' .  $data[$i]['count'] . '?' ?></p>
                    <select name="<?= $i ?>">
                        <option disabled>Выберите ответ</option>
                        <?php foreach ($data[$i]['ans'] as $key => $answer) : ?>
                            <option value="<?= $key ?>"><?= $answer ?></option>
                        <?php endforeach; ?>
                    </select>
                    <button type="submit">Далее</button>
                </div>
            </form>

            <?php

        return;
    } else {

        ?>
             <form action="result.php" method="POST">
                 <button type="submit">Результат</button>
                </form>
            </body>
        
            </html>
            <?php
 
    }
    }

    public function Questions()
    {
        return [
            '0' => [
                'q' => 'Сколько будет',
                'count' => '5+6',
                'ans' => [
                    'a' => '11',
                    'b' => '13',
                    'c' => '10',
                    'd' => '16'
                ]
            ],
            '1' => [
                'q' => 'Сколько будет',
                'count' => '4-2',
                'ans' => [
                    'a' => '2',
                    'b' => '13',
                    'c' => '10',
                    'd' => '16'
                ]
            ],
            '2' => [
                'q' => 'Сколько будет',
                'count' => '3+2',
                'ans' => [
                    'a' => '11',
                    'b' => '13',
                    'c' => '5',
                    'd' => '16'
                ]
            ],
            '3' => [
                'q' => 'Сколько будет',
                'count' => '3+1',
                'ans' => [
                    'a' => '11',
                    'b' => '13',
                    'c' => '4',
                    'd' => '16'
                ]
            ],
        ];
    }

    private function getQuestion()
    {
    }
}
$a = new Main();
if($_POST){
    $_SESSION['user'][] = 'GoodDayCommander';
    $i = count($_SESSION['user']);
    $array = $a->Questions();
    $a->container($array, $i);
    $_SESSION['answers'][] = $_POST;
}else{
    $array = $a->Questions();
    $a->container($array, $i = 0);
}
// var_dump($_POST);
// var_dump($_SESSION);

?>