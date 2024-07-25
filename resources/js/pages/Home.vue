<template>
    

    <header class="header">
        <div class="header-text">
          <h1>Art-Posts</h1>
          
        </div>
        <div class="overlay"></div>
      </header>
    
        <h2 class="header-title">Latest Art Posts</h2>
        <section class="cards-blog latest-blog">
          <div class="card-blog-content">
            <img src="\public\images\Ivan Aivazovsky Stormy Sea, Large oil painting reproduction.jpeg" alt="" />
            <p>
              2 hours ago
              <span style="float: right">Written By Alphayo Wakarindi</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html"></a
              >
              <router-link :to="{name:'SingleBlog' ,params:{slug:'Ivan Aivazovsky Stormy Sea, Large oil painting'}}">Ivan Aivazovsky Stormy Sea, Large oil painting</router-link>
            </h4>
          </div>

          <div class="card-blog-content">
            <img src="\public\images\London Painting ACEO Original Watercolor England Sketch Miniature Artwork by Anamustudio - Etsy.jpeg" alt="" />
            <p>
              23 hours ago
              <span style="float: right">Written By Alphayo Wakarindi</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html"> London-Sketch </a>
            </h4>
          </div>

          <div class="card-blog-content">
            <img src="\public\images\téléchargement (14).jpeg" alt="" />
            <p>
              2 days ago
              <span style="float: right">Written By Alphayo Wakarindi</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html"
                >Van-Gogh</a
              >
            </h4>
          </div>

          <div class="card-blog-content">
            <img src="\public\images\A109.jpeg" alt="" />
            <p>
              3 days ago
              <span style="float: right">Written By Alphayo Wakarindi</span>
            </p>
            <h4 style="font-weight: bolder">
              <a href="single-blog.html">Time</a>
            </h4>
          </div>
       
        </section>
      
</template>