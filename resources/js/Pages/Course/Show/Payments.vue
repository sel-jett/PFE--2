<template>
  <div id="paypal-button-container"></div>
</template>

<script>
import { loadScript } from '@paypal/paypal-js';

export default {
  name: 'Checkout-Payment',
  beforeCreate: function() {
    loadScript({ 'client-id': "Adv_bVRudRs1uiMq_IYZw7ndSiGwkr0cgWhVg6fBmS_67Fy4y0xm9BSP8wEdxQJJazx9YAcXMInqiZNu" }).then((paypal) => {
      paypal
        .Buttons({
          createOrder: this.createOrder,
          onApprove: this.onApprove,
        })
        .render('#paypal-button-container');
    });
  },
  data() {
    return {
      paid: false,
    };
  },
  props: {
    cartTotal: {
      type: Number,
      default: 123,
    },
  },
  methods: {
    createOrder: function(data, actions) {
      console.log('Creating order...');
      return actions.order.create({
        purchase_units: [
          {
            amount: {
              value: this.cartTotal,
            },
          },
        ],
      });
    },
    onApprove: function(data, actions) {
      console.log('Order approved...');
      return actions.order.capture().then(() => {
        this.paid = true;
        console.log('Order complete!');
      });
    },
  },
};
const CLIENT_ID = 'Adv_bVRudRs1uiMq_IYZw7ndSiGwkr0cgWhVg6fBmS_67Fy4y0xm9BSP8wEdxQJJazx9YAcXMInqiZNu';
</script>

<style>
#paypal-button-container {
  margin: 30px 0;
}

#confirmation {
  color: green;
  margin-top: 1em;
  font-size: 2em;
}
</style>