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
        <h1 id="main-title"><?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
        </div>
        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos reprehenderit aliquam maxime iusto, fugiat illum laboriosam dolore, ullam perferendis, eius temporibus nostrum quidem atque! Doloremque molestiae nulla vero libero excepturi.
            Quidem temporibus obcaecati repudiandae cumque? Vero quibusdam rerum incidunt? Quae consectetur sunt incidunt eum nemo et harum itaque delectus natus qui ad perferendis iusto dolorem porro, blanditiis vero adipisci error.
            Labore corporis, atque fugiat architecto asperiores maiores fugit perferendis perspiciatis praesentium dolorem accusantium, recusandae nemo et earum voluptate nihil quae autem natus distinctio voluptatibus. Consectetur ipsa adipisci officia asperiores nisi.
            Commodi similique reprehenderit corporis possimus sit error repellat consequuntur rem voluptates minus. Sunt distinctio doloribus et! Ipsum quibusdam, consectetur, illo similique aliquid tempore assumenda maxime debitis necessitatibus error, sequi velit?
            Esse aperiam reiciendis quaerat aliquam provident expedita ea earum minus, eum, consequatur voluptas vero ipsum doloremque sint aliquid! Voluptatum laborum officia sapiente illo at veritatis tempore nam ratione labore hic?
        </p>
    </div>
    <aside class="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach ($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach ($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
    </aside>
</main>
<?php
include_once("templates/footer.php");
?>