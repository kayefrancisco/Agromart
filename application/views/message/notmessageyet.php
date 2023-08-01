<?php
    $mysession = $this->session->userdata('auth_user')['unique_id'];
?>

<div id="not_message_yet">
    <div>
        <div id="new_message_avtar" style="background-image: url('../upload/<?= $mysession; ?>'); background-size: 100% 100%"></div>
            
        <h4 id="new_message_name"><?= $data['fname']; ?></h4>
        <p id="new_message_title" class="text-center">Start messaging with your friend</p>
    </div>
</div>