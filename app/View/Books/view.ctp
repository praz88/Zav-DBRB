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
        echo "<td>{$this->Html->link($index['Book']['title'],array('controller' => 'books', 'action' => 'request', $index['Book']['id']))}</td>";
                echo "<td>{$index['Book']['holder']}</td>";
                 
            echo "</tr>";
        }  
echo "</table>";

// pagination section
  
        
    echo "<div class='row pager'>";
        // the 'first' page button
        echo "<div class='col-md-2'>";
        echo $paginator->first("First");
        echo "</div>";
        // 'prev' page button, 
        // we can check using the paginator hasPrev() method if there's a previous page
        // save with the 'next' page button
        
        if($paginator->hasPrev())
        {
            echo "<div class='col-md-2'>";
            echo $paginator->prev("Prev");
            echo "</div>";
        }
       
        // the 'number' page buttons
        echo "<div class='col-md-2'>";
        echo $paginator->numbers(array('modulus' => 4));
        echo "</div>";
        // for the 'next' button
         
        if($paginator->hasNext())
        {   
            echo "<div class='col-md-2'>";
            echo $paginator->next("Next");
            echo "</div>";
        }        


        // the 'last' page button
        echo "<div class='col-md-2'>";
        echo $paginator->last("Last");
        echo "</div>";

    echo "</div>";
    
 echo "</div>";
    
}

// tell the user there's no records found
else{
    echo "No Books found.";
}
?>