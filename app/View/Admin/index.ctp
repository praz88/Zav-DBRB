<br/>

<?php
$paginator = $this->Paginator;

//second part
echo "<div class='container'>";
$page_params = $this->Paginator->params();
$limit = $page_params['limit'];
$options = array( 5 => '5', 10 => '10', 20 => '20' );

echo "<fieldset><legend><div class='row'><div class='col-md-9'>";
echo $this->Form->create();
echo "Viewing ".$this->Form->select('limit', $options, array(
    'value'=>$limit,
    'default'=>5,
    'empty' => FALSE,
    'onChange'=>'$(this).parent().attr("action", "/dbrb/admin?limit=" + $(this).val());this.form.submit();',
    'name'=>'limit'
    )
)." Book Records ".$this->Form->end();


echo "</div><div class='col-md-3'><a class='btn btn-primary' href='../admin/insert' >Insert a new book</a>";



echo "</div></div><br/></legend>";

if($books)
{

        echo "<div class='row'>";
            // in the sort method, ther first parameter is the same as the column name in our table
            // the second parameter is the header label we want to display in the view
            echo "<div class='col-md-4'>" . $paginator->link('Sort by book status', array('sort' => 'status', 'direction' => 'desc')) . "</div>";
            echo "<div class='col-md-4'>" . $paginator->link('Sort by requester names',array('sort' => 'requesterName', 'direction' => 'desc')) . "</div>";
            echo "<div class='col-md-4'>" . $paginator->sort('adminName', 'Sort by Admin responsible') . "</div>";
        echo "</div><hr/>";
        // loop through the book's records
        foreach( $books as $index ){
            echo "<div class='panel panel-default' style='padding-left:25px;margin-right:20px;padding-top:25px;padding-right:15px'><div class='row'>";
            	echo "<div class='panel panel-warning col-md-2 book-div'><div class='panel-heading book-info'>Stream: {$index['Book']['stream']}</div></div>";
				echo "<div class='panel panel-warning col-md-2 book-div'><div class='panel-heading book-info'>Title and Author: {$index['Book']['titleAndAuthor']}</div></div>";
                echo "<div class='panel panel-warning col-md-2 book-div'><div class='panel-heading book-info'>Donor: {$index['Book']['donorName']}</div></div>";
                echo "<div class='panel panel-warning col-md-2 book-div'><div class='panel-heading book-info'>Donor Email:  {$index['Book']['donorEmail']}</div></div>";
            echo "</div><div class='row'>";
                echo "<div class='panel panel-warning col-md-2 book-div'><div class='panel-heading book-info'>Donor Mobile:  {$index['Book']['donorMobile']}</div></div>";
                echo "<div class='panel panel-warning col-md-2 book-div'><div class='panel-heading book-info'>Requester:  {$index['Book']['requesterName']}</div></div>";
                echo "<div class='panel panel-warning col-md-2 book-div'><div class='panel-heading book-info'>Requester Email: {$index['Book']['requesterEmail']}</div></div>";
                echo "<div class='panel panel-warning col-md-2 book-div'><div class='panel-heading book-info'>Requester Mobile: {$index['Book']['requesterMobile']}</div></div>";

            echo "</div><div class='row'>";
                echo "<div class='panel panel-warning col-md-2 book-div'><div class='panel-heading book-info'>Status: {$index['Book']['status']}</div></div>";
                echo "<div class='panel panel-warning col-md-2 book-div'><div class='panel-heading book-info'>Last edited by Admin: {$index['Book']['adminName']}</div></div>";
                echo "<div class='panel panel-warning col-md-2 book-div'><div class='panel-heading book-info'>Tansaction completion date: {$index['Book']['transactionCompletedOn']}</div></div>";
                echo "<div class='panel panel-warning col-md-2 book-div'> <div class='panel-heading book-info'>"//.$this->Form->postLink('Delete',
                                    //array('action' => 'delete', $index['Book']['id']),
                                    //array('class'=>'button red', 'confirm' => 'Are you sure You wish to delete this record?'))."  "
                                    .$this->Form->postLink('Edit book details',
                                    array('action' => 'edit', $index['Book']['id']),
                                    array('class'=>'button red', 'confirm' => 'Are you sure You wish to edit this record?'))."</div></div>";


            echo "</div></div><br/>";
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