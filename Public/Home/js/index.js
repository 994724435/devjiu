 


$(function(){

// 商城开关
  $("#shopMask .buySpan").click(function() {
    var money=$(this).attr('data-money');
    var id=$(this).attr('data-id');
    var kucun=$(this).attr('data-kucun');
    $("#kuncun").val(kucun);
   $("#goodsMoney").val(money);
  
   $("#goodsId").val(id);
   $("#shopMask").addClass('hidden');
   $("#shopMask1").removeClass('hidden');
  });
  $("#shopMask1 .returnImg").click(function() {
      $("#shopMask").removeClass('hidden');
     $("#shopMask1").addClass('hidden');
  });
  $("#shopShow .closeImg").click(function() {
       $("#shopShow").hide();
  });
  $("#store").click(function() {
       $("#shopShow").show();
  });
// 商城开关

   $(".shippAddress").click(function() {
       $("#kucun1").val($("#kuncun").val());
       $("#buy_num1").val($("#buy_num").val());
       $("#goodsMoney1").val($("#goodsMoney").val());
       $("#goodsId1").val($("#goodsId").val());
       $("#adressMask").show();
   });
    $("#adressMask .returnImg").click(function() {
       $("#adressMask").hide();
   });


// 仓库开关
   $(".cangku").click(function() {
        $("#houseShow").show();
   });
   $("#houseShow .closeImg").click(function() {
       $("#houseShow").hide();
   });

// 仓库开关

$(".land .jiuTong").click(function(event) {
    event.stopPropagation();
    var that=$(this).parents(".land");
    $(that).find(".application").animate({
        "opacity":1
    },2000,function(){
       $(that).find(".application").animate({
        "opacity":0
      },2000);
    });
});


// 酒桶点击
  $(".land").click(function() {
      var landId=$(this).attr('data-land');
      // alert(landId);
      $("#landId").val(landId);
      if($(this).find("img").hasClass('jiuTong')){
        return;
      }
      $("#houseShow1").show();
  });
  $("#houseShow1 .closeImg").click(function() {
       $("#houseShow1").hide();
  });

 // 使用
  $(".useSpan").click(function() {
      var landId=$("#landId").val();
      var toolId=$(this).attr('data-id');
      $("#houseShow1").hide();

      $.ajax({
         type: "POST",
         url: "http://122.114.76.216/index.php/Home/Index/dealland",
         data: {
            landId:landId,
            toolId:toolId
         },
         success: function(msg){
             if(msg==1){
                 alert( "使用成功");
                 window.location.reload();
             }
             if(msg==2){
                 alert( "酒桶不足");
                 window.location.reload();
             }
             if(msg==3){
                 alert( "该地已使用");
                 window.location.reload();
             }
             if(msg==4){
                 alert( "小麦不足");
                 window.location.reload();
             }
         }
      });
  });



  
 })
 