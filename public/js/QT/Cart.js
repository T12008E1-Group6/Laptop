import { vnCurrency } from './utility.js';

class Cart {
    constructor({ cartItems }) {
        this.cartItems = cartItems;
    }

    plus_itemQty(itemId) {
        this.cartItems[itemId].qty++;
        document.getElementById(itemId + '__groupItem__qty').value = this.cartItems[itemId].qty;
        return this;
    }

    minus_itemQty(itemId) {
        if (this.cartItems[itemId].qty > 1) {
            this.cartItems[itemId].qty--;
            document.getElementById(itemId + '__groupItem__qty').value = this.cartItems[itemId].qty;
        } else {
            this.remove(itemId);
        }
        return this;
    }


    remove(itemId) {
        if (confirm('Do you want to remove this item?\nName is ' + this.cartItems[itemId]['item']['product_name'])) {
            delete this.cartItems[itemId];
            document.getElementById(itemId + '__groupItem').remove();
            if (this.sum_qty() == 0) {
                document.getElementById('checkoutBtn').classList.add('hidden');
                document.querySelector('h2.emptyCart').classList.remove('hidden');
            }
        }
        return this;
    }

    sum_qty() {
        let totalQty = 0;
        for (let itemId in this.cartItems) {
            totalQty += this.cartItems[itemId].qty;
        }
        return totalQty;
    }

    render_cartTotalQty() {
        document.getElementById('cartTotalQty').textContent = this.sum_qty();
        return this;
    }

    sum_itemPrice(itemId) {
        return this.cartItems[itemId]['qty'] * this.cartItems[itemId]['item']['product_price'];
    }

    render_itemSubtotal(itemId) {
        document.getElementById(itemId + '__groupItemSubtotal').innerHTML = vnCurrency.format(this.sum_itemPrice(itemId));
        return this;
    }

    sum_amount() {
        let totalAmount = 0;
        for (let itemId in this.cartItems) {
            totalAmount += this.sum_itemPrice(itemId);
        }
        return totalAmount;
    }

    render_cartTotalPrice() {
        document.getElementById('cartTotalPrice').innerHTML = vnCurrency.format(this.sum_amount());
        return this;
    }

    async saveChanges() {
        // console.log(this.cartItems);
        await fetch('http://localhost:8000/modify-cart', {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(this.cartItems)
        })
            .then(result => {
                console.log('cart saved')
            })
            .catch((error) => {
                console.error('Error:', error);
            });
    }
}

export default Cart;