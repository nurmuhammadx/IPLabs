<div class="nav">
    <a href="/allLabs/index.php">
        <img src="/allLabs/images/main/NX.png" alt="Logo" class="logo">
    </a>
    <ul class="menu">
        <li>
            <a href="/allLabs/index.php">Главная</a>
        </li>
        <li>
            <a href="/allLabs/pages/works.php">Мои работы</a>
        </li>
        <li>
            <a href="/allLabs/pages/gallery.php">Галерея</a>
        </li>
        <li>
            <a href="/allLabs/pages/about.php">Обо мне</a>
        </li>
        <li>
            <a href="/allLabs/pages/game.php">Игра</a>
        </li>
        <li>
            <a href="/allLabs/pages/contacts.php">Контакты</a>
        </li>
    </ul>
    <ul class="sign-up">
        <li>
            <?php if (!isset($_SESSION["auth"])) {
                echo "<a href='/allLabs/pages/registration.php'>Регистрация</a>";
            } ?>
        </li>
        <li>
            <?php if (!isset($_SESSION["auth"])) {
                echo "<span>|</span>";
            } ?>
        </li>
        <li>
            <?php if (!isset($_SESSION["auth"])) {
                echo "<a href='/allLabs/pages/authorization.php'>Войти</a>";
            } ?>
        </li>
        <?php if (isset($_SESSION["auth"])) {
            if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 1) {
                echo "<li><a href='/allLabs/pages/profile.php'><h3 class='admin-a'>" . $_SESSION["username"] . "</h3></a></li>";
            }
            if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0) {
                echo "<li><a href='/allLabs/pages/profile.php'><h3 class='admin-a'>" . $_SESSION["username"] . "</h3></a></li>";
                echo "<li><a href='/allLabs/pages/listuser.php'><h3 class='list-a'>List user</h3></a></li>";
            }
            echo "<li><a href='/allLabs/server/signout.php'>Выход</a></li>";
            }
            ?>
        <li>
            <button class="menu-open">
                <img src="/allLabs/images/icons/menu.svg" alt="open-menu">
            </button>
        </li>
    </ul>
</div>

