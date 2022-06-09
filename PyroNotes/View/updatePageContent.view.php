<?Php
function showEditForm($content, $id){
    echo "
    <style>
    @import url(https://fonts.googleapis.com/css?family=Roboto);
    @import url(https://fonts.googleapis.com/css?family=Handlee);
    
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

    .updateFormBtn{
        position: absolute;
    }
    </style>
    ";
    echo '<div style="background-color:white;"class="paper">';
        echo '<form action="../Model/updatePageContent.model.php?pageid='.$id.'" method="post">';
            echo '<textarea name="content" class="paper-content" placeholder="Write your thoughts" value=>'.$content.'</textarea>';
            echo '<button class="updateFormBtn" type="submit">Update</button>';
            echo '</form>';
            echo '</div>';
        }
