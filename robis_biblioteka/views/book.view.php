<?php 
    require "components/head.php";
?>
<?php
    require "components/navbar.php";
?>
<?php if($_SESSION["user"] == true ){ ?>
<p class="welcome">Hello, <?= $_SESSION["username"] ?> !</p>
<?php } ?>
<form action="/logout" method="POST">
    <button>Logout</button>
</form>
<div class="page-title">
</div>
<article class="book-article">

        <?php foreach($books as $book){?>
        <div class="card" id=<?= $book["id"] ?>>
            <div class="card-text">
                <h2>Title: <?= $book["title"]?></h2>
            </div>
            <div class="card-text">
                <p>Author: <?= $book["author"]?></p>
            </div>
                <p>Release date: <?= $book["release_date"]?></p>
                <p>Available: <?= $book["available"]?></p>
                <?php if($_SESSION["user"] == true) { ?>
                    
                    <form method="POST" action="/borrow">
                        <button name="id" value="<?= $book["id"] ?>">Borrow</button>
                    </form>
                
                <?php } ?>
                <?php if($_SESSION["user"] == true && $_SESSION["admin"] == 1){ ?>
                
                    <form method="POST" action="/delete">
                        <button name="id" value="<?= $book["id"] ?>">Delete</button>
                    </form>
                
                
                    <a href="/edit?id=<?= $book["id"] ?>"<?php $book["id"] ?> class="edit-button">Edit</a>
                
                <?php } ?>
        </div>
        <?php } ?>
        
</article>
<?php
    require "components/footer.php";
?>