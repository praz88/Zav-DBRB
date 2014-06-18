<?php
$paginator = $this->Paginator;
echo "<div class='container'>";
echo "<h1> Books Availaible</h1>";
if($books){
echo "<table class='table table-striped'>";
        // our table header, we can sort the data Book the paginator sort() method!
        echo "<thead>";    
            // in the sort method, ther first parameter is the same as the column name in our table
            // the second parameter is the header label we want to display in the view
            echo "<th>" . $paginator->sort('id', 'ID') . "</th>";
            echo "<th>" . $paginator->sort('title', 'Title') . "</th>";
            echo "<th>" . $paginator->sort('holder', 'Holder') . "</th>";
        
        echo "</thead>";
        // loop through the book's records
        foreach( $books as $index ){
            echo "<tr>";
                echo "<td>{$index['Book']['id']}</td>";
                //echo "<td>{$index['Book']['title']}</td>";
        echo "<td>{$this->Html->link($index['Book']['title'],array('controller' => 'books', 'action' => '../request', $index['Book']['id']))}</td>";
                echo "<td>{$index['Book']['holder']}</td>";
                 
            echo "</tr>";
        }  
echo "</table>";

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