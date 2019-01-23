
<?php require APPROOT.'/views/layouts/includes/header.php'; ?>


    <?php foreach($data['products'] as $product): ?>
           

        <div class="col-md-4 game">

            <div class="game-price"> <?php echo $product->price; ?> </div>
            <a href="<?php echo URLROOT; ?>/products/details/<?php echo $product->id; ?>">
                <?php require_once APPROOT.'/views/layouts/includes/sidebar.php'; ?>
                <img src="<?php echo URLROOT; ?>/images/<?php echo $product->image; ?>"/>
            </a>

            <div class="game-title">
                <?php echo $product->title; ?>
            </div>


            <div class="game-add">

                <form method="post" action=" <?php echo URLROOT; ?>/cart/add/ ?>">
                    QTY: <input class="qty" type="text" name="qty" value="1" /><br>
                    <input type="hidden" name="item_number" value="<?php echo $product->id; ?>" />
                    <input type="hidden" name="price" value="<?php echo $product->price; ?>" />
                    <input type="hidden" name="title" value="<?php echo $product->title; ?>" />
                    <button class="btn btn-primary" type="submit">Add To Cart</button>
                </form>

            </div>


        </div>
    

    <?php endforeach; ?>






     

<?php require APPROOT.'/views/layouts/includes/footer.php'; ?>
