<?php
$target=readline('[?] E-mail Target : ');
$msg=readline('[?] Message    : ');
$run=system('sendemail -xu ferdi.cloxt00@gmail.com -xp cPIyXEmsLakJb1xv -s smtp-relay.sendinblue.com:587 -f info@smkn1rangkasbitung.sch.id -t '.$target.'-m "'.$msg.'" -o message-header="<ferdigans00@gmail.com>"';
echo($run);