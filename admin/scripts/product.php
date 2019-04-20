<?php
function addProduct($img, $title, $brand, $color, $price, $category)
{
    //Plan things out...
    try {
        //1. Build the DB connection
        include 'connect.php';
        //2. Validate File
        $file_type      = pathinfo($img['name'], PATHINFO_EXTENSION);
        $accepted_types = array('gif', 'jpg', 'jpe', 'jpeg', 'png');
        if (!in_array($file_type, $accepted_types)) {
            throw new Exception('Wrong file type!');
        }
        //3. Movie file around
        $target_path = '../images/' . $img['name'];
        if (!move_uploaded_file($img['tmp_name'], $target_path)) {
            throw new Exception('Failed to move uploaded file, check permission!');
        }
        $th_copy = '../images/TH_' . $img['name'];
        if (!copy($target_path, $th_copy)) {
            throw new Exception('Failed to move copy file, check permission!');
        }
        //4. Adding entries to database (both tbl_products and tbl_mov_genre)
        $insert_product_query = 'INSERT INTO tbl_products(product_img, product_name, product_brand,';
        $insert_product_query .= ' product_color, product_price)';
        $insert_product_query .= ' VALUES(:product_img, :product_name, :product_brand,';
        $insert_product_query .= ' :product_color, :product_price)';
        $insert_product  = $pdo->prepare($insert_product_query);
        $insert_result = $insert_product->execute(
            array(
                ':product_img'     => $img['name'],
                ':product_name'    => $title,
                ':product_brand'   => $brand,
                ':product_color'   => $color,
                ':product_price'   => $price
            )
        );
        if (!$insert_result) {
            throw new Exception('Failed to insert the new product!');
        }
        
        $last_id = $pdo->lastInsertId();
        $insert_category_query = 'INSERT INTO tbl_products_category(product_id, category_id) VALUES(:product_id, :category_id)';
        $insert_category       = $pdo->prepare($insert_category_query);
        $insert_category->execute(
            array(
                ':product_id' => $last_id,
                ':category_id'  => $category,
            )
        );
        if (!$insert_category->rowCount()) {
            throw new Exception('Failed to set category!');
        }
        //5. If all of above works fine, redirect user to index.php
        redirect_to('index.php');
    } catch (Exception $e) {
        $error = $e->getMessage();
        return $error;
    }
}