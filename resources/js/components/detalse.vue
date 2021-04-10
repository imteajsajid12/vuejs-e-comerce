<template>
  <div id="app">
    <main>
      <!-- Hero Area Start-->
      <div class="slider-area">
        <div class="single-slider slider-height2 d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-xl-12">
                <div class="hero-cap text-center">
                  <h2>Watch Shop</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End-->
      <!--================Single Product Area =================-->
      <div class="product_image_area">
        <div class="container">
          <div class="row justify-content-center">
            <div class="row justify-content-center">
              <div class="col-lg-12">
                <img src="/assets/img/gallery/popular1.png" alt="" />
              </div>
            </div>

            <div class="single_product_text text-center">
              <h3>{{ data.name }}</h3>
              <p>
                <br /><br />

                {{ data.detalse }}
              </p>
              <div class="card_area">
                <div class="product_count_area">
                  <p>Quantity</p>
                  <div class="product_count d-inline-block">
                    <span class="product_count_item inumber-decrement" @click="n">
                      <i class="ti-minus"></i
                    ></span>
                    <input
                      class="product_count_item input-number"
                      type="text"
                      v-model="product.quantity"
                    />
                    <span class="product_count_item number-increment" @click="plus">
                      <i class="ti-plus"></i
                    ></span>
                  </div>
                  <p>{{ data.price }} $</p>
                </div>
                <div class="add_to_cart">
                  <a @click="add" class="btn_3">add to cart</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--================End Single Product Area =================-->
      <!-- subscribe part here -->
      <section class="subscribe_part section_padding">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8">
              <div class="subscribe_part_content">
                <h2>Get promotions & updates!</h2>
                <p>
                  Seamlessly empower fully researched growth strategies and interoperable
                  internal or “organic” sources credibly innovate granular internal .
                </p>
                <div class="subscribe_form">
                  <input type="email" placeholder="Enter your mail" />
                  <a href="#" class="btn_1">Subscribe</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- subscribe part end -->
    </main>
  </div>
</template>

<script>
export default {
  props: ["app"],
  data() {
    return {
      data: [],

      product: {
        quantity: "1",
      },
    };
  },
  methods: {
    plus() {
      this.product.quantity++;
    },
    n() {
      this.product.quantity--;
    },
    card() {
      var id = this.$route.params.id;
      axios
        .post(`/api/card`, { shop_id: id, quantity: this.product.quantity })
        .then(({}) => {
          this.$toast.success({
            title: "Success",
            message: "Item add ",
          });

          this.$router.push({ name: "shop" });
        })
        .catch((err) => ocnsole.error(err));
    },
    add() {
      axios
        .get(`/api/dd`)
        .then(({}) => {
          this.card();
        })
        .catch(({}) => {
          this.$router.push({ name: "login" });
        });
    },
  },
  mounted() {
    var id = this.$route.params.id;
    axios.get(`/api/product/${id}`).then(({ data }) => {
      this.data = data;
    });
  },
};
</script>

<style></style>
