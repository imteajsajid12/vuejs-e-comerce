<template>
  <div id="app">
    <!--================Checkout Area =================-->
    <section class="checkout_area section_padding">
      <div class="container">
        <div class="billing_details">
          <div class="row">
            <div class="col-lg-8">
              <h3>Billing Details</h3>
              <form
                class="row contact_form"
                action="#"
                method="post"
                novalidate="novalidate"
              >
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" name="name" />
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" id="last" name="name" />
                </div>
                <div class="col-md-12 form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="company"
                    placeholder="Company name"
                  />
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" name="number" />
                </div>
                <div class="col-md-6 form-group p_star">
                  <input type="text" class="form-control" name="compemailany" />
                </div>
                <div class="col-md-12 form-group p_star">
                  <select class="country_select">
                    <option value="1">Country</option>
                    <option value="2">Country</option>
                    <option value="4">Country</option>
                  </select>
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" name="add1" />
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" name="add2" />
                </div>
                <div class="col-md-12 form-group p_star">
                  <input type="text" class="form-control" name="city" />
                </div>
                <div class="col-md-12 form-group p_star">
                  <select class="country_select">
                    <option value="1">District</option>
                    <option value="2">District</option>
                    <option value="4">District</option>
                  </select>
                </div>
                <div class="col-md-12 form-group">
                  <input
                    type="text"
                    class="form-control"
                    name="zip"
                    placeholder="Postcode/ZIP"
                  />
                </div>
                <div class="col-md-12 form-group">
                  <div class="creat_account">
                    <input type="checkbox" id="f-option2" name="selector" />
                    <label for="f-option2">Create an account?</label>
                  </div>
                </div>
                <div class="col-md-12 form-group">
                  <div class="creat_account">
                    <h3>Shipping Details</h3>
                    <input type="checkbox" name="selector" />
                    <label for="f-option3">Ship to a different address?</label>
                  </div>
                  <textarea
                    class="form-control"
                    name="message"
                    rows="1"
                    placeholder="Order Notes"
                  ></textarea>
                </div>
              </form>
            </div>
            <div class="col-lg-4">
              <div class="order_box">
                <h2>Your Order</h2>
                <ul class="list">
                  <li>
                    <a href="#"
                      >Product
                      <span>Total</span>
                    </a>
                  </li>
                  <li v-for="catagory  in data" :key="catagory.id">
                    <a href="#"
                      >{{ catagory.shop.name }}
                      <span class="middle">x {{ catagory.quantity }}</span>
                      <span class="last">${{ itemtotal(catagory) }}</span>
                    </a>
                  </li>

                </ul>
                <ul class="list list_2">
                  <li>
                    <a href="#"
                      >Subtotal
                         <span> $ {{ subtotal }}</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      >Shipping
                      <span>Flat rate: $50.00</span>
                    </a>
                  </li>
                  <li>
                    <a href="#"
                      >Total
                      <span>$ {{ subtotal1 }}.00</span>
                    </a>
                  </li>
                </ul>
                <div class="payment_item">
                  <div class="radion_btn">
                    <input type="radio" id="f-option5" name="selector" />
                    <label for="f-option5">Check payments</label>
                    <div class="check"></div>
                  </div>
                  <p>
                    Please send a check to Store Name, Store Street, Store Town, Store
                    State / County, Store Postcode.
                  </p>
                </div>
                <div class="payment_item active">
                  <div class="radion_btn">
                    <input type="radio" id="f-option6" name="selector" />
                    <label for="f-option6">Paypal </label>
                    <img src="img/product/single-product/card.jpg" alt="" />
                    <div class="check"></div>
                  </div>
                  <p>
                    Please send a check to Store Name, Store Street, Store Town, Store
                    State / County, Store Postcode.
                  </p>
                </div>
                <div class="creat_account">
                  <input type="checkbox" id="f-option4" name="selector" />
                  <label for="f-option4">I’ve read and accept the </label>
                  <a href="#">terms & conditions*</a>
                </div>
                <a class="btn_3" href="#">Proceed to Paypal</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Checkout Area =================-->
  </div>
</template>

<script>
export default {
  created() {},
  data() {
      return {
          data:[]
      }
  },
   computed:{
       subtotal() {
           var total1 =50;
           return this.data.reduce((total,item) => {
               return total + item.quantity * item.shop.price
           },.00)

       },
        subtotal1() {
           var total1 =50;
           return this.data.reduce((total,item) => {
               return total1 + item.quantity * item.shop.price
           },.00)

       }
 },
  methods: {
      itemtotal: function(item){
return item.quantity * item.shop.price
},

    read() {
      axios.get(`/api/card_show`).then(({ data }) => {
        this.data = data;
      });
    },
  },

  mounted() {
    axios.get(`/api/dd`).then(({ data }) => {
      console.log(data);
    });
    this.read();
  },
};
</script>

<style></style>
