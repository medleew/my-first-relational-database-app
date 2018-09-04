<?php include('frontend/head.php');?>
<link rel="stylesheet" href="../assets/css/style.css">
</head>
<body class="login-background">
<div class="row">
    <div class="card login">
    <div class="card-title">
        <h1>COGIP</h1>
    </div>
    <div class="card-content">
        <form name="connexion" method="post" action="../../model/auth.php">
        <div class="login-id">
            <label for="id">Identifiant :</label>
            <input type="text" name="login"><br>
        </div>   
        <div class="login-pwd"> 
            <label for="password">Mot de passe :</label>
            <input type="password" name="pwd"><br>
        </div>    
        <?php
            if(isset($_GET['msg'])){
                echo "<p class='error'>" . $_GET['msg'] . "</p>";
            }
        ?>
            <input type="submit" name="send" value="Connexion" class="waves-effect waves-light btn blue accent-4 login-btn">
        </form>
    </div>    
    </div>
</div>
</body>
</html>