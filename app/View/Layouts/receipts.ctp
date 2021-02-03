<html>
<head>
<script language="javascript" type="text/javascript">
        function printReceipt() {
			var oldURL = document.referrer;
            //Print Page
            window.print();
			document.location.href = oldURL;
			return false;
          }
    </script>
</head>
<body onLoad="printReceipt()">
<?php
echo $content_for_layout;
?> 
</body>
</html>