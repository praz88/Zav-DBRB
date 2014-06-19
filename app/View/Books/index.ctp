<?php
$paginator = $this->Paginator;
echo "<h1> Books Availaible</h1>";
if($books){
        // our table header, we can sort the data Book the paginator sort() method!
        echo "<div class='row'>";    
            // in the sort method, ther first parameter is the same as the column name in our table
            // the second parameter is the header label we want to display in the view
            echo "<div class='col-md-3'></div>";
            echo "<div class='col-md-3'>" . $paginator->sort('title', 'Sort by Title') . "</div>";
            echo "<div class='col-md-3'>" . $paginator->sort('holder', 'Sort by Holder') . "</div>";
            echo "<div class='col-md-3'></div>";
        
        echo "</div><hr/>";
        // loop through the book's records
        foreach( $books as $index ){
            echo "<div class='row'>";
            	echo "<div class='col-md-3'><img src=\"http://covers.openlibrary.org/b/isbn/{$index['Book']['isbn']}-S.jpg\" /></div>";
				echo "<div class='col-md-3'>{$index['Book']['title']}</div>";
                echo "<div class='col-md-3'>{$index['Book']['holder']}</div>";
				echo "<div class='col-md-3' id=\"bookInfo-{$index['Book']['isbn']}\"><a href='#' id='getBook' onclick=\"getInfo('{$index['Book']['isbn']}')\">Get Info</a></div>";
                 
            echo "</div><hr/>";
        } 

// pagination section


}
?>
<div class="pagination pagination-large" style="margin-left:38%">
    <ul class="pagination">
            <?php
                echo $paginator->prev(__('prev'), array('tag' => 'li'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                echo $paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'active','tag' => 'li','first' => 1));
                echo $paginator->next(__('next'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
            ?>
        </ul>
    </div>
    </div>
</div>