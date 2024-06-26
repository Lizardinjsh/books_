<?php
    require "components/navbar.php";
    
?>
<?php  require "components/head.php";
?>
<article>
    <div class="edit-box">
        <div class="book-box">
            <h1>Add more books</h1>
        </div>
        <form method="POST">
            <label>
                Title:
                <input value="<?= $_POST["title"] ?? "" ?>" class="edit-input" name="title" placeholder="<?php if (isset($errors["title"])){?><?= $errors["title"] ?> <?php } else { ?>  <?php } ?>"/>
            </label>
            <label>
                Author:
                <input class="edit-input" name="author" value="<?= $_POST["author"] ?? "" ?>" placeholder="<?php if (isset($errors["author"])){?><?= $errors["author"] ?> <?php } else { ?>  <?php } ?>"/>
            </label>
            <label>
                Release date:
                <input type="date"class="edit-input"name="release_date" value="<?= $_POST["release_date"] ?? "" ?>"/>
            </label>
            <label>
                Available:
                <input class="edit-input"name="available" placeholder="<?php if (isset($errors["available"])){?><?= $errors["available"] ?> <?php } else { ?>  <?php } ?>"/>
            </label>
            <button class="book-edit-button">Save</button>
        </form>
    </div>
</article>
<?php
    require "components/footer.php";
?>