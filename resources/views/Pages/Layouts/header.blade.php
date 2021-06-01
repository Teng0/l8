

    <!-- Navigation -->
    <nav class="top-menu-container">
        <div class="logo-header">
            <a href="">
                <img
                    src="https://cdn.pixabay.com/photo/2017/02/18/19/20/logo-2078018_960_720.png"
                    alt="Logo personal portfolio"
                    title="Logo personal portfolio"
                />
            </a>
        </div>

        <ul>
            <li>

                <a href="/pages" class="{{ request()->is('pages') ? 'active':'test'}}">Home</a>
            </li>
            <li>
{{--                <a href="/pages/about"  class="{{ request()->is('/pages/about') ? 'active':'test'}}">About</a>--}}
                <a href="/pages/about"  class="{{ request()->is('pages/about/*') ? 'active':'test'}}">About</a>
            </li>
            <li>
                <a href="/pages/portfolio">Portfolio</a>
            </li>
            <li>
                <a href="/pages/contact">Contact</a>
            </li>
        </ul>
    </nav>
