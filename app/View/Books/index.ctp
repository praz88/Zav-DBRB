<div class="container">
<?php
$paginator = $this->Paginator;
echo "<hr/><div><h4> Select and click Go</h4>";
                                        echo "<div class='form-inline'><div class='form-group'>";
	echo $this->Form->create();

if($books){
	echo $this->Form->input('status', array('options' => array('Available'=>'Available', 'Donated'=>'Donated', 'Requested'=>'Requested'),
                                            'selected' =>  $books[0]['Book']['status'],
                                            'label' => array('class' => 'control-label','text' => '')
                                             ));
    echo $this->Form->input('stream', array('options' => array('School'=>'School books', 'PUC and CET'=>'PUC and CET books', 'Engineering'=>'Engineering books'
                            , 'Commerce and Management'=>'Commerce and Management books', 'Arts and Culture'=>'Arts and Culture books', 'Non academic'=>'Non academic books'),
                            'selected' => $books[0]['Book']['stream'],
                            'label' => array('class' => 'control-label','text' => '')
                            ));
    }
    else{


    	echo $this->Form->input('status', array('options' => array('Available'=>'Available', 'Donated'=>'Donated', 'Requested'=>'Requested'),
                                                'selected' =>  $this->Session->read('Books.status'),
                                                'label' => array('class' => 'control-label','text' => '')
                                                 ));
        echo $this->Form->input('stream', array('options' => array('School'=>'School books', 'PUC and CET'=>'PUC and CET books', 'Engineering'=>'Engineering books'
                                , 'Commerce and Management'=>'Commerce and Management books', 'Arts and Culture'=>'Arts and Culture books', 'Non academic'=>'Non academic books'),
                                'selected' => $this->Session->read('Books.stream'),
                                'label' => array('class' => 'control-label','text' => '')
                                ));
    }
echo'</div>';
	echo '<button type="submit" class="btn btn-primary submit-button">Go</button>';
	echo $this->Form->end();
	echo "</div></div><hr/>";

if($books){
echo "<h1>".$books[0]['Book']['status']." ".$books[0]['Book']['stream']." books"."</h1><hr/>";

}
else
{
  echo "<h1>No books were found, select different combination and click Go</h1><hr/>";
}

if($books){
        // our table header, we can sort the data Book the paginator sort() method!
        // loop through the book's records
        foreach( $books as $index ){
            echo "<div class='panel panel-default' style='padding-left:25px;margin-right:20px;padding-top:25px;padding-right:25px'><div class='row'>";
            	//echo "<div class='panel panel-warning col-md-2'><div class='panel-heading book-info'>Image: <img alt='Unavailable' src=\"http://covers.openlibrary.org/b/isbn/{$index['Book']['isbn']}-S.jpg\" /></div></div>";
				echo "<div class='panel panel-warning col-md-3 book-div'><div class='panel-heading book-info'>Title and Author: {$index['Book']['titleAndAuthor']}</div></div>";
                echo "<div class='panel panel-warning col-md-3 book-div'><div class='panel-heading book-info'>Status: {$index['Book']['status']}</div></div>";
				echo "<div class='panel panel-warning col-md-3 book-div'><div class='panel-heading book-info' id=\"bookInfo-{$index['Book']['isbn']}\"><a href='#' class='btn btn-default' id='getBook' onclick=\"getInfo('{$index['Book']['isbn']}')\">Get Book Info</a></div></div>";
                echo "</div><div class='row'>";
                echo "<div class='panel panel-warning col-md-3 book-div'><div class='panel-heading book-info'>Donated by: {$index['Book']['donorName']}</div></div>";
                if($index['Book']['status'] == "Donated"){
                   echo "<div class='panel panel-warning col-md-3 book-div'><div class='panel-heading book-info'>Received by: {$index['Book']['requesterName']}</div></div>";
                }
                else if($index['Book']['status'] == "Requested"){
                echo "<div class='panel panel-warning col-md-3 book-div'><div class='panel-heading book-info'>Requested by: {$index['Book']['requesterName']}</div></div>";
                }
                else{

                if($this->Session->read('Requester.name') != null)
                {
                    //echo $this->Form->create('Book');
                    echo $this->Form->create(
                                 'Book' ,
                                 array( 'url'     => array( 'controller' => 'request/index/'.$index['Book']['id']))
                             );
                    echo $this->Form->input('status', array('value' =>"Requested", 'type' => 'hidden'));
                    echo $this->Form->input('requesterName', array('value' =>$this->Session->read('Requester.name'),'type' => 'hidden'));
                    echo $this->Form->input('requesterEmail', array('value' =>$this->Session->read('Requester.email'),'type' => 'hidden'));
                    echo $this->Form->input('requesterMobile', array('value' =>$this->Session->read('Requester.mobile'),'type' => 'hidden'));
                    echo "<div class='panel panel-warning col-md-3 book-div'><div class='panel-heading book-info'><button class='btn btn-default' type='submit' >Request for institute</button></div></div>";
                    //echo $this->Form->end(__('Request'));
                    echo "<div class='panel panel-warning col-md-3 book-div'><div class='panel-heading book-info'><a role='button' class='btn btn-default' href='/dbrb/request/index/".$index['Book']['id']."' >Request with another id</a></div></div>";
                }
                else
                {
                    echo "<div class='panel panel-warning col-md-3 book-div'><div class='panel-heading book-info'><a role='button' class='btn btn-default' href='/dbrb/request/index/".$index['Book']['id']."' >Request</a></div></div>";
                }
             }

            echo "</div></div><br/>";
        } 

// pagination section


}
?>

<br/>
<br/>
<br/>
<br/>
</div>
