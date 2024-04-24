<?php 
    require "views/components/head.php";
?>
<?php
    require "views/components/navbar.php";
?>
<article>
    <div class="edit-box">
        <div>
            <h1>Edit <?= $book["title"]?></h1>
        </div>
        <form method="POST"> 
            <label>
                Title:
                <input class="edit-input" name="title" value="<?= $_POST["title"] ?? $book['title'] ?>"/>
            </label>
            <label>
                Author:
                <input class="edit-input" name="author" value="<?= $_POST["author"] ?? $book["author"] ?>"/>
            </label>
            <label>
                Release year:
                <input class="edit-input" name="release_date" value="<?= $_POST["release_date"] ?? $book["release_date"] ?>"/>
            </label>
            <label>
                Available:
                <input class="edit-input" name="available" value="<?= $_POST["available"] ?? $book["available"] ?>"/>
            </label>
            <input type="hidden" name="id" value="<?= $book["id"]?>"/>
            <button class="book-edit-button">Save</button>
        </form>
    </div>
</article>

<?php
    require "views/components/footer.php";
?>