<div class="cart-block">
    <form action="cart/update" method="post">
        <table cellpadding="6" cellspacing="1" style="width:100%" border="0">
            <tr>
                <th>QTY</th>
                <th>Item Description</th>
                <th style="text-align:right">Item Price</th>
            </tr>
            <tr>
                <td></td>
                <td class="right"><strong>Total</strong></td>
                <td class="right" style="text-align:right">$</td>
            </tr>
        </table>
        <br>
        <p><button class="btn btn-default" type="submit">Update Cart</button>
            <a class="btn btn-default" href="cart">Go To Cart</a></p>
        </form>
    </div>
    <div class="panel panel-default panel-list">
        
        <div class="panel-heading panel-heading-dark">
            <h3 class="panel-title"> Categories </h3>
        </div>
        <!-- List group -->
        <ul class="list-group">
    
            <?php foreach($data['categories'] as $category): ?>

                <li class="list-group-item">
                    <a href="<?php echo URLROOT; ?>/products/category/<?php echo $category->id; ?>"><?php echo $category->name; ?>
                    </a>
                </li>

            <?php endforeach; ?>    


        </ul>
    </div>
    
    <div class="panel panel-default panel-list">
        <div class="panel-heading">
            <h3 class="panel-title"> Most Popular </h3>
        </div>
        <!-- List group -->
        <ul class="list-group">

         <?php foreach($data['populars'] as $popular): ?>
            
                <li class="list-group-item">
                    <a href="<?php echo URLROOT; ?>/products/details/<?php echo $popular->id; ?>"><?php echo $popular->title; ?>
                    </a>
                </li>

             <?php endforeach; ?>    

        </ul>
    </div>