<template>
  <section class="single-blog-post">
    <h1>{{ post.title }}</h1>

    <p class="time-and-author">
      {{ post.created_at }}
      <span>Written By {{ post.user }}</span>
    </p>

    <div class="single-blog-post-ContentImage" data-aos="fade-left">
      <img :src="`/${post.imagePath}`" alt="" />
    </div>

    <div class="about-text">
      <p>
        {{ post.body }}
      </p>
    </div>
  </section>
  <section class="recommended">
    <p>Related</p>
    <div class="recommended-cards">
      <a href="">
        <div class="recommended-card">
          <img src="\public\images\London Painting ACEO Original Watercolor England Sketch Miniature Artwork by Anamustudio - Etsy.jpeg" alt="" loading="lazy" />
          <h4>London-sketches</h4>
        </div>
      </a>
      <a href="">
        <div class="recommended-card">
          <img src="\public\images\téléchargement (13).jpeg" alt="" loading="lazy" />
          <h4>Sketches</h4>
        </div>
      </a>
      <a href="">
        <div class="recommended-card">
          <img src="\public\images\Art Nouveau Floral.jpeg" alt="" loading="lazy" />
          <h4>Oil paint art</h4>
        </div>
      </a>
    </div>
  </section>
</template>
<script>
export default {
  props: ["slug"],
  data() {
    return {
      post: {},
    };
  },
  mounted() {
    axios
      .get("/api/posts/" + this.slug)
      .then((response) => (this.post = response.data.data))
      .catch((error) => {
        console.log(error);
      });
  },
};
</script>