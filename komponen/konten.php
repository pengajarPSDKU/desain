<?php
    $file_konten="komponen/content-$menu.html";

    if(file_exists($file_konten))
    {
        include $file_konten;
    }
    else
    {
        echo "<main class='container my-5'><div class='alert
        alert-warning'>halaman tidak di temukan.</div></main>";
    }
?>