<!-- ======= Products Section ======= -->
<section id="products" class="products">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Products</h2>
            <h3>Check our <span>Products</span></h3>
            <p>If you're looking for a fruit delivery service, we has got you covered from apples to bananas to citrus.</p>
        </div>

        <div class="row">
            <?php
            foreach($products as $product) {
                echo "
            <div class=\"col-sm-12 col-md-4 col-xl-4 pb-2 text-center card-padding\">
                <div class=\"card h-100 px-2 pt-2 product\">
                    <img class=\"card-img-top product-img img-fluid\" width=\"300\" height=\"300\" src=\"assets/images/products/{$product->image}\" title=\"{$product->title}\" alt=\"{$product->title}\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{$product->title}</h5>
                        <p class=\"card-text\">{$product->description}</p>
                    </div>
                </div>
            </div>";
            }
            ?>
        </div>

    </div>
</section><!-- Products Section -->

<!-- ======= Comments Section ======= -->
<section id="comments" class="comments">
    <div class="container">

        <div class="section-title">
            <h2>Comments</h2>
            <h3>Comments about products and company</h3>
        </div>

        <div class="row">
            <?php
            foreach($comments as $comment) {
                echo "
                <div class=\"col-md-12\">
                    <div class=\"media g-mb-30 media-comment\">
                        <div class=\"media-body u-shadow-v18 g-bg-secondary g-pa-30\">
                            <div class=\"g-mb-15\">
                                <h5 class=\"h5 g-color-gray-dark-v1 mb-0\">{$comment->name}</h5>
                                <span class=\"g-color-gray-dark-v4 g-font-size-12\">{$comment->created_on}</span>
                            </div>
    
                            <p>{$comment->text}</p>
    
                        </div>
                    </div>
                </div>";
            }
            ?>

            <div class="col-md-12 mt-5">
                <form id="comment-form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputEmail">Email</label>
                            <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="textareaComment">Comment</label>
                        <textarea class="form-control" id="textareaComment" name="text" placeholder="Add your comment" rows="3" required></textarea>
                    </div>
                    <button id="btn-comment-submit" type="submit" class="btn btn-warning">Add comment</button>
                </form>
            </div>
        </div>

    </div>
</section><!-- Comments Section -->