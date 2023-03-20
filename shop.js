// window.addEventListener('load', () => {
//   // Define the shop items
//   var shopItems = document.getElementsByClassName("shop-item");
//   var shopItems = [
//     { name: "Female", price: 10 },
//     { name: "Male", price: 20 },
//     { name: "Other", price: 30 },
//   ];
  
//   // Get the elements from the HTML page
//   var coinCount = document.getElementById("coin-count");
//   var buyButtons = document.getElementsByClassName("buy-button");
  
//   // Set up event listeners for the buy buttons
//   for (var i = 0; i < buyButtons.length; i++) {
//     buyButtons[i].addEventListener("click", function() {
//       var item = this.parentElement;
//       var itemName = item.getElementsByTagName("h2")[0].innerHTML;
//       var itemPrice = parseInt(item.getElementsByClassName("price")[0].innerHTML);
//       var currentCoins = parseInt(coinCount.innerHTML);
//       if (currentCoins >= itemPrice) {
//         coinCount.innerHTML = currentCoins - itemPrice;
//         alert("You bought " + itemName + " for " + itemPrice + " coins!");
//       } else {
//         alert("You don't have enough coins to buy " + itemName);
//       }
//     });
//   }
// });
