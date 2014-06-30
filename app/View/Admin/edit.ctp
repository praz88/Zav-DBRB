<br/>
<div class="book form">
<?php echo $this->Form->create('Book'); ?>

    <fieldset>
        <legend><?php echo __('Edit Book. Use this form to update the status of the book.'); ?></legend>
         <?php echo $this->Form->input('stream', array(
            'options' => array('School'=>'School books', 'PUC and CET'=>'PUC and CET books', 'Engineering'=>'Engineering books'
                                                           , 'Commerce and Management'=>'Commerce and Management books', 'Arts and Culture'=>'Arts and Culture books', 'Non academic'=>'Non academic books'),
                                                           'selected' => $books['Book']['stream']));?>
       <?php echo $this->Form->input('titleAndAuthor', array('value' =>$books['Book']['titleAndAuthor'],
                                                     array(
                                                     'required' => true,
                                                     'placeholder' => 'Title and author is required',
                                                     'type' => 'text'
                                                     )));?>
       <?php echo $this->Form->input('isbn', array('value' =>$books['Book']['isbn']));?>
       <?php echo $this->Form->input('donorName', array('value' =>$books['Book']['donorName'],
                                                            array(
                                                            'required' => true,
                                                            'placeholder' => 'Donor name is required',
                                                            'type' => 'text'
                                                            )));?>
       <?php echo $this->Form->input('donorEmail', array('value' =>$books['Book']['donorEmail']));?>
       <?php echo $this->Form->input('donorMobile', array('value' =>$books['Book']['donorMobile']));?>
         <?php echo $this->Form->input('donorAddress', array('value' =>$books['Book']['donorAddress']));?>
       <?php echo $this->Form->input('holder', array('value' =>$books['Book']['holder']));?>
        <?php echo $this->Form->input('adminName', array('value' =>$this->Session->read('Admin.username'), 'type' => 'hidden'));?>
       <?php echo $this->Form->input('adminName', array('value' =>$this->Session->read('Admin.username'),'disabled' => 'disabled'));?>
       <?php echo $this->Form->input('requesterName', array('value' =>$books['Book']['requesterName']));?>
       <?php echo $this->Form->input('requesterEmail', array('value' =>$books['Book']['requesterEmail']));?>
       <?php echo $this->Form->input('requesterMobile', array('value' =>$books['Book']['requesterMobile']));?>
         <?php echo $this->Form->input('requesterAddress', array('value' =>$books['Book']['requesterAddress']));?>
       <?php echo $this->Form->input('status', array(
                                         'options' => array('Available'=>'Available with me', 'Donated'=>'Donated to the above requester', 'Requested'=>'Requested by the above person', "Unavailable/Not received"=>'Unavailable/Not received from the willing donor'),
                                         'selected' => $books['Book']['status']));?>

    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<br/>
<br/>
<br/>