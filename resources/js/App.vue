<template>
    <h1><div id="wrapper">
      <!-- header -->
   

      <!-- sidebar -->
      <div class="sidebar">
        <span class="closeButton">&times;</span>
        <p class="brand-title"><a href="">Art</a></p>

        <div class="side-links">
          <ul>
            <li><router-link :to="{name:'Home'}">Home</router-link></li>
            <li><router-link :to="{name:'Blog'}">Art</router-link></li>
           
            <li><router-link :to="{name:'Contact'}">Contact</router-link></li>

            <li>
            <router-link @click="hideOverlay" :to="{ name: 'Register' }"
              >Register</router-link
            >
          </li>

            <li>
            <router-link @click="hideOverlay" :to="{ name: 'Login' }"
              >Login</router-link
            >
          </li>

          
          <li>
            <router-link @click="hideOverlay" :to="{ name: 'Dashboard' }"
              >Dashboard</router-link
            >
          </li>




          </ul>
        </div>

        <!-- sidebar footer -->
      
      </div>
      <!-- Menu Button -->
      <div class="menuButton">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
      <!-- main -->
      <main class="container">
      <!--render-components on the page visited like :home ,about ,contact us-->

      <router-view></router-view>
      </main>

      <!-- Main footer -->
      <footer class="main-footer">
        <div>
          <a href=""><i class="fab fa-facebook-f"></i></a>
          <a href=""><i class="fab fa-instagram"></i></a>
          <a href=""><i class="fab fa-twitter"></i></a>
        </div>
        
      </footer>
    </div></h1>
</template>
<style>

</style>