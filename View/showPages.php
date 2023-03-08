<?php
function showPages($pagesArray){
    if(count($pagesArray) == count($pagesArray, COUNT_RECURSIVE)){
        echo '<div style="background-color: red;" class="page">';
            echo '<p class="title">'.$pagesArray["PageName"].'</p>';
            echo '<p class="content">'.$pagesArray["PageContent"].'</p>';
            echo "<a class=\"editPage\" href=\"../Control/updatePageContent.control.php?pageid={$pagesArray["Page_ID"]}\">Edit</a>";
            echo "<a class=\"deletePage\" href=\"../Model/deletePage.php?pageid={$pagesArray["Page_ID"]}\">X</a>";
        echo '</div>';
        return True;
    }

    foreach($pagesArray as $p){
        echo '<div style="background-color: red;" class="page">';
            echo '<p class="title">'.$p["PageName"].'</p>';
            echo '<p class="content">'.$p["PageContent"].'</p>';
            echo "<a class=\"editPage\" href=\"../Control/updatePageContent.control.php?pageid={$p["Page_ID"]}\">Edit</a>";
            echo "<a class=\"deletePage\" href=\"../Model/deletePage.php?pageid={$p["Page_ID"]}\">X</a>";
        echo '</div>';
    }

}