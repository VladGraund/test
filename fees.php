<?php
    require 'header.php';
    ?>
    <div class="container fees about"><h1>Fees</h1><div class="main-image"></div><div class="text-container"><h2>Fees</h2><p>Every time a customer makes a transaction (buying/selling cryptocurrency) at <?=getSettings('name', $db);?> exchange, they are charged a commission depending on the turnover for the month. Its diversification depends on the type of order placement on the exchange: <br><br> · MAKER: commission for setting a new buy/sell offer to the offer table; · TAKER: comission for fulfilling an existing offer from another user. <br><br> Maker and Taker fees on <?=getSettings('name', $db);?> are the same: 0.20% for regular users and 0.14% for Premium users. <br><br> There is a Commission for withdrawal, as well as a minimum amount of withdrawal of tokens/coins. The maximum amount cannot exceed the amount that is available on your account. <br><br> This data may change without notifying users, so pay attention to the automatic calculation of the Commission when withdrawing. Also, for the safety of your funds, we strongly recommend that you pass KYC verification, which will allow us to better protect you from adverse situations.</p></div></div>
    <?php
    require 'footer.php';
?>
