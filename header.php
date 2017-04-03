<?php include_once "head.php"; ?>
<body <?php body_class(); ?>>
    <header class="header">
    <a href="/"><div class="header__logo"></div></a>
    <nav class="header__menu">
        <div class="mobile-only">
            <div class="menu__icon">
                <div class="menu__icon-bar menu__icon-bar-1"></div>
                <div class="menu__icon-bar menu__icon-bar-2"></div>
                <div class="menu__icon-bar menu__icon-bar-3"></div>
            </div>
        </div>
        <ul>
            <li class="header__menu-item"><a href="/library/">Library</a></li>
            <li class="header__menu-item"><a href="/downloads-data">Download &amp; Data</a></li>
            <li class="header__menu-item"><a href="/apis">API Hub</a></li>
            <li class="header__menu-item"><a href="/testcentre">Test centre</a></li>
            <li class="header__menu-item"><a href="/learn">Learn</a></li>
            <li class="header__menu-item"><a href="/community">Community</a></li>
            <li class="header__menu-item"><a href="/health-digital-tools">Health Digital Tools</a></li>
        </ul>
    </nav>
    <div class="header__search-area">
        <form method="get" action="/" class="header__search-form header__search--disabled">
            <div class="header__search--loading-message">Search loading...</div>
            <div class="header__search-icon"></div>
            <input title="Search" type="text" class="header__search-box" name="s"/>
            <button class="header__search-submit" type="submit">Search</button>
        </form>
    </div>
</header>
