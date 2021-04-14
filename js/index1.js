const menuBtn = document.querySelector(".menu-icon span");
    const searchBtn = document.querySelector(".search-icon");
    const cancelBtn = document.querySelector(".cancel-icon");
    const items = document.querySelector(".nav-items");
    const searchForm = document.querySelector("div.busca form[name='busc']");
    menuBtn.onclick = ()=>{
      items.classList.add("active");
      menuBtn.classList.add("hide");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }
    cancelBtn.onclick = ()=>{
      items.classList.remove("active");
      menuBtn.classList.remove("hide");
      searchBtn.classList.remove("hide");
      cancelBtn.classList.remove("show");
      searchForm.classList.remove("active");
      cancelBtn.style.color = "#ff3d00";
    }
    searchBtn.onclick = ()=>{
      searchForm.classList.add("active");
      searchBtn.classList.add("hide");
      cancelBtn.classList.add("show");
    }



    // product qty section
    let $qty_up = $(".qty .qty-up");
    let $qty_down = $(".qty .qty-down");
    let $deal_price = $("#deal-price");
    // let $input = $(".qty .qty_input");

    // click on qty up button
    $qty_up.click(function(e){

      let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
      let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

      // change product price using ajax call
      $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
              let obj = JSON.parse(result);
              let item_price = obj[0]['precio'];

              if($input.val() >= 1 && $input.val() <= ['stock'-1]){
                  $input.val(function(i, oldval){
                      return ++oldval;
                  });

                  // increase price of the product
                  $price.text(parseInt(precio * $input.val()).toFixed(2));

                  // set subtotal price
                  let subtotal = parseInt($deal_price.text()) + parseInt(precio);
                  $deal_price.text(subtotal.toFixed(2));
              }

          }}); // closing ajax request
  }); // closing qty up button

  // click on qty down button
  $qty_down.click(function(e){

      let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
      let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

      // change product price using ajax call
      $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
              let obj = JSON.parse(result);
              let item_price = obj[0]['precio'];

              if($input.val() > 1 && $input.val() <= ['stock']){
                  $input.val(function(i, oldval){
                      return --oldval;
                  });


                  // increase price of the product
                  $price.text(parseInt(precio * $input.val()).toFixed(2));

                  // set subtotal price
                  let subtotal = parseInt($deal_price.text()) - parseInt(precio);
                  $deal_price.text(subtotal.toFixed(2));
              }

          }}); // closing ajax request
  }); // closing qty down button
