<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>vraag04</title>
    <link rel="stylesheet" href="css/gridoverlap.css">
</head>
<body>
<div id="dashboard">
    <div class="item header">Header</div>
    <div class="item">
        Sidebar
    </div>
    <div class="item">
        <table style="width:100%;background-color: white;">
            <tr style="background-color: white;">
                <th style="background-color: #2c2c2f;">Key Apparaat</th>
                <th style="background-color: #2c2c2f;">Apparaat</th> 
                <th style="background-color: #2c2c2f;">Graden</th>
            </tr>
            <?php
            
            $apparaat = [
                'pizza' => 'pizza oven',
                'water' => 'waterkoker',
                'magn' => 'magnetron',
                'air' => 'airfryer',
            ];

            $apparaatG = [
                'pizza' => '132 Graden',
                'water' => '647 Graden',
                'magn' => '32 Graden',
                'air' => ' 75 Graden',
            ];

            foreach ($_POST['energie'] as $key) {
                print '<tr>' . '<td style="text-align: center;font-size: 15px;background-color: #2c2c2f;">' . ($key) . '</td>' . '<td style="text-align: center;font-size: 15px;background-color: #2c2c2f;">' . $apparaat[$key] . '</td>' . '<td style="text-align: center;font-size: 15px;background-color: #2c2c2f;">' . $apparaatG[$key] . '</td>';
            }
            ?>
        </table>
        <div class="select">
        </div>
    </div>
    <div class="item">Ads</div>
    <div class="item footer">Footer</div>
</div>
</body>
</html>