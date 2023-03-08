<?php
    echo"
    <form action=\"../Model/updateJournalName.model.php?journalID={$_REQUEST["journalID"]}\" method=\"post\">
        <input type=\"text\" name=\"Jname\" required placeholder=\"Enter Journal Name\">
        <button type=\"submit\">Update Journal Name</button>
    </form>";