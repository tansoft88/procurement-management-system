<fieldset>
<legend><h3><?php echo __('User Login'); ?></h3></legend>
<?php
 //creating the login form
echo $this->Form->create(array('action' => 'login'));
	echo "</br><font size=4>";
echo $this->Form->input('username',array('AutoComplete'=>'off','size'=>30));
echo "<br>";
echo "<br>";
echo $this->Form->input('password',array('AutoComplete'=>'off','size'=>31));
echo "</font><br>";
echo "<br>";
echo $this->Form->end('Login');
echo "<br>";
echo "<br>"; 

?>
</fieldset> 