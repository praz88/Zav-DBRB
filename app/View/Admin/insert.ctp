<div class="book form">
<?php echo $this->Form->create('Book'); ?>
    <fieldset>
        <legend><?php echo __('Add Book'); ?></legend>
    <?php echo $this->Form->input('stream', array(
     'options' => array('School'=>'School books', 'PUC and CET'=>'PUC and CET books', 'Engineering'=>'Engineering books'
                                                    , 'Commerce and Management'=>'Commerce and Management books', 'Arts and Culture'=>'Arts and Culture books', 'Non academic'=>'Non academic books'),
                                                    'selected' => 'School books'));?>
       <?php echo $this->Form->input('title');?>
       <?php echo $this->Form->input('isbn');?>
       <?php echo $this->Form->input('donatorName');?>
       <?php echo $this->Form->input('donatorEmail');?>
       <?php echo $this->Form->input('donatorMobile');?>
       <?php echo $this->Form->input('holder', array('value' =>'Zav Foundation','disabled' => 'disabled'));?>
       <?php echo $this->Form->input('adminName', array('value' =>'Admin name','disabled' => 'disabled'));?>
    </fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>