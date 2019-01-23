
<?php require APPROOT.'/views/layouts/includes/header.php'; ?>


<div class="row details">
    
    <div class="col-md-4">
          <img src="<?php echo URLROOT; ?>/images/<?php echo $data['products']->image; ?>"/>

    </div>
    
    <div class="col-md-8">
        
        <h3><?php echo $data['products']->title; ?></h3>
        <div class="details-price">
        <?php echo $data['products']->price; ?>        
        </div>
        
        <div class="details-description">
            <p><?php echo $data['products']->description; ?> </p>
        </div>
        
        <div class="details-buy">
            <form method="post" action="<?php echo URLROOT; ?>/cart/add/ ?>">
                QTY: <input class="qty" type="text" name="qty" value="1" /><br>
                <input type="hidden" name="item_number" value="<?php echo $product->id; ?>" />
                <input type="hidden" name="price" value="<?php echo $product->price; ?>" />
                <input type="hidden" name="title" value="<?php echo $product->title; ?>" />
                <button class="btn btn-primary" type="submit">Add To Cart</button>
            </form>
        </div>

    </div>

</div>

<?php require APPROOT.'/views/layouts/includes/footer.php'; ?>
