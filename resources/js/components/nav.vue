<template>
  <div id="app">
    <header>
      <!-- Header Start -->
      <div class="header-area">
        <div class="main-header header-sticky">
          <div class="container-fluid">
            <div class="menu-wrapper">
              <!-- Logo -->
              <div class="logo">
                <a href="index.html"><img src="assets/img/logo/logo.png" alt="" /></a>
              </div>
              <!-- Main-menu -->
              <div class="main-menu d-none d-lg-block">
                <nav>
                  <ul id="navigation">
                    <li><router-link to="/home">Home</router-link></li>
                    <li><router-link to="/shop">Shop</router-link></li>
                    <li><router-link to="/about">About</router-link></li>
                    <li><router-link to="/contact">Contact</router-link></li>
                  </ul>
                </nav>
              </div>
              <!-- Header Right -->
              <div class="header-right">
                <ul>
                  <li>
                    <form class="search-model-form">
                      <input
                        type="text"
                        class="form-control mr-sm-2"
                        id="search-input"
                        placeholder="Searching key....."
                      />
                    </form>
                  </li>
                  <li>
                    <div class="nav-search search-switch">
                      <span @click="search" class="flaticon-search"></span>
                    </div>
                  </li>
                  <li v-if="app.kk.name">
                    <router-link to="/login"
                      ><span class="flaticon-user"
                        ><br />{{ app.kk.name }}</span
                      ></router-link
                    >
                  </li>

                  <li v-else>
                    <router-link to="/login"
                      ><span class="flaticon-user"><br />Login</span></router-link
                    >
                  </li>

                  <li>
                    <router-link to="/cart">
                      <span class="flaticon-shopping-cart"></span></router-link
                    >
                  </li>
                  <li  v-if="app.kk.name"><button class="btn" @click="app.logout">logout</button></li>
                </ul>
              </div>
            </div>
            <!-- Mobile Menu -->
            <div class="col-12">
              <div class="mobile_menu d-block d-lg-none"></div>
            </div>
          </div>
        </div>
      </div>

      <!-- Header End -->
    </header>
    <h1>{{ app.message }}</h1>
  </div>
</template>

<script>
export default {
  name: "nav",
  props: ["app"],
  data() {
    return {
      user: "",
    }

  },



};
</script>

<style></style>
