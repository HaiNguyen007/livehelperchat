<div class="message-row"><div class="msg-date"><?php echo date('Y-m-d H:i:s',$msg->time);?></div><span class="usr-tit"><?php echo htmlspecialchars($chat->nick)?>:&nbsp;</span><?php echo nl2br(htmlspecialchars(trim($msg->msg)));?></div>