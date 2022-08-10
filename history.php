


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/form.css">
</head>
<body>
<table>
    <tr>
        <th>
            id
        </th>
        <th>id64</th>
        <th>
        accountName
        </th>
        <th>
        password
        </th>
        <th>
        lockcode
        </th>
        <th>
        discordID
        </th>
        <th>
            email
        </th>

    </tr>

    <tr>
<td>
    0
</td>

<td id='765'>
    765
</td>
<td>
    username
</td>

<td>
    password
</td>
<td>
    L123
</td>


<td>
    discord#dis
</td>
<td>
    email@email.email
</td>
    </tr>
    



    <?php
echo '<pre style="display: none">';
require('config.php');
echo '</pre>';

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$query = "SELECT `id`, `id64`, `accountName`, `password`, `lockCode`, `discordID`, `email` FROM accounthistory";

$sql = mysqli_query($conn, $query);


while($row = mysqli_fetch_array($sql)) {

    echo '<tr>';

    echo '<td>';
    echo $row['id']; 
    echo '</td>';

    echo '<td id="';
    echo $row['id64'];
    echo '">';
    //id

    echo $row['id64'];
    echo '</td>';

    echo '<td>';
    echo $row['accountName']; 
    echo '</td>';

    echo '<td>';
    echo $row['password'];
    echo '</td>';

    echo '<td>';
    echo $row['lockCode'];
    echo '</td>';

    echo '<td>';
    echo $row['discordID'];
    echo '</td>';

    echo '<td>';
    echo  $row['email'];
    echo '</td>';
    
    echo '</tr>';

}
    ?>
</table>

</body>
</html>