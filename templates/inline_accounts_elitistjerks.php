<?php
$account_data = array('exchange_name' => get_exchange_name('elitistjerks'));
/* TODO add support for 'a'/'an' in exchange data */
?>

<div class="instructions_add">
<h2>Adding an <?php echo $account_data['exchange_name']; ?> account</h2>

<ol class="steps">
	<li>Log into your <?php echo $account_data['exchange_name']; ?> account
		and visit your <a href="https://www.ejpool.info/index.php?page=account&action=edit">Edit Account page</a>.<br>
		<img src="<?php echo htmlspecialchars(url_for('img/accounts/elitistjerks1.png')); ?>"></li>

	<li>Copy and paste your <i>API Key</i> into the <a class="wizard_link" href="<?php echo htmlspecialchars(url_for('wizard_accounts_pools')); ?>">"Add new Mining Pool" form</a>, and click "Add account".<br>
		<img src="<?php echo htmlspecialchars(url_for('img/accounts/elitistjerks2.png')); ?>"></li>
</ol>
</div>

<div class="instructions_safe">
<h2>Is it safe to provide <?php echo htmlspecialchars(get_site_config('site_name')); ?> an <?php echo $account_data['exchange_name']; ?> API key?</h2>

<ul>
	<li>At the time of writing, an <?php echo $account_data['exchange_name']; ?> API key can only be used to retrieve account balances and worker status;
		it should not be possible to perform transactions or change user details using the API key.</li>

	<li>Your <?php echo $account_data['exchange_name']; ?> API keys will <i>never</i> be displayed on the <?php echo htmlspecialchars(get_site_config('site_name')); ?>
		site, even if you have logged in.</li>

	<li>At the time of writing, it is not possible to change or reset your <?php echo $account_data['exchange_name']; ?> API key.</li>
</ul>
</div>