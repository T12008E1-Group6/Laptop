var ordersStatus = []

document.querySelectorAll('.order__status').forEach(el => {
    const el_id = el.getAttribute('id');
    const orderId = el_id.slice(4, el_id.indexOf("__"));

    var initialOrdersStatus = {
        orderId: orderId,
        orderStatus: el.value,
    }

    ordersStatus.push(initialOrdersStatus);

    el.addEventListener('change', ev => {
        var newStatus = ev.target.value;
        setStatus(orderId, newStatus);
        if (newStatus == 'wait--delivery') {
            el.classList.replace('complete', 'waitDelivery');
        } else {
            el.classList.replace('waitDelivery', 'complete');
        }
        document.getElementById('confirmChangeOrdersStatus').disabled = false;
    })
});

function setStatus(id, newStatus) {
    ordersStatus.forEach(os => {
        if (os.orderId == id) os.orderStatus = newStatus;
    });
}

document.getElementById('confirmChangeOrdersStatus')
    .addEventListener('click', async function() {
        await StoreOrdersStatus(ordersStatus);
        this.textContent = 'Changed';
        this.disabled = true;
    });

window.addEventListener('beforeunload', async () => {
    await StoreOrdersStatus(ordersStatus);
});

async function StoreOrdersStatus(ordersStatus) {
    await fetch("http://localhost:8000/admin-orders/update-orders-status", {
      method: "PUT",
      headers: {
        "Content-Type": "application/json"
      },
      body: JSON.stringify(ordersStatus)
    })
      .catch((error) => {
        console.error('Error:', error);
      });
  }