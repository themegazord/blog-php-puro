<?php

include_once("templates/header.php");

if (isset($_GET['id'])) {
  $postId = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {
    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}

?>


<main id="post-container">
  <div class="content-container">
    <h1 id="main-title">
      <?= $currentPost['title'] ?>
    </h1>
    <p id="post-description">
      <?= $currentPost['description'] ?>
    </p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
    </div>
    <p class="post-content">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem earum deleniti sint! In nobis saepe porro labore. Eveniet, alias ullam, aspernatur praesentium voluptate nam, obcaecati numquam amet quasi perferendis eius!
      Mollitia, dolore dignissimos suscipit rem nisi pariatur ea sequi amet nostrum reprehenderit perspiciatis eaque fugiat incidunt assumenda, illum magnam modi. Molestiae magnam nostrum repellendus distinctio tempora minus deleniti mollitia veritatis.
      Nam tempora, similique amet facere voluptas temporibus iure aliquid expedita? Molestias repudiandae tempore laudantium illum, veritatis est temporibus exercitationem ipsam officiis. Ex quod sint, sed corrupti neque accusamus iusto temporibus!
    </p>
  </div>
  <aside id="nav-container">
    <h3 id="tags-title">
      Tags
    </h3>
    <ul id="tag-list">
      <?php foreach ($currentPost['tags'] as $tag) : ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach ($categories as $category) : ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach ?>
    </ul>
  </aside>
</main>


<?php

include_once("templates/footer.php");

?>