<html>
<head>
<script language="javascript" type="text/javascript">
        function printID() {
            //Print Page
            window.print();
			return false;
          }
    </script>
</head>
<body onLoad="printID()">
<?php echo $this->fetch('content'); ?>
</body>
</html>