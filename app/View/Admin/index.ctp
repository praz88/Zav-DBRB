

<?php
$paginator = $this->Paginator;

//second part
echo "<div class='container'>";
echo "<fieldset><legend> View Book Records or "; echo $this->Html->link('Insert Books', array('action'=>'../admin/insert'));echo "</legend>";

if($books)
{

    echo "<table class='table table-striped'>";
        // our table header, we can sort the data Book the paginator sort() method!
        echo "<thead>";    
            // in the sort method, ther first parameter is the same as the column name in our table
            // the second parameter is the header label we want to display in the view
            echo "<th>" . $paginator->sort('id', 'ID') . "</th>";
            echo "<th>" . $paginator->sort('title', 'Title') . "</th>";
            echo "<th>" . $paginator->sort('isbn', 'ISBN') . "</th>";
            echo "<th>" . $paginator->sort('donator', 'Donator') . "</th>";
            echo "<th>" . $paginator->sort('holder', 'Holder') . "</th>";
            echo "<th>" . $paginator->sort('requester', 'Requester') . "</th>";
            echo "<th>" . $paginator->sort('receiver', 'Receiver') . "</th>";
            echo "<th>" . "Action" . "</th>";
        echo "</thead>";
        // loop through the book's records
        foreach( $books as $index )
        {
            echo "<tr>";
            echo "<td>{$index['Book']['id']}</td>";
            echo "<td>{$index['Book']['title']}</td>";
            echo "<td>{$index['Book']['isbn']}</td>";
            echo "<td>{$index['Book']['donator']}</td>";
            echo "<td>{$index['Book']['holder']}</td>";
            echo "<td>{$index['Book']['requester']}</td>";
            echo "<td>{$index['Book']['receiver']}</td>";
            echo "<td>".$this->Form->postLink('Delete', 
                    array('action' => 'delete', $index['Book']['id']),
                    array('class'=>'button red', 'confirm' => 'Are you sure You wish to delete this record?'))."  ".$this->Form->postLink('Edit', 
                    array('action' => 'edit', $index['Book']['id']),
                    array('class'=>'button red', 'confirm' => 'Are you sure You wish to edit this record?'))."</td>";
            echo "</tr>";
        }  
    echo "</table>";

    // pagination section
  echo "</fieldset><br>";  
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