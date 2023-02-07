<?php
    include __DIR__ . '/database/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($products as $product){ ?>
                <div class="col-sm-4">
                    <div class="card">
                         <img src="<?php echo $product->image; ?>" class="image-fluid" alt="">
                        <h4><?php echo $product->product_name; ?></h4>
                        <p>
                            <?php echo $product->category->icon.' '.$product->category->name; ?>
                        </p>
                        <p>
                            prezzo: €<?php echo $product->price; ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>

    </div>
</body>
</html>