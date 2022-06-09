<html>
    <body>

    <?php
function showPages($pagesArray){
    if(count($pagesArray) == count($pagesArray, COUNT_RECURSIVE)){
        echo '<div style="background-color: white;" class="paper">';
        echo '<p class="page-title">'.$pagesArray["PageName"].'</p>';
        echo '<p class="paper-content">'.$pagesArray["PageContent"].'</p>';
        echo "<a class=\"editPage\" href=\"../Control/updatePageContent.control.php?pageid={$pagesArray["Page_ID"]}\">Edit</a>";
        echo "<a class=\"deletePage\" href=\"../Model/deletePage.php?pageid={$pagesArray["Page_ID"]}\">X</a>";
        echo '</div>';
        return True;
    }
    
    foreach($pagesArray as $p){
        echo '<div style="background-color: white;" class="paper">';
        echo '<p class="page-title">'.$p["PageName"].'</p>';
        echo '<p class="paper-content">'.$p["PageContent"].'</p>';
        echo '<br>';
        echo "<a class=\"editPage\" href=\"../Control/updatePageContent.control.php?pageid={$p["Page_ID"]}\">Edit</a>";
        echo "<a class=\"deletePage\" href=\"../Model/deletePage.php?pageid={$p["Page_ID"]}\">X</a>";
        echo '</div>';
        echo'<br><br>';
    }
    
}

echo "
<style>
.page-title{
    margin-bottom:-50px;
    margin-left:400px;
    font-family: \"Times New Roman\";
    font-weight:bold;
    font-size:30px;
}
.disclaimer {
    visibility: hidden;
    display: none;
  }
    .editPage{
        position: relative;
        margin-top: -200px;
        margin-left:600px;
        font-size:20px;
    }
    
    .deletePage{
        position: relative;
        margin: 10px;
        left:100px;
        bottom:20px;
        font-size:40px;
    }
    
    body {
    margin: 40px 0 0;
    background: #91D1D3;
    font-family: 'Roboto', sans-serif;
}

.paper {
    position: relative;
    width: 90%;
    max-width: 800px;
    min-width: 400px;
    height: 480px;
    margin: 0 auto;
    background: #fafafa;
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,.3);
    overflow: hidden;
}
.paper:before {
    content: '';
    position: absolute;
    top: 0; bottom: 0; left: 0;
    width: 60px;
    background: radial-gradient(#575450 6px, transparent 7px) repeat-y;
    background-size: 30px 30px;
    border-right: 3px solid #D44147;
    box-sizing: border-box;
}

.paper-content {
    position: absolute;
    top: 30px; right: 0; bottom: 30px; left: 60px;
    margin-top: 1s00px;
    background: linear-gradient(transparent, transparent 28px, #91D1D3 28px);
    background-size: 30px 30px;
}

.paper-content textarea {
    width: 100%;
    max-width: 100%;
    height: 100%;
    max-height: 100%;
    line-height: 30px;
    padding: 0 10px;
    border: 0;
    outline: 0;
    background: transparent;
    color: mediumblue;
    font-family: 'Handlee', cursive;
    font-weight: bold;
    font-size: 18px;
    box-sizing: border-box;
    z-index: 1;
}

footer {
    margin-top: 30px;
    text-align: center;
    font-size: 12px;
    color: rgba(0,0,0,.6);
}
footer a {
    color: rgba(255,255,255,.8);
}
</style>
";