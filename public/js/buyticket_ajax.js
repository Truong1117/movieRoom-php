$(document).ready(function(){
  var sum_total = 0;
  $(".minus-btn").on("click", function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest("div").find("input");
    var $plus = $this.closest("div").find("button.plus-btn");
    var value = $input.val();
    var price = $this.closest("tr").find("input.input-price").val();
  
    if (value > 1) {
      $plus.removeAttr("disabled", "disabled");
  
      value = value - 1;
    } else {
      value = 0;
      $this.attr("disabled", "disabled");
    }
    $input.val(value);
    var item_total = ($this.closest("tr").find("input.item-total").val(value*price)); 
    
  });
  
  $(".plus-btn").on("click", function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest("div").find("input");
    var $minus = $this.closest("div").find("button.minus-btn");
    var value = Number(parseInt($input.val()));
    var price = $this.closest("tr").find("input.input-price").val();

    if (value >= 8) {
      $this.attr("disabled", "disabled");
    } else if (value < 8) {
      value = value + 1;
      $minus.removeAttr("disabled");
    } else {
      value = 1;
     $minus.removeAttr("disabled"); 
    } 
    $input.val(value);
    var item_total = ($this.closest("tr").find("input.item-total").val(value*price));

    //Total money buy 
    var all_item_total = $this.closest("tr").find("input.item-total").val();
    sum_total = Number(all_item_total);
    $this.closest("table").find("input.total-money-buy").val(sum_total);
  });
  
});



