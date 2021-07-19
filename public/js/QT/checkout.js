// A reference to Stripe.js initialized with a fake API key.
// Sign in to see examples pre-filled with your key.
var stripe = Stripe("pk_test_51J5VfyLC7Uq3V5YFGAY7OAiXHRKcFnnmmk0THyeLhpTO277yaupeojhlVsrdW8dy9nRmWmK42gjiU8bdpc8fqdJo00vXTspd8u");

// The items the customer wants to buy

var purchase = {
  items: [],
  totalQty: 0
};

var order = {
  user_id: null,
  cart_info: '',
  delivery_info: '',
  payment_info: '',
  status: ''
}

var deliveryInfo = {
  receiverName: '',
  receiverPhoneNumber: '',
  address: '',
  customerNote: ''
}

//Get the delivery information from customer input
document.querySelectorAll('.deliveryInfo').forEach(di => {
  var inputId = di.getAttribute('id');
  var info = inputId.slice(inputId.indexOf('__') + 2);
  di.addEventListener('change', (event) => {
    deliveryInfo[info] = event.target.value;
  })
})

//Get purchase info (cart info) from HTML
document.querySelectorAll('.cart_groupItem').forEach(groupItem => {
  var targetId = groupItem.getAttribute('id');
  var itemId = targetId.slice(0, targetId.indexOf('__')); //get the itemId from HTML element id.
  var itemQty = Number(document.getElementById(itemId + '__groupItem__qty').value);
  var item = {
    id: itemId,
    qty: itemQty
  }
  purchase.items.push(item);
  purchase.totalQty += item.qty;
})

// console.log(purchase.items);

// Disable the button until we have Stripe set up on the page
document.querySelector("#payment-form button").disabled = true;
fetch("http://localhost:8000/checkout-stripe", {
  method: "POST",
  headers: {
    "Content-Type": "application/json"
  },
  body: JSON.stringify(purchase)
})
  .then(result => result.json())
  .then(function (data) {
    // console.log(data);
    var elements = stripe.elements();

    var style = {
      base: {
        color: "#32325d",
        fontFamily: 'Arial, sans-serif',
        fontSmoothing: "antialiased",
        fontSize: "16px",
        "::placeholder": {
          color: "#32325d"
        }
      },
      invalid: {
        fontFamily: 'Arial, sans-serif',
        color: "#fa755a",
        iconColor: "#fa755a"
      }
    };

    var card = elements.create("card", { style: style });
    // Stripe injects an iframe into the DOM
    card.mount("#card-element");

    card.on("change", function (event) {
      // Disable the Pay button if there are no card details in the Element
      document.querySelector("#payment-form button").disabled = event.empty;
      document.querySelector("#card-error").textContent = event.error ? event.error.message : "";
    });

    var form = document.getElementById("payment-form");
    form.addEventListener("submit", function (event) {
      event.preventDefault();
      // Complete payment when the submit button is clicked
      payWithCard(stripe, card, data.clientSecret);
    });
  });

// Calls stripe.confirmCardPayment
// If the card requires authentication Stripe shows a pop-up modal to
// prompt the user to enter authentication details without leaving your page.
var payWithCard = function (stripe, card, clientSecret) {
  loading(true);
  stripe
    .confirmCardPayment(clientSecret, {
      payment_method: {
        card: card
      }
    })
    .then(function (result) {
      if (result.error) {
        // Show error to your customer
        showError(result.error.message);
      } else {
        // The payment succeeded!
        orderComplete(result.paymentIntent.id);
      }
    });
};

/* ------- UI helpers ------- */

// Shows a success message when the payment is complete
var orderComplete = function (paymentIntentId) {
  loading(false);
  document
    .querySelector(".result-message a")
    .setAttribute(
      "href",
      "http://localhost:8000/user-orders/all"
    );
  document.querySelector(".result-message").classList.remove("hidden");
  document.querySelector("#payment-form button").disabled = true;

  let paymentInfo = {
    stripePaymentId: paymentIntentId,
    method: 'card',
    amount: document.getElementById('cartTotalPrice').textContent
  }
  order.payment_info = JSON.stringify(paymentInfo);
  order.cart_info = JSON.stringify(purchase);
  order.delivery_info = JSON.stringify(deliveryInfo);
  order.status = 'wait--delivery';

  // console.log(order);

  StoreOrder(order);
};

//Create and store the successful order
function StoreOrder(order) {
  fetch("http://localhost:8000/orders", {
    method: "POST",
    headers: {
      "Content-Type": "application/json"
    },
    body: JSON.stringify(order)
  })
    .catch((error) => {
      console.error('Error:', error);
    });
}


// Show the customer the error from Stripe if their card fails to charge
var showError = function (errorMsgText) {
  loading(false);
  var errorMsg = document.querySelector("#card-error");
  errorMsg.textContent = errorMsgText;
  errorMsg.classList.remove('hidden');
  setTimeout(function () {
    errorMsg.textContent = "";
    errorMsg.classList.add('hidden');
  }, 4000);
};

// Show a spinner on payment submission
var loading = function (isLoading) {
  if (isLoading) {
    // Disable the button and show a spinner
    document.querySelector("#payment-form button").disabled = true;
    document.querySelector("#spinner").classList.remove("hidden");
    document.querySelector("#button-text").classList.add("hidden");
  } else {
    document.querySelector("#payment-form button").disabled = false;
    document.querySelector("#spinner").classList.add("hidden");
    document.querySelector("#button-text").classList.remove("hidden");
  }
};

//Toggle payment method choice between cash and card
document.querySelectorAll('.paymentMethodChoice').forEach(choice => {
  choice.addEventListener('click', () => {
    if (choice.getAttribute('id') == 'label__paymentMethod__cash') {
      document.getElementById('cardPayment__wraper').classList.add('hidden');
      document.getElementById('placeOrder').classList.remove('hidden');
      choice.classList.replace('btn-outline-success', 'btn-success');
      document.getElementById('radio__paymentMethod__cash').checked = true
      document.getElementById('label__paymentMethod__card').classList.replace('btn-success', 'btn-outline-success');

    } else {
      document.getElementById('cardPayment__wraper').classList.remove('hidden');
      document.getElementById('placeOrder').classList.add('hidden');
      choice.classList.replace('btn-outline-success', 'btn-success');
      document.getElementById('radio__paymentMethod__card').checked = true
      document.getElementById('label__paymentMethod__cash').classList.replace('btn-success', 'btn-outline-success');
    }
  })
})

//Place an order by COD payment method
document.getElementById('placeOrder').addEventListener('click', () => {
  let paymentInfo = {
    method: 'cod',
    amount: document.getElementById('cartTotalPrice').textContent
  }
  order.payment_info = JSON.stringify(paymentInfo);
  order.cart_info = JSON.stringify(purchase);
  order.delivery_info = JSON.stringify(deliveryInfo);
  order.status = 'wait--delivery';

  document
    .querySelector(".orderComplete-message a")
    .setAttribute(
      "href",
      "http://localhost:8000/user-orders/all"
    );
  document.querySelector(".orderComplete-message").classList.remove("hidden");
  document.querySelector("#placeOrder").disabled = true;

  StoreOrder(order);
})





