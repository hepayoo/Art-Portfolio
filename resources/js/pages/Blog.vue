<template>
    <main class="container">
      <h2 class="header-title">All Art Posts</h2>
      <div class="searchbar">
        <form action="">
          <input type="text" placeholder="Search..." name="search" />

          <button type="submit">
            <i class="fa fa-search"></i>
          </button>

        </form>
      </div>
      <div class="categories">
        <ul>
          <li><a href="">Classic</a></li>
          <li><a href="">Modern</a></li>
          <li><a href="">Sketch</a></li>
          <li><a href="">Nature</a></li>
        </ul>
      </div>
    
      <section class="cards-blog latest-blog">
        <div class="card-blog-content">
          <img src="\public\images\Art Nouveau Floral.jpeg" alt="" />
          <p>
            2 hours ago
            <span>Written By Alphayo Wakarindi</span>
          </p>
          <h4>
            <a href="single-blog.html">Painting</a>
          </h4>
        </div>

        <div class="card-blog-content">
            <img src="\public\images\Art Nouveau Floral.jpeg" alt="" />
          <p>
            23 hours ago
            <span>Written By Alphayo Wakarindi</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">Painting</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="\public\images\Art Nouveau Floral.jpeg" alt="" />
          <p>
            2 days ago
            <span>Written By Alphayo Wakarindi</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">Painting</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="\public\images\A109.jpeg" alt="" />
          <p>
            3 days ago
            <span>Written By Alphayo Wakarindi</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">Time</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="\public\images\A109.jpeg" alt="" />
          <p>
            2 weeks ago
            <span>Written By Alphayo Wakarindi</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">Time</a>
          </h4>
        </div>

        <div class="card-blog-content">
          <img src="\public\images\téléchargement (13).jpeg" alt="" />
          <p>
            1 month ago
            <span>Written By Alphayo Wakarindi</span>
          </p>
          <h4 style="font-weight: bolder">
            <a href="single-blog.html">Sketches</a>
          </h4>
        </div>

        <!-- pagination -->
        <div class="pagination" id="pagination">
          <a href="">&laquo;</a>
          <a class="active" href="">1</a>
          <a href="">2</a>
          <a href="">3</a>
          <a href="">4</a>
          <a href="">5</a>
          <a href="">&raquo;</a>
        </div>
      </section>
    </main>
</template>