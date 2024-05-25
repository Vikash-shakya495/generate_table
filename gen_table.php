<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table{
        border-radius: 10px;
        border: 4px solid purple;
        padding: 5px 5px;
        background-color: grey;
    }
    .container{
        background-color: burlywood;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }
    .form{
        text-align: center;
        padding-top: 20px;
        padding-bottom: 10px;
    }
    h1{
        text-align: center;
        font-size: 30px;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        color: red;
        background-color: yellow;
        text-shadow: -2px -2px 0 black, 2px -2px 0 black, -2px 2px 0 black, 2px 2px 0 black;
    }
    #label_1{
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    }
</style>
<body>
    <div class="container">
        <h1>Generator of tables</h1>
        <div class="form">
            <form action="gen_Table.php" method="post">
                <div class="input">
                    <label for="take_number" id=label_1>Type No of table: </label>
                    <input type="number" id="take_number" name="backend_take_num">
                </div>
                <div class="submit">
                    <input type="submit" name="backend_submit" value = "Gen_Table">
                </div>
            </form>
        </div>
        <div class="php_table">
            <?php
                if(isset($_POST['backend_submit'])){
                    $table_number = $_POST['backend_take_num'];
                    echo "<table border = '2'>";
                    $colors = array("yellow","green","red","blue","yellowgreen","purple","pink","orange","lightblue","aqua","viloet","indigo","skyblue","scarlet","brown","golden","lemonade","olive");
                    $color = $colors[array_rand($colors)];
                    for($i=1;$i<=10;$i++){
                        echo "<tr>";
                        for($j=1;$j<=$table_number;$j++){
                            echo "<td align = 'center' style = 'background-color: $color'>".$j." x ".$i." = ".$j*$i. "</td>";
                            // $n=1;
                            // global $n;
                            // echo "table of".$n;
                        }
                        echo "</tr>";
                        // ++$n;
                    }
                    echo "</table>";
                    // next time, i'll try to change to color for particular column by random color
                }
                
            ?>
        </div>
    </div>
</body>
</html>