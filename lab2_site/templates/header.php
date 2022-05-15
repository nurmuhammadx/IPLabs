<div class="nav">
    <a href="/lab2_site/index.php">
        <img src="/lab2_site/images/main/NX.png" alt="Logo" class="logo">
    </a>
    <ul class="menu">
        <li>
            <a href="../index.php">Главная</a>
        </li>
        <li>
            <a href="/lab2_site/pages/works.php">Мои работы</a>
        </li>
        <li>
            <a href="/lab2_site/pages/gallery.php">Галерея</a>
        </li>
        <li>
            <a href="/lab2_site/pages/about.php">Обо мне</a>
        </li>
        <li>
            <a href="/lab2_site/pages/contacts.php">Контакты</a>
        </li>
    </ul>
    <ul class="sign-up">
        <li>
            <?php if (!isset($_SESSION["auth"])) {
                echo "<a href='/lab2_site/pages/registration.php'>Регистрация</a>";
            } ?>
        </li>
        <li>
            <?php if (!isset($_SESSION["auth"])) {
                echo "<span>|</span>";
            } ?>
        </li>
        <li>
            <?php if (!isset($_SESSION["auth"])) {
                echo "<a href='/lab2_site/pages/authorization.php'>Войти</a>";
            } ?>
        </li>
        <?php if (isset($_SESSION["auth"])) {
            if(isset($_SESSION["username"]) && $_SESSION["username"] != 0) {
                echo "<li><a href='/lab2_site/pages/profile.php'>" . $_SESSION["username"] . "</a></li>";
            }
            if (isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0) {
                echo "<li><a href='/lab2_site/pages/admin.php'><h3 class='admin-a'>Administrator</h3></a></li>";
            }
            echo "<li><a href='/lab2_site/server/signout.php'>Выход</a></li>";
            }
            ?>
        <li>
            <button class="menu-open">
                <img src="/lab2_site/images/icons/menu.svg" alt="open-menu">
            </button>
        </li>
    </ul>
</div>

