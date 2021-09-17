<?php
if(!defined('ABSPATH')) {die('You are not allowed to call this page directly.');}

if(!empty($payments)) {
  ?>
  <div class="mp_wrapper">
	<div class="mp_wrapper-table-wrapper">
		<table id="mepr-account-payments-table" class="mepr-account-table">
		  <thead>
			<tr>
			  <th><?php _ex('Date', 'ui', 'press-pool'); ?></th>
			  <th><?php _ex('Total', 'ui', 'press-pool'); ?></th>
			  <th><?php _ex('Membership', 'ui', 'press-pool'); ?></th>
			  <th><?php _ex('Method', 'ui', 'press-pool'); ?></th>
			  <th><?php _ex('Status', 'ui', 'press-pool'); ?></th>
			  <th><?php _ex('Invoice', 'ui', 'press-pool'); ?></th>
			  <?php MeprHooks::do_action('mepr_account_payments_table_header'); ?>
			</tr>
		  </thead>
		  <tbody>
			<?php
			  foreach($payments as $payment):
				$alt = (isset($alt) && !$alt);
				$txn = new MeprTransaction($payment->id);
				$pm  = $txn->payment_method();
				$prd = $txn->product();
			?>
				<tr class="mepr-payment-row <?php echo ($alt)?'mepr-alt-row':''; ?>">
				  <td data-label="<?php _ex('Date', 'ui', 'press-pool'); ?>"><?php echo MeprAppHelper::format_date($payment->created_at); ?></td>
				  <td data-label="<?php _ex('Total', 'ui', 'press-pool'); ?>"><?php echo MeprAppHelper::format_currency( $payment->total <= 0.00 ? $payment->amount : $payment->total ); ?></td>

				  <!-- MEMBERSHIP ACCESS URL -->
				  <?php if(isset($prd->access_url) && !empty($prd->access_url)): ?>
					<td data-label="<?php _ex('Membership', 'ui', 'press-pool'); ?>"><a href="<?php echo stripslashes($prd->access_url); ?>"><?php echo MeprHooks::apply_filters('mepr-account-payment-product-name', $prd->post_title, $txn); ?></a></td>
				  <?php else: ?>
					<td data-label="<?php _ex('Membership', 'ui', 'press-pool'); ?>"><?php echo MeprHooks::apply_filters('mepr-account-payment-product-name', $prd->post_title, $txn); ?></td>
				  <?php endif; ?>

				  <td data-label="<?php _ex('Method', 'ui', 'press-pool'); ?>"><?php echo (is_object($pm)?$pm->label:_x('Unknown', 'ui', 'press-pool')); ?></td>
				  <td data-label="<?php _ex('Status', 'ui', 'press-pool'); ?>"><?php echo MeprAppHelper::human_readable_status($payment->status); ?></td>
				  <td data-label="<?php _ex('Invoice', 'ui', 'press-pool'); ?>"><?php echo $payment->trans_num; ?></td>
				  <?php MeprHooks::do_action('mepr_account_payments_table_row',$payment); ?>
				</tr>
			<?php endforeach; ?>
		  </tbody>
		</table>
	</div>

    <div id="mepr-payments-paging">
      <?php if($prev_page): ?>
        <a href="<?php echo $account_url.$delim.'currpage='.$prev_page; ?>">&lt;&lt; <?php _ex('Previous Page', 'ui', 'press-pool'); ?></a>
      <?php endif; ?>
      <?php if($next_page): ?>
        <a href="<?php echo $account_url.$delim.'currpage='.$next_page; ?>" style="float:right;"><?php _ex('Next Page', 'ui', 'press-pool'); ?> &gt;&gt;</a>
      <?php endif; ?>
    </div>
    <div style="clear:both"></div>
  </div>
  <?php
}
else {
  ?><div class="mp_wrapper mp-no-subs"><?php
    _ex('You have no completed payments to display.', 'ui', 'press-pool');
  ?></div><?php
}

MeprHooks::do_action('mepr_account_payments', $mepr_current_user);
