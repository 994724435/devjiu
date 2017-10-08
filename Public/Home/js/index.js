 


$(function(){

// 商城开关
  $("#shopMask .buySpan").click(function() {
    var money=$(this).attr('data-money');
    var id=$(this).attr('data-id');
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

   

// 酒桶点击
  $(".jiuTong").click(function() {
      var landId=$(this).parents("li").attr('data-land');
      $("#landId").val(landId);
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
         url: "http://localhost/dev/devjiu/index.php/Home/Index/dealland",
         data: {
            landId:landId,
            toolId:toolId
         },
         success: function(msg){
           if(msg==1){
               alert( "使用成功");
               window.location.reload();
           }

         }
      });
  });



  
 })
 