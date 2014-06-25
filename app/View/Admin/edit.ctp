<br/>
<div class="book form">
<?php echo $this->Form->create('Book'); ?>

    <fieldset>
        <legend><?php echo __('Edit Book'); ?></legend>
         <?php echo $this->Form->input('stream', array(
            'options' => array('School'=>'School books', 'PUC and CET'=>'PUC and CET books', 'Engineering'=>'Engineering books'
                                                           , 'Commerce and Management'=>'Commerce and Management books', 'Arts and Culture'=>'Arts and Culture books', 'Non academic'=>'Non academic books'),
                                                           'selected' => $books['Book']['stream']));?>
       <?php echo $this->Form->input('title', array('value' =>$books['Book']['title']));?>
       <?php echo $this->Form->input('isbn', array('value' =>$books['Book']['isbn']));?>
       <?php echo $this->Form->input('donatorName', array('value' =>$books['Book']['donatorName']));?>
       <?php echo $this->Form->input('donatorEmail', array('value' =>$books['Book']['donatorEmail']));?>
       <?php echo $this->Form->input('donatorMobile', array('value' =>$books['Book']['donatorMobile']));?>
       <?php echo $this->Form->input('holder', array('value' =>$books['Book']['holder']));?>
       <?php echo $this->Form->input('adminName', array('value' =>"Admin name",'disabled' => 'disabled'));?>
       <?php echo $this->Form->input('requesterName', array('value' =>$books['Book']['requesterName']));?>
       <?php echo $this->Form->input('requesterEmail', array('value' =>$books['Book']['requesterEmail']));?>
       <?php echo $this->Form->input('requesterMobile', array('value' =>$books['Book']['requesterMobile']));?>
       <?php echo $this->Form->input('status', array(
                                         'options' => array('Available'=>'Available', 'Donated'=>'Donated', 'Requested'=>'Requested'),
                                         'selected' => $books['Book']['status']));?>

    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

<br/>
<br/>
<br/>