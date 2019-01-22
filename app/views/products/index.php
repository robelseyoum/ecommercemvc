
<?php require APPROOT.'/views/layouts/includes/header.php'; ?>


    <?php foreach($data['products'] as $product): ?>
    
        <?php echo $product->title; ?> <br>
    

    <?php endforeach; ?>

     

<?php require APPROOT.'/views/layouts/includes/footer.php'; ?>
