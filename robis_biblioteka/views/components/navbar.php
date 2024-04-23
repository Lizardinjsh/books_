<header>s
    <div class="bookhub-box">
    <h1 class="book">Books</h1>
    </div>
    <nav>
        <a href="/">List of the books</a>
        <?php if($_SESSION["user"] == true || $_SESSION["admin"] == 1){ ?>
        <a href="book-create">Add different books</a>
        <?php } ?>
    <?php if($_SESSION["user"] == true) { ?>
        <a href="books-borrowed">Borrowed books</a>
    <?php } ?>
    </nav>
</header>