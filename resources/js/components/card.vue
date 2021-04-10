<template>
  <div id="app">
    <!-- Hero Area Start-->
    <div class="slider-area">
      <div class="single-slider slider-height2 d-flex align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="hero-cap text-center">
                <h2>Cart List</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--================Cart Area =================-->
    <section class="cart_area section_padding">
      <div class="container">
        <div class="cart_inner">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Product</th>
                  <th scope="col">Price</th>
                  <th scope="col">Quantity</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="catagory in data" :key="catagory.id">
                  <td>
                    <div class="media">
                      <div class="d-flex">
                        <img src="assets/img/gallery/card1.png" alt="" />
                      </div>
                      <div class="media-body">
                        <p>{{ catagory.shop.name }}</p>
                      </div>
                    </div>
                  </td>
                  <td>
                    <h5>${{ catagory.shop.price }}</h5>
                  </td>
                  <td>
                    <div class="product_count">

                      <input
                        class="input-number"
                        type="text"
                        v-model="catagory.quantity"

                      />

                    </div>
                  </td>
                  <td>
                    <h5>${{ itemtotal(catagory) }}</h5>
                  </td>
                  <td>
                  <a class="btn hero-btn" @click="remove(catagory.id)"><i class="fa fa-trash" style="height:20px" aria-hidden="true"></i></a>
                  </td>

                </tr>

                <tr>
                  <td></td>
                  <td></td>
                  <td>
                    <h5>Subtotal</h5>
                  </td>
                  <td>
                    <h5>$ {{ subtotal }}</h5>
                  </td>
                </tr>

                <tr class="shipping_area">
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    <div class="shipping_box">
                      <a class="btn_1" href="#">Update Details</a>
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="checkout_btn_inner float-right">
              <router-link to="/shop" class="btn_1" >Continue Shopping</router-link>
              <router-link to="/chakeout" class="btn_1 checkout_btn_1" href="#">Proceed to checkout</router-link>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>

<script>
export default {
  data() {
    return {
      data: [],
    };
  },
 computed:{
       subtotal() {
           return this.data.reduce((total,item) => {
               return total + item.quantity * item.shop.price
           },.00)

       }
 },
 methods:
 {
     itemtotal: function(item){
return item.quantity * item.shop.price
},
     read()
     {
                  axios.get(`/api/card_show`).then(({ data }) => {
                  this.data = data;

    });
     },
     remove(item)
     {

         axios(`/api/card_remove/${item}`).then(({})=>{
          this.read()
          this.$toast.error({
                        title:'Success',
                         message:'Item Delete successfully',})
})
     }

 },
  mounted() {
    this.read()
  },
}
</script>

<style></style>
