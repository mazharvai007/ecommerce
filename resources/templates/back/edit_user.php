
<?php

// Check if product is available
if (isset($_GET['id'])) {
    $user_has_query = query("SELECT * FROM users WHERE user_id =" . escape_string($_GET['id']) . " ");
    confirm($user_has_query);

    while ($row = fetch_array($user_has_query)) {
        $user_id = escape_string($row['user_id']);
        $username = escape_string($row['username']);
        $user_password = escape_string($row['user_password']);
        $user_firstname = escape_string($row['user_firstname']);
        $user_lastname = escape_string($row['user_lastname']);
        $user_email = escape_string($row['user_email']);
        $user_image = escape_string($row['user_image']);
    }

    edit_user();
}


?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="text-center alert-success"><?php display_message(); ?></h3>
        <h1 class="page-header">
            Dashboard <small>Edit User</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <i class="fa fa-dashboard"></i> Edit User
            </li>
        </ol>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="product_name">Product Name </label>
                        <input type="text" name="product_name" class="form-control" value="<?php echo $product_name; ?>">
                    </div>
                    <div class="form-group">
                        <label for="product_shortDes">Product Short Description</label>
                        <textarea name="product_shortDes" id="" cols="30" rows="3" class="form-control"><?php echo $product_shortDes; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="product_description">Product Description</label>
                        <textarea name="product_description" id="" cols="30" rows="10" class="form-control"><?php echo $product_des; ?></textarea>
                    </div>
                    <div class="form-group row">
                        <div class="col-xs-3">
                            <label for="product_price">Product Price</label>
                            <input type="number" name="product_price" class="form-control" size="60" value="<?php echo $product_price; ?>">
                        </div>
                        <div class="col-xs-3">
                            <label for="product_price">Product Old Price</label>
                            <input type="number" name="product_old_price" class="form-control" size="60" value="<?php echo $product_old_price; ?>">
                        </div>
                    </div>
                </div><!--Main Content-->

                <!-- SIDEBAR-->
                <aside id="admin_sidebar" class="col-md-4">
                    <div class="form-group">
                        <input type="submit" name="draft" class="btn btn-warning btn-lg" value="Draft">
                        <input type="submit" name="update" class="btn btn-primary btn-lg" value="Update">
                    </div>
                    <!-- Product Categories-->
                    <div class="form-group">
                        <label for="product_cat_id">Product Category</label>
                        <hr>
                        <select name="product_cat_id" id="product_cat_id" class="form-control">
                            <option value="<?php echo $product_cat_id; ?>"><?php echo display_product_cat_title($product_cat_id); ?></option>
                            <?php display_categories_in_add_product_page(); ?>
                        </select>
                    </div>
                    <!-- Product Brands-->
                    <div class="form-group">
                        <label for="product_brand">Product Brand</label>
                        <input type="text" name="product_brand" class="form-control" value="<?php echo $product_brand; ?>">
                    </div>
                    <div class="form-group">
                        <label for="product_quantity">Product Quantity</label>
                        <input type="number" name="product_quantity" class="form-control" value="<?php echo $product_quantity; ?>">
                    </div>
                    <!-- Product Tags -->
                    <div class="form-group">
                        <label for="product_tags">Product Keywords</label>
                        <input type="text" name="product_tags" class="form-control" value="<?php echo $product_tags; ?>">
                    </div>
                    <!-- Product Image -->
                    <div class="form-group">
                        <label for="product_image">Product Image</label>
                        <input type="file" name="product_image">
                        <br>
                        <img width="200" src="../../resources/<?php echo display_image($product_image); ?>" alt="<?php echo $product_name; ?>">
                    </div>
                </aside><!--SIDEBAR-->
            </div>
        </form>
    </div>
</div>