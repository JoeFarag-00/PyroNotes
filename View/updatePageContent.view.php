<?Php
function showEditForm($content, $id){
    echo '<div class="container">';
        echo '<form action="../Model/updatePageContent.model.php?pageid='.$id.'" method="post">';
            echo '<textarea name="content" class="contents" placeholder="Write your thoughts" value=>'.$content.'</textarea>';
            echo '<button type="submit">Update</button>';
        echo '</form>';
    echo '</div>';
}
