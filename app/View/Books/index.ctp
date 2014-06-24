<?php
$paginator = $this->Paginator;
if($books){
echo "<h1>".$books[0]['Book']['status']." ".$books[0]['Book']['stream']." books"."</h1>";
echo "<hr/><h4> Select and click Go</h4>";
}
else
{
echo "<br/>";
}


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

        echo "No books were found, select different commbination and click Go";
    	echo $this->Form->input('status', array('options' => array('Available'=>'Available', 'Donated'=>'Donated', 'Requested'=>'Requested'),
                                                'selected' =>  'Available',
                                                'label' => array('class' => 'control-label','text' => '')
                                                 ));
        echo $this->Form->input('stream', array('options' => array('School'=>'School books', 'PUC and CET'=>'PUC and CET books', 'Engineering'=>'Engineering books'
                                , 'Commerce and Management'=>'Commerce and Management books', 'Arts and Culture'=>'Arts and Culture books', 'Non academic'=>'Non academic books'),
                                'selected' => 'School books',
                                'label' => array('class' => 'control-label','text' => '')
                                ));
    }
echo'</div>';
	echo '<button type="submit" class="btn btn-primary submit-button">Go</button>';
	echo $this->Form->end();
	echo "</div><hr/>";

if($books){
        // our table header, we can sort the data Book the paginator sort() method!
        // loop through the book's records
        foreach( $books as $index ){
            echo "<div class='row'>";
            	echo "<div class='col-md-3'><img src=\"http://covers.openlibrary.org/b/isbn/{$index['Book']['isbn']}-S.jpg\" /></div>";
				echo "<div class='col-md-3'>Title: {$index['Book']['title']}</div>";
                echo "<div class='col-md-3'>Status: {$index['Book']['status']}</div>";
				echo "<div class='col-md-3' id=\"bookInfo-{$index['Book']['isbn']}\"><a href='#' class='btn btn-default' id='getBook' onclick=\"getInfo('{$index['Book']['isbn']}')\">Get Book Info</a></div>";
                echo "</div><div class='row'>";
                echo "<div class='col-md-3'>Donated by: {$index['Book']['donatorName']}</div>";
                if($index['Book']['status'] == "Donated"){
                   echo "<div class='col-md-3'>Received by: {$index['Book']['requesterName']}</div>";
                }
                else if($index['Book']['status'] == "Requested"){
                echo "<div class='col-md-3'>Requested by: {$index['Book']['requesterName']}</div>";
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
                    echo "<div class='col-md-3'><button class='btn btn-default' type='submit' >Request as {$this->Session->read('Requester.name')}</button></div>";
                    //echo $this->Form->end(__('Request'));
                    echo "<div class='col-md-3'><a role='button' class='btn btn-default' href='/dbrb/request/index/".$index['Book']['id']."' >Request with another id</a></div>";
                }
                else
                {
                    echo "<div class='col-md-3'><a role='button' class='btn btn-default' href='/dbrb/request/index/".$index['Book']['id']."' >Request</a></div>";
                }
             }

            echo "</div><hr/>";
        } 

// pagination section


}
?>