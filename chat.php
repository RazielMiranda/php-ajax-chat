<?php
require 'model/db.php';
$query = "SELECT * FROM CHAT ORDER BY ID DESC";
$chatSelect = $chatDB->query($query)->fetchAll();
foreach ($chatSelect as $data) {
?>
<div id="chat-data">
    <span style="color: green;"><?=$data['NAME']?>:</span>
    <span style="color: brown;"><?=$data['MESSAGE']?></span>
    <!-- TODO: FORMAT DATE -->
    <span style="float: right;"><?=$data['DATE']?></span>
</div>
<?php } ?>