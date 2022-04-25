<?php
 	include_once 'movies.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="" >
        <title>movie site</title>
        <link rel="stylesheet" href="styles.css">
        <script src="sidebar.js" defer></script>
    </head>
    <body>
        <header class="header">
        <button class="menu-icon-btn" data-menu-icon-btn>
            <img class ="menu-icon"src="—Pngtree—menu icon_4419509.png" width="30px" height="30px">
            </button>
            <logo class="logo">
                <img src="symbol.png">
                MY MOVIES</logo>
        </header>
        <div class="container">
            <aside class="sidebar " data-sidebar>
                <form action="mymovies.php" method="get">
                    <label for="fname">Genere: </label>
                    <select name = "genere" id = "genere"  style = " height : 30px;border-radius:20px;text-align:center;font-size:15px;"onchange = "this.form.submit()" >
                        <option value="All" selected>none</option>
                        <option value="All">All</option>
                        <option value="Nature">Nature</option>
                        <option value="English">English</option>
                        <option value="Comedy">Comedy</option>
                        <option value="Action">Action</option>                       
                   </select>
                   </form>
            </aside>
            <main class="content " data-content> 
                <div class="row">
                    <?php
                        if (empty($_GET["genere"])){
                            $sql="select videolink from video;";
                        }
                        else{
                            $category=$_GET["genere"];
                            if($category=="All"){
                            $sql="select videolink from video;";
                            }
                            else{
                                $sql="select videolink from video where category='".$category."';";
                            }
                        }
                        $result=mysqli_query($mysqli,$sql);
                        while($row=mysqli_fetch_assoc($result)){
                            foreach ($row as $field => $value) { 
                                echo "<div class='column'>";
                                echo "<video controls poster='postre.jpg' id='videos'><source src='".$value."' type='video/mp4'></video>";
                                echo"<br>";
                                echo "<button class='feedback' like-change>";
                                echo "<img src='like.png' width='30px' height='42px'>";
                                echo "</button>";
                                echo "<button class='feedback'like-change>";
                                echo "<dislike>";
                                echo "<img src='dislike.png' 'width='30px' height='42px'>";
                                echo "</dislike>";
                                echo "</button>";   
                                echo "</div>";
                            }   
                        }
                    ?>
                </div>
            </main>
        </div>
    </body>
</html>