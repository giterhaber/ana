


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>

    <link rel="stylesheet" href="./css/form.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
    <h1>
        logout
        <button id="logout">log out</button>
    </h1>
    <h1>test</h1>

    <form id="accountForm">
    <select id="select">
        <option>email</option>
    </select>
    <br>
    <br>
    <input id="account" name="account"placeholder="accountname" type="text"><br>

    <input id="password" name="password"placeholder="password" type="text"><br>

    <input id="lockcode" name="lockcode"placeholder="lock code" type="text"><br>

    <input id="discord" name="discord"placeholder="discord" type="text"><br>
    <input class="email" name="email" type="text" placeholder="email" hidden>
    <br>


    <input id="readAccount" type="submit" value="submit">
    </form>
    <h1 style="display: none">test delete</h1>

    <form id="deleteAccount">
        <input type="text" name="id" placeholder="delete id">
        <input type="submit" value="submit">
    </form>

    <h1 style="display: none"> account list </h1>

    <a href="./history.php" target="_blank">history</a>
    <div>
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
    
    $query = "SELECT `id`, `id64`, `accountName`, `password`, `lockCode`, `discordID`, `email` FROM accounttable";
    
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

</div>
<script src="https://www.gstatic.com/firebasejs/9.6.7/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.6.7/firebase-firestore-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.6.7/firebase-auth-compat.js"></script>
<script src="./js/form.js"></script>
<script src="./firebase/firebaseApi.js"></script>
<script src="./firebase/logout.js"></script>

</body>

<script>
    
</script>
</html>