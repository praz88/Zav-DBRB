

<?php
$paginator = $this->Paginator;

//second part
echo "<div class='container'>";
echo "<fieldset><legend> View Book Records or "; echo $this->Html->link('Insert Books', array('action'=>'../admin/insert'));echo "</legend>";

if($books)
{

        echo "<div class='row'>";
            // in the sort method, ther first parameter is the same as the column name in our table
            // the second parameter is the header label we want to display in the view
            echo "<div class='col-md-2'>" . $paginator->sort('stream', 'Sort by Stream') . "</div>";
            echo "<div class='col-md-2'>" . $paginator->sort('donatorName', 'Sort by Donator') . "</div>";
            echo "<div class='col-md-2'>" . $paginator->sort('requesterName', 'Sort by Requester') . "</div>";
            echo "<div class='col-md-2'>" . $paginator->sort('status', 'Sort by Status') . "</div>";
            echo "<div class='col-md-2'>" . $paginator->sort('adminName', 'Sort by Admin') . "</div>";

        echo "</div><hr/>";
        // loop through the book's records
        foreach( $books as $index ){
            echo "<div class='row'>";
            	echo "<div class='col-md-3'>Stream: {$index['Book']['stream']}</div>";
				echo "<div class='col-md-3'>Title: {$index['Book']['title']}</div>";
                echo "<div class='col-md-3'>Donator: {$index['Book']['donatorName']}</div>";
                echo "<div class='col-md-3'>Donator Email: {$index['Book']['donatorEmail']}</div>";
            echo "</div><div class='row'>";
                echo "<div class='col-md-3'>Donator Mobile: {$index['Book']['donatorMobile']}</div>";
                echo "<div class='col-md-3'>Requester: {$index['Book']['requesterName']}</div>";
                echo "<div class='col-md-3'>Requester Email: {$index['Book']['requesterEmail']}</div>";
                echo "<div class='col-md-3'>Requester Mobile: {$index['Book']['requesterMobile']}</div>";

            echo "</div><div class='row'>";
                echo "<div class='col-md-3'>Status: {$index['Book']['status']}</div>";
                echo "<div class='col-md-3'>Admin name: {$index['Book']['adminName']}</div>";
                echo "<div class='col-md-3'>"//.$this->Form->postLink('Delete',
                                    //array('action' => 'delete', $index['Book']['id']),
                                    //array('class'=>'button red', 'confirm' => 'Are you sure You wish to delete this record?'))."  "
                                    .$this->Form->postLink('Edit book details',
                                    array('action' => 'edit', $index['Book']['id']),
                                    array('class'=>'button red', 'confirm' => 'Are you sure You wish to edit this record?'))."</div>";
				echo "<div class='col-md-3' id=\"bookInfo-{$index['Book']['isbn']}\"><a href='#' id='getBook' onclick=\"getInfo('{$index['Book']['isbn']}')\">Get Book Info</a></div>";

            echo "</div><hr/>";
            }

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