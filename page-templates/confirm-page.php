<?php
/*
Template Name: Confirm Page
*/
get_header();

function generateRandomString($length = 6) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

?>
<div id="main-content" class="main-content">
<script>
	dataLayer.push({
		'event': 'confirm',
		'transactionId': '<?php echo generateRandomString(); ?>',
		'transactionAffiliation': 'Acme Clothing',
		'transactionTotal': 38.26,
		'transactionTax': 1.29,
		'transactionShipping': 5,
		'transactionProducts': [{
			'sku': 'DD44',
			'name': 'T-Shirt',
			'category': 'Apparel',
			'price': 11.99,
			'quantity': 1
		},{
			'sku': 'AA1243544',
			'name': 'Socks',
			'category': 'Apparel',
			'price': 9.99,
			'quantity': 2
		}]
	});
</script>
<div class="content"><?php the_content(); ?></div>
</div><!-- #main-content -->
<?php
get_footer();
