<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Extension</title>
    <style>
        table {
            text-align: center;
            width: 500px;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <th>Filter Id</th>
            <th>Filter Name</th>
        </thead>
        <tbody>
        <?php
            foreach (filter_list() as $k => $v) {
                print("<tr><td>".$v."</td>");
                print("<td>".$k."</td></tr>");
            }
        ?>
        </tbody>
    </table>
</body>
</html>