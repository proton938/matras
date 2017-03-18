	<?php

move_uploaded_file($_FILES["fil"]["tmp_name"],$_FILES["fil"]["name"]);

echo '$_FILES["fil"] ["tmp_name"]';

?>