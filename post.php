<?php
 include_once('templates/header.php');

 if(isset($_GET['id'])){

    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
        if($post['id'] == $postId){
            $currentPost = $post;
        };
    };
 };
?>

<main id="post-container">

    <div class="content-container">
        <h1 id="main-title"> <?= $currentPost['title'] ?></h1>
        <p id="post-description"><?= $currentPost['description'] ?></p>

        <div id="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title'] ?>">
        </div>

        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. In perspiciatis, nobis veniam doloremque incidunt modi fugit totam sequi, optio inventore amet nam perferendis consequuntur! Odio a nulla earum omnis totam!
            Asperiores laboriosam eos eum autem quaerat voluptates itaque ducimus architecto culpa aliquid, ullam, debitis rerum. Quibusdam, fuga rem doloribus magnam consequatur sapiente animi necessitatibus molestias voluptatem quidem quasi eum recusandae?
            Impedit distinctio tempore aspernatur deserunt ipsa, doloribus dolorem sit nostrum ea tenetur qui repellendus accusantium officia labore maxime expedita odio. Iusto quam itaque corrupti officia culpa dolores laboriosam dolor tempora.
            Ducimus odit veritatis illo quidem? Eos voluptatibus itaque dignissimos, at id ipsa nisi. Nemo numquam doloremque quae recusandae quasi sunt voluptatum. Quidem debitis neque molestias alias tenetur architecto eius officiis!
            Blanditiis in aliquam iusto tempora consequuntur minus ipsam. Quidem cumque ut modi, rem libero earum corrupti illum maiores necessitatibus porro. Aspernatur ab qui eum beatae hic quae, laborum quibusdam odit.
        </p>

        <p class="post-content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. In perspiciatis, nobis veniam doloremque incidunt modi fugit totam sequi, optio inventore amet nam perferendis consequuntur! Odio a nulla earum omnis totam!
            Asperiores laboriosam eos eum autem quaerat voluptates itaque ducimus architecto culpa aliquid, ullam, debitis rerum. Quibusdam, fuga rem doloribus magnam consequatur sapiente animi necessitatibus molestias voluptatem quidem quasi eum recusandae?
            Impedit distinctio tempore aspernatur deserunt ipsa, doloribus dolorem sit nostrum ea tenetur qui repellendus accusantium officia labore maxime expedita odio. Iusto quam itaque corrupti officia culpa dolores laboriosam dolor tempora.
            Ducimus odit veritatis illo quidem? Eos voluptatibus itaque dignissimos, at id ipsa nisi. Nemo numquam doloremque quae recusandae quasi sunt voluptatum. Quidem debitis neque molestias alias tenetur architecto eius officiis!
            Blanditiis in aliquam iusto tempora consequuntur minus ipsam. Quidem cumque ut modi, rem libero earum corrupti illum maiores necessitatibus porro. Aspernatur ab qui eum beatae hic quae, laborum quibusdam odit.
        </p>
    </div>

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>

        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag):?>
                <li>
                    <a href="#"><?= $tag ?></a>
                </li>
            <?php endforeach ?>
        </ul>

        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category):?>
                <li>
                    <a href="#"><?= $category ?></a>
                </li>
            <?php endforeach ?>
        </ul>
    </aside>

</main>






<?php
 include_once('templates/footer.php')
?>