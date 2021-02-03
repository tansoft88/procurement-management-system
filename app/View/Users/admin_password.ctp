
 <?php echo $this->Form->create('User');?>
<fieldset> <br>
<?php
  
         echo $this->Form->input("old_password", array('size' => 30,'type'=>'password'));
		 echo "</br>";
         echo $this->Form->input('new_password', array('size' =>29,'type'=>'password'));
		 	 echo "</br>";
        echo $this->Form->input('confirm_password', array('size' =>26,'type'=>'password'));
		echo "</br>";
        echo $this->Form->submit('Change');?>
		</fieldset><br>
