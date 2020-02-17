//START JS BUY FOOD
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

    //Total money buy 
    var item_total = ($this.closest("tr").find("input.item-total").val(value*price)); 
    //Total Buy Food
    $this.closest("table").find("input.total-money-buy").val(sumTotalFood());
    

    var item_total_ticket = ($this.closest("tr").find("input.item-total-ticket").val(value*price));
    //Total money item-buy-ticket 
    $this.closest("tr").find("input.item-total-ticket").val(); 
    //Total Buy Ticket
    $this.closest("table.buy-ticket").find("input.total-money-buy-ticket").val(sumTotalTicket());
   
    function sumTotalFood(){
      var sum = 0;  
      $('input.item-total').each(function(){
        total = $(this).val();
        sum += Number(total);
      });
      return sum;
    }
    function sumTotalTicket(){
      var sum_ticket = 0;  
      $('input.item-total-ticket').each(function(){
        total = $(this).val();
        sum_ticket += Number(total);
  
      });
      return sum_ticket;
    }
    
  });
  
  $(".plus-btn").on("click", function(e) {
    e.preventDefault();
    var $this = $(this);
    var $input = $this.closest("div").find("input");
    var $minus = $this.closest("div").find("button.minus-btn");
    var value = Number(parseInt($input.val()));
    var price = $this.closest("tr").find("input.input-price").val();

    if (value >= 8) {
      $this.attr("disabled","disabled");
    } else if (value < 8) {
      value = value + 1;
      $minus.removeAttr("disabled");
    } else {
      value = 1;
     $minus.removeAttr("disabled"); 
    } 
    $input.val(value);
    var item_total = ($this.closest("tr").find("input.item-total").val(value*price));

    //Total money item-buy-food 
    $this.closest("tr").find("input.item-total").val(); 
    //Total Buy Food
    $this.closest("table.buy-food").find("input.total-money-buy").val(sumTotalFood());

    var item_total_ticket = ($this.closest("tr").find("input.item-total-ticket").val(value*price));
    //Total money item-buy-ticket 
    $this.closest("tr").find("input.item-total-ticket").val(); 
    //Total Buy Ticket
    $this.closest("table.buy-ticket").find("input.total-money-buy-ticket").val(sumTotalTicket());
  });
  function sumTotalFood(){
    var sum_food = 0;  
    $('input.item-total').each(function(){
      total = $(this).val();
      sum_food += Number(total);
    });
    return sum_food;
  }

  function sumTotalTicket(){
    var sum_ticket = 0;  
    $('input.item-total-ticket').each(function(){
      total = $(this).val();
      sum_ticket += Number(total);

    });
    return sum_ticket;
  }

});
//END JS BUY FOOD



