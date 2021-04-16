<?php

    setcookie("id", $user["id"], time()-14*60*60, "localhsot/site/mmg");
    setcookie("hash", $user["hash"], time()-14*60*60, "localhsot/site/mmg");
    setcookie("username", $user["user"], time()-14*60*60, "localhsot/site/mmg");
    header("Location: index.php");

?>