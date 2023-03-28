<?php
// Filename: php/nav.php
// Purpose: creates the nav

echo <<< _END
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand me-5" href="">BTA VF</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
_END;

// handle the 'active' of the nav
echo '<li class="nav-item"><a class="nav-link' .
    (strcmp($page, '') === 0 ? ' active" aria-current="page"' : '"') .
    ' href="' . $url_base . '">Home</a></li>';

echo '<li class="nav-item"><a class="nav-link' .
    (strcmp($page, 'stories') === 0 ? ' active" aria-current="page"' : '"') .
    ' href="' . $url_base . 'stories/">Stories</a></li>';

echo '<li class="nav-item"><a class="nav-link' .
    (strcmp($page, 'methods') === 0 ? ' active" aria-current="page"' : '"') .
    ' href="' . $url_base . 'methods/">Methods</a></li>';

echo '<li class="nav-item"><a class="nav-link' .
    (strcmp($page, 'concepts') === 0 ? ' active" aria-current="page"' : '"') .
    ' href="' . $url_base . 'concepts/">Concepts</a></li>';

echo <<< _END
            </ul>
        </div>
    </div>
</nav>
_END;
