@extends("layouts.master", ["title" => "Wallets"])


@section("content")

    <div id="pageWallet">

        <div class="estimated">
           Estimated Value: 0.00000000BTC/0.00$
        </div>

        <div class="wallet titlecolor">
            <div class="coin walletWith">
                <span>Coin</span>
            </div>
            <div class="name walletWith">
                <span>Name</span>
            </div>  
            <div class="balance walletWith">
                <span>Total Balance</span>
            </div>
            <div class="btcValue walletWith">
                <span>Btc Value</span>
            </div>
        </div>

        <div class="wallet allwallet">

                <div class="coin walletWith">
                    <span>BTC</span>
                </div>
                <div class="name walletWith">
                    <span>BITCOIN</span>
                </div>  
                <div class="balance walletWith">
                    <span>0.00000123</span>
                </div>
                <div class="btcValue walletWith">
                    <span>0.00000123</span>
                </div>

                <img src="img/add.png" class="addAdress">
                <img src="img/send.png" class="sendFunds"> 
        </div>
    </div>


    <div id="popupAddWallet">
            <img src="img/close.png" class="close">

            <span>New wallet:</span>
            <div class="continput">
                <img src="img/reload.png" class="reload">
                <input class="inputNewWallet" type="text" value="Generate a new address..." disabled>
            </div>
            <input type="submit" value="confirm">
    </div>

    <div id="popupShowWallet">

    </div>

    <div class="popupSend">

    </div>

@endsection