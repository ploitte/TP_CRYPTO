@extends("layouts.master", ["title" => "Wallets"])


@section("content")

    <div id="pageWallet">

        <div class="estimated">
           Estimated Value: 0.00000000BTC/0.00$
        </div>
    
        <table id="contAllWallets">

            <tr id="titleWallets">
                <td class="itemsWallet">Coin</td>
                <td class="itemsWallet">Name</td>
                <td class="itemsWallet">Total Balance</td>
                <td class="itemsWallet">Btc Value</td>
                <td class="addTd"></td>
                <td class="addTd"></td>
            </tr>

            
            @foreach($cryptos as $crypto)

                <tr class="walletUser">

                    <td class="itemsWallet">{{$crypto->symbol}}</td>
                    <td class="itemsWallet">{{$crypto->name}}</td>
                    
                    @empty($wallets)
                        <td class="itemsWallet">0.0000000</td>
                        <td class="itemsWallet">0.0000000</td>
                    @endempty

                    @isset($wallets)     
                            @foreach($wallets as $wallet)  
                                @if($loop->count == $loop->parent->count)
                                    @if($crypto->symbol == $wallet->name)
                                        <td class="itemsWallet">{{$wallet->funds}}</td>
                                        <td class="itemsWallet">{{$wallet->funds}}</td>                               
                                    @endif
                                @elseif($loop->count < $loop->parent->count)
                                    @if($crypto->symbol == $wallet->name)
                                        <td class="itemsWallet">{{$wallet->funds}}</td>
                                        <td class="itemsWallet">{{$wallet->funds}}</td>                               
                                    @else
                                        <td class="itemsWallet">0.000000000</td>
                                        <td class="itemsWallet">0.00000000</td>      
                                    @endif                              
                                @endif
                            @endforeach
                    @endisset

                    <td class="addTd">
                        <img src="img/add.png" class="addAdress">
                    </td>
                    <td class="addTd">
                        <img src="img/send.png" class="sendFunds">
                    </td>
                </tr> 

            @endforeach

        </table>

    </div>

    


    <div id="popupAddWallet">
            <img src="img/close.png" class="close">

            @empty($wallets)

                {{Form::open(array(
                    "route" => "newWallet",
                    "class" => "newWalletForm"
                ))}}
                <span>New Wallet:</span>
                
                <div class="contInputNewWallet">

                    <img src="img/reload.png" class="reload">

                    {{Form::text("walletHidden", "", array(
                        "class" => "inputNewWallet",
                        "placeholder" => "Get a new Wallet...",
                        "disabled" => "disabled"
                    ))}}

                    {{Form::hidden("wallet", "", array(
                        "class" => "inputNewWalletHidden",
                        "placeholder" => "Get a new Wallet...",
                    ))}}

                </div>

                {{Form::button("Confirm", array(
                    "type" => "submit",
                    "class" => "subNewWallet"
                ))}}

            {{Form::close()}}
                 
            @endempty
            

    </div>

<!--
    <div id="popupSend">
        <img src="img/close.png" class="close">

        <span>Amout:</span>
        <input type="text">

    </div>-->

@endsection