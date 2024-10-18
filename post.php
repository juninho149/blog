<?php
include_once("templates/header.php");

 if(isset($_GET['id'])) {

 $postId = $_GET['id'];
 $currentpost;

foreach($posts as $post){

    if($post['id'] == $postId) {
        $currentpost = $post;
        } 
    }

}
?>
<main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?= $currentpost['title']?></h1>
      <p id="post-description"><?= $currentpost['description']?></p>
      <div class="img-container">
         <img src="<?= $BASE_URL ?>/imag/<?= $currentpost['img']?>" alt="<?= $currentpost['title']?>">
         </div>
 <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores sit temporibus nostrum exercitationem impedit molestiae, reiciendis tempora pariatur eum est cumque odit quod dolore delectus facilis unde optio sequi tempore.
 Veniam, sint debitis ullam laudantium aliquam quae? Voluptatem, libero et corrupti repellat quaerat laborum mollitia, nihil iure eum doloremque aliquam suscipit sint necessitatibus, tempore praesentium exercitationem amet. Laboriosam, cumque porro.
 Atque culpa, impedit pariatur corrupti autem minima aliquid nihil placeat cupiditate dignissimos molestiae facilis eligendi perspiciatis itaque quam rerum adipisci fuga tempora reiciendis id ex vero veritatis ducimus velit. Neque.
 Consequatur ea ut aperiam quidem molestiae quod dolorem, iure necessitatibus ipsa nisi, minus iusto, doloribus nemo! Eveniet ipsum, id nam consequuntur sequi possimus ex labore unde molestias natus, inventore quas.
 Commodi ab sed harum tenetur eaque ex voluptatum, nesciunt, nobis asperiores exercitationem et blanditiis magni quae nam similique temporibus delectus perferendis quia repudiandae error numquam cum ipsum quos! Corporis, odio!</p>
 </div> 
 <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tag-list">
        <?php foreach($currentpost['tags'] as $tag): ?>
            <li><a href="#"><?= $tag ?></a></li>
        <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach($categories as $category): ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>

 </aside>
</main>
<?php
include_once("templates/footer.php")
?>