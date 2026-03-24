<?php 
$us_price = 4;
$rates = [
    'uk' => 0.81,
    'eu' => 0.93,
    'jp' => 113.21,
    'kr' => 1495.29,
];

function calculate_price($usd, $x_rates){
    $prices = [
        'pound' => $usd * $x_rates['uk'],
        'euro' => $usd * $x_rates['eu'],
        'yen' => $usd * $x_rates['jp'],
        'won' => $usd * $x_rates['kr'],
    ];
    return $prices;
}
$global_prices = calculate_price($us_price, $rates);
?>

<?php include 'includes/header.php'; ?>

<h2> Welcome !!</h2>
<p>we sell chocolates to many countries!</p>
<p>Us $<?= $us_price ?></p>
<p>
    (UK &pound; <?= $global_prices['pound'] ?> ㅣ
    EU &euro; <?= $global_prices['euro'] ?> ㅣ
    JP &yen; <?= $global_prices['yen'] ?> ㅣ
    KR &#8361; <?= $global_prices['won'] ?> ㅣ)
</p>

<?php include 'includes/footer.php'; ?>