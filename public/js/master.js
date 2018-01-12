

$(document).ready(function(){
    console.log("OK MY FRIEND");
})

$(".addAdress").click(function(){

    $("#popupAddWallet").css("top", "0");
    console.log("test");
});


$(".close").click(function(){

    $parent = $(this).parent();

    $parent.css("top", "-100%");

});


$(".reload").click(function(){

    $randomString = randomString(10);

    $input = $(".inputNewWallet").val(SHA256($randomString));

    console.log(SHA256($randomString));

});