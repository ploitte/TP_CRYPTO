    
    var $eth = $("#ethFooter");
    var $btc = $("#btcFooter");
    var $titleEth = $("#ethTilteFooter");
    var $titleBtc = $("#btcTilteFooter");
    var stockpriceBTC = 0;
    var stockpriceETH = 0;


function differPriceBtc(data){
    if(data > stockpriceBTC){
        $btc.addClass("winPrice");
        setTimeout(function(){
            $btc.removeClass("winPrice");
            $btc.css("color", "green");
        },3000);
    }
    else if(data < stockpriceBTC){
        $btc.addClass("loosePrice");
        setTimeout(function(){
            $btc.removeClass("loosePrice");
            $btc.css("color", "red");
        },3000);
    }
}

function differPriceEth(data){
    if(data > stockpriceETH){
        $eth.addClass("winPrice");
        setTimeout(function(){
            $eth.removeClass("winPrice");
            $eth.css("color", "green");
        },3000);
    }
    else if(data < stockpriceETH){
        $eth.addClass("loosePrice");
        setTimeout(function(){
            $eth.removeClass("loosePrice");
            $eth.css("color", "red");
        },3000);
    }
}

function getPriceBTC(){

    $.ajax({
        url: "https://api.coinmarketcap.com/v1/ticker/bitcoin/",
        method: "get",
        dataType: "json",
        success: function(data){

            differPriceBtc(Math.round(parseInt(data[0].price_usd )));

            stockpriceBTC = Math.round(parseInt(data[0].price_usd )); 

            $titleBtc.html("BTC: ");
            $btc.html(Math.round(parseInt(data[0].price_usd ))+"$");

        },
        error: function(error){
            console.log(error);
        }
    })
}

function getPriceETH(){

    $.ajax({
        url: "https://api.coinmarketcap.com/v1/ticker/Ethereum/",
        method: "get",
        dataType: "json",
        success: function(data){

            differPriceBtc(Math.round(parseInt(data[0].price_usd )));

            stockpriceETH = Math.round(parseInt(data[0].price_usd )); 

            $titleEth.html("BTC: ");
            $eth.html(Math.round(parseInt(data[0].price_usd ))+"$");

        },
        error: function(error){
            console.log(error);
        }
    })
}

function getPrices(){
    getPriceBTC();
    getPriceETH();
}



