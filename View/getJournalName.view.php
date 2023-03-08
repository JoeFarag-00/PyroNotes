<?php
    echo"
    <form action=\"../Model/addJournal2User.php?userID={$userID}\" method=\"post\">
        <input type=\"text\" name=\"Jname\" required placeholder=\"Enter Journal Name\">
        <button type=\"submit\">Add Journal</button>
    </form>";