
<?php require APPROOT.'/views/layouts/includes/header.php'; ?>


    <?php foreach($data['products'] as $product): ?>
           

        <div class="col-md-4 game">
            <div class="game-price"> <?php echo $product->price; ?> </div>
            <a href="<?php echo URLROOT; ?>/products/details/<?php echo $product->id; ?>">
                <img src="<?php echo URLROOT; ?>/images/<?php echo $product->image; ?>"/>
            </a>
            <div class="game-title">
                <?php echo $product->title; ?>
            </div>
            <div class="game-add">
                <button class="btn btn-primary" type="submit">Add To Cart</button>
            </div>
        </div>
    

    <?php endforeach; ?>






     

<?php require APPROOT.'/views/layouts/includes/footer.php'; ?>
