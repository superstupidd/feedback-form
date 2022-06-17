<?php /*Template name:view*/?>
<?php
global $wpdb;
$object =$wpdb->get_results("SELECT user_login,user_nicename,user_email FROM wp_users WHERE ID='1' ");

foreach($object as $user){?>
<tbody>
<tr>
<td><?php echo $user->user_login;?></td>
<td><?php echo $user->user_nicename;?></td>
<td><?php echo $user->user_email;?></td>
</tr>
<?php } ?>
</tbody>
 